<?php /* Smarty version Smarty-3.1.8, created on 2013-12-14 23:33:44
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\themes\theme481\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1736752ac8868417a18-93471836%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06c93516ee12f7d94e29d65c49bf23a16bc2bcf9' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\themes\\theme481\\footer.tpl',
      1 => 1363052636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1736752ac8868417a18-93471836',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'page_name' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52ac88684307f1_37961968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ac88684307f1_37961968')) {function content_52ac88684307f1_37961968($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\tools\\smarty\\plugins\\modifier.date_format.php';
?>
    <?php if (!$_smarty_tpl->tpl_vars['content_only']->value){?>
	   
       	
         </div>
   
					<?php if ($_smarty_tpl->tpl_vars['page_name']->value!=='index'){?>
            			<aside  class="grid_6">
        					<div id="right_column" class="column">
								<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

                    		</div>
						</aside>
            		<?php }?>
                        
       	</div>
         	</div>

                    <footer id="footer">
                            <div class="container_24 clearfix">
                                <div class="grid_24">
                                        <div class="footer-inner">
                                        <?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>

                                        <div class="clear"></div>	
                                        <p class="row-footer">&copy; <?php echo smarty_modifier_date_format(time(),"%Y");?>
 <?php echo smartyTranslate(array('s'=>'Powered by','mod'=>'blockcms'),$_smarty_tpl);?>
 <a href="http://www.prestashop.com">PrestaShop</a>&trade;. All rights reserved</p>
                                        </div>
                                </div>
                            </div>
        
                    </footer>            
                        
	   </div>
    <?php }?>         	
	</body>
</html>
<?php }} ?>