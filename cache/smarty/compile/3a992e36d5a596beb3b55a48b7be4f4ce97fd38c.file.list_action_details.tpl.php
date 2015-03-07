<?php /* Smarty version Smarty-3.1.8, created on 2013-12-14 23:47:26
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\admin123/themes/default\template\helpers\list\list_action_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3208052ac8b9ed1c9c5-98084720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a992e36d5a596beb3b55a48b7be4f4ce97fd38c' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\admin123/themes/default\\template\\helpers\\list\\list_action_details.tpl',
      1 => 1347546544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3208052ac8b9ed1c9c5-98084720',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'id' => 0,
    'action' => 0,
    'controller' => 0,
    'token' => 0,
    'json_params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52ac8b9eddcd36_08549805',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ac8b9eddcd36_08549805')) {function content_52ac8b9eddcd36_08549805($_smarty_tpl) {?>

<a class="pointer" id="details_<?php echo $_smarty_tpl->tpl_vars['params']->value['action'];?>
_<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" onclick="display_action_details('<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['params']->value['action'];?>
', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['json_params']->value, ENT_QUOTES, 'UTF-8');?>
); return false">
	<img src="../img/admin/more.png" alt="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" />
</a>
<?php }} ?>