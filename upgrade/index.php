<?php
define('PHPCMS_PATH', dirname(__FILE__).DIRECTORY_SEPARATOR.'../');
define('PATH', dirname(__FILE__).DIRECTORY_SEPARATOR);
include PHPCMS_PATH.'/phpcms/base.php';
pc_base::load_sys_class('param','','','0');

//升级程序配置
$configs = include PATH.'config.php';

$op = isset($_GET['op']) && trim($_GET['op']) ? trim($_GET['op']) : 'index';
$configs['steps'][] = 'index';
if (!in_array($op, $configs['steps'])) {
	showmessage('错误的操作流程，无法进行操作。');
}

//版本文件地址
$version_filepath = CACHE_PATH.'configs'.DIRECTORY_SEPARATOR.'version.php';

if ($configs['from_release'] <= '20101022') {
	include PHPCMS_PATH.'phpcms'.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'pc_version.php';
	$now_version = PC_VERSION;
	$now_release = PC_RELEASE;
} else {
	$now_version = pc_base::load_config('version', 'pc_version');
	$now_release = pc_base::load_config('version', 'pc_release');
}

//对补丁版本进行验证
if ($op != 'index' && isset($configs['version_check']) && $configs['version_check'] == 1) {
	if ($now_release != $configs['from_release'] || $now_version != $configs['from_version']) {
		showmessage('本升级补丁对版本要求严格，请确定您的版本是可用于升级的版本。');
	}
}

switch ($op) {
	case 'index':
		break;

	case 'ext':
		$file_list = glob(PATH.'ext'.DIRECTORY_SEPARATOR.'*');
		foreach ($file_list as $k=>$v) {
			if(in_array(strtolower(substr($v, -3, 3)), array('php', 'sql'))) {
				$file_list[$k] = $v;
			} else {
				unset($file_list[$k]);
			}
		}

		if (isset($_GET['step'])) {
			$num = isset($_GET['num']) && intval($_GET['num']) ?  intval($_GET['num']) : 0;
			$filename = isset($_GET['filename']) && trim($_GET['filename']) ?  trim($_GET['filename']) : '';
			$base_filename = basename($file_list[$num]);
			if ( empty($filename) || !isset($file_list[$num]) || $base_filename != $filename || !file_exists($file_list[$num])) {
				exit;
			}

			if (strtolower(substr($file_list[$num], -3, 3)) == 'sql' && $data = file_get_contents($file_list[$num])) {

				$model_name = substr($base_filename, 0, -4);
				if (!$db = pc_base::load_model($model_name.'_model')) {
					exit;
				}
				$mysql_server_version = $db->version();
				$dbcharset = pc_base::load_config('database','default');
				$dbcharset = $dbcharset['charset'];


				$sqls = explode(';', $data);
				foreach ($sqls as $v) {
					if (empty($v)) continue;
					if(mysql_get_server_info > '4.1' && $dbcharset) {
						$v = preg_replace("/TYPE=(InnoDB|MyISAM|MEMORY)( DEFAULT CHARSET=[^; ]+)?/", "ENGINE=\\1 DEFAULT CHARSET=".$dbcharset,$v);
					}
					$db->query($v);
				}
			} elseif (strtolower(substr($file_list[$num], -3, 3)) == 'php' && file_exists($file_list[$num])) {
				include $file_list[$num];
				if (strtolower(basename($file_list[$num])) == 'system_menu.lang.php' && file_exists($file_list[$num])) {
					include $file_list[$num];
					$new_lan = $LANG;
					unset($LANG);
					$lang = pc_base::load_config('system','lang');
					$menu_lan_file = PC_PATH.'languages'.DIRECTORY_SEPARATOR.$lang.DIRECTORY_SEPARATOR.'system_menu.lang.php';
					include $menu_lan_file;
					$original_lan = $LANG;
					unset($LANG);
					$diff_lan = array_diff($new_lan, $original_lan);

					$content = file_get_contents($menu_lan_file);
					$content = substr($content,0,-2);
					$data = '';
					foreach ($diff_lan as $k => $l) {
						$data .= "\$LANG['".$k."'] = '".$l."';\r\n";
					}
					$data = $content.$data."?>";
					file_put_contents($menu_lan_file, $data);
				}
			}

			echo $filename.'执行完成！';
			exit;
		} else {
			$str = '{';
			foreach ($file_list as $k=>$v) {
				$str .= ($k>0 ? ',' : '').basename($k).':\''.basename($v).'\'';
			}
			$str .='}';
			$num = count($file_list);
		}
		break;

	case 'version':
		$data = array('pc_version' => $configs['to_version'],'pc_release' => $configs['to_release']);
		$version_update_success = 0;
		if (@file_put_contents($version_filepath, '<?php return '.var_export($data, true).';?>')) {
			$version_update_success = 1;
		}
		$file_list = glob(PATH.'ext'.DIRECTORY_SEPARATOR.'*');
		if (is_array($file_list) && !empty($file_list)) {
			foreach ($file_list as $f) {
				unlink($f);
			}
		}
		break;
}
include PATH.'template'.DIRECTORY_SEPARATOR.'index.php';
?>