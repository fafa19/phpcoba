<?php /* Smarty version Smarty-3.1.8, created on 2013-12-16 20:44:01
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\themes\theme481\modules\blockwishlist\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3157552af03a17f1c53-63976151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4c8631d76c4d2c98b033c4f8870c44afde361f05' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\themes\\theme481\\modules\\blockwishlist\\my-account.tpl',
      1 => 1363052636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3157552af03a17f1c53-63976151',
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
  'unifunc' => 'content_52af03a1810573_38943496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52af03a1810573_38943496')) {function content_52af03a1810573_38943496($_smarty_tpl) {?>

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