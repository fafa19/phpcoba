<?php /* Smarty version Smarty-3.1.8, created on 2013-12-17 22:21:14
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\modules\blockwishlist\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2320452b06bea491b62-86684223%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09a1a5435613babb37db17c4051bb17884d2fd57' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\modules\\blockwishlist\\my-account.tpl',
      1 => 1347546548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2320452b06bea491b62-86684223',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wishlist_link' => 0,
    'mobile_hook' => 0,
    'module_template_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52b06bea4ff302_17680654',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b06bea4ff302_17680654')) {function content_52b06bea4ff302_17680654($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a href="<?php echo $_smarty_tpl->tpl_vars['wishlist_link']->value;?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<img <?php if (isset($_smarty_tpl->tpl_vars['mobile_hook']->value)){?> src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
img/gift.png" class="ui-li-icon ui-li-thumb" <?php }else{ ?> src="<?php echo $_smarty_tpl->tpl_vars['module_template_dir']->value;?>
img/gift.gif" class="icon"<?php }?>  alt="<?php echo smartyTranslate(array('s'=>'wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
" /> <?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>