<?php /* Smarty version Smarty-3.1.8, created on 2013-12-14 23:33:42
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\modules\tmpermanentlinks\tmpermanentlinks-header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2679052ac8866bf0e74-98447901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '69a372ddf5ce54030f8dc542f173cd3cb1297cfb' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\modules\\tmpermanentlinks\\tmpermanentlinks-header.tpl',
      1 => 1363052636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2679052ac8866bf0e74-98447901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'page_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52ac8866c7d1b7_65744318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ac8866c7d1b7_65744318')) {function content_52ac8866c7d1b7_65744318($_smarty_tpl) {?><!-- Block permanent links module HEADER -->
<ul id="tmheaderlinks">
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index.php');?>
"<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'home','mod'=>'tmpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop');?>
"<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='prices-drop'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'specials','mod'=>'tmpermanentlinks'),$_smarty_tpl);?>
</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products');?>
" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='new-products'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'New products','mod'=>'tmpermanentlinks'),$_smarty_tpl);?>
</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='my-account'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'Your Account','mod'=>'tmpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='contact'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'contact','mod'=>'tmpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap');?>
" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='sitemap'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'tmpermanentlinks'),$_smarty_tpl);?>
</a></li>
</ul>
<div class="mobile-link-top">
<h4><span>MENU</span> <span class="open-menu"></span></h4>
<ul id="mobilelink">
	<li <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index.php');?>
"<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'home','mod'=>'tmpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='prices-drop'){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('prices-drop');?>
"<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='prices-drop'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'specials','mod'=>'tmpermanentlinks'),$_smarty_tpl);?>
</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='new-products'){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products');?>
" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='new-products'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'New products','mod'=>'tmpermanentlinks'),$_smarty_tpl);?>
</a></li>
    <li <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='my-account'){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='my-account'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'Your Account','mod'=>'tmpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='contact-form'){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='contact'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'contact','mod'=>'tmpermanentlinks'),$_smarty_tpl);?>
</a></li>
	<li <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='sitemap'){?> class="active"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('sitemap');?>
" <?php if ($_smarty_tpl->tpl_vars['page_name']->value=='sitemap'){?> class="active"<?php }?>><?php echo smartyTranslate(array('s'=>'sitemap','mod'=>'tmpermanentlinks'),$_smarty_tpl);?>
</a></li>
</ul>
</div>
<!-- /Block permanent links module HEADER -->
<?php }} ?>