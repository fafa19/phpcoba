<?php /* Smarty version Smarty-3.1.8, created on 2013-12-14 23:10:16
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\admin123/themes/default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:488152ac82e84232f2-16558641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d58d21ff100aaaf453d2696233d71783d5549ea' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\admin123/themes/default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1347546544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '488152ac82e84232f2-16558641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52ac82e842ae05_27524946',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ac82e842ae05_27524946')) {function content_52ac82e842ae05_27524946($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="edit" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<img src="../img/admin/edit.gif" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a><?php }} ?>