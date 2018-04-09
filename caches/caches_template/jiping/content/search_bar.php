<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><form method="get" name="" id="" action="<?php echo APP_PATH;?>index.php" target="_blank" onsubmit="check_search()">
             <input type="hidden" name="m" value="search"/>
            <input type="hidden" name="c" value="index"/>
            <input type="hidden" name="a" value="init"/>
            <input type="hidden" name="typeid" value="53" id="typeid"/>
            <input type="hidden" name="siteid" value="<?php echo $siteid;?>" id="siteid"/>
			<div class="select">
              <select style="display:none;" name="catid" id="headSearch" ><option selected="selected" value="0">请选择产品分类</option>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=577991b284d5e2bd9352fefedf406b47&sql=SELECT+catname%2Ccatid+FROM+ji_category+WHERE+parentid%3D43&return=cat_pro_arr\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT catname,catid FROM ji_category WHERE parentid=43 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$cat_pro_arr = $a;unset($a);?>
                <?php $n=1;if(is_array($cat_pro_arr)) foreach($cat_pro_arr AS $cat_num) { ?>
                <option value="<?php echo $cat_num['catid'];?>"><?php echo $cat_num['catname'];?></option>
                <?php $n++;}unset($n); ?>
              </select>
            </div>
           
			<input type="text" class="t_ipt" name="q" id="q" onblur="if(this.value==''){this.value='请输入搜索关键字';this.style.color='#bebebe'}" onfocus="if(this.value=='请输入搜索关键字'){this.value='';this.style.color='#333'}" value="请输入搜索关键字" /><button type="submit" class="btn_srh">搜索</button>
</form>