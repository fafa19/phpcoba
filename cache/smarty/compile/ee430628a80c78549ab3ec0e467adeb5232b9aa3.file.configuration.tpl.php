<?php /* Smarty version Smarty-3.1.8, created on 2013-12-18 00:27:02
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\modules\carriercompare\template\configuration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3059952b0896680b695-43764241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee430628a80c78549ab3ec0e467adeb5232b9aa3' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\modules\\carriercompare\\template\\configuration.tpl',
      1 => 1347546548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3059952b0896680b695-43764241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_error' => 0,
    'refresh_method' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52b089668d68b0_53545137',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b089668d68b0_53545137')) {function content_52b089668d68b0_53545137($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\tools\\smarty\\plugins\\modifier.escape.php';
?><?php if (isset($_smarty_tpl->tpl_vars['display_error']->value)){?>
	<?php if ($_smarty_tpl->tpl_vars['display_error']->value){?>
		<div class="error"><?php echo smartyTranslate(array('s'=>'An error occured during the form validation'),$_smarty_tpl);?>
</div>
	<?php }else{ ?>
		<div class="conf"><?php echo smartyTranslate(array('s'=>'Configuration updated'),$_smarty_tpl);?>
</div>
	<?php }?>
<?php }?>

<form method="post" action="<?php echo smarty_modifier_escape($_SERVER['REQUEST_URI'], 'htmlall', 'UTF-8');?>
">
	<fieldset>
		<div class="warn"><?php echo smartyTranslate(array('s'=>'This module is only available on standard order process because on One Page Checkout the carrier list is already available'),$_smarty_tpl);?>
.</div>
		<legend><?php echo smartyTranslate(array('s'=>'Global Configuration'),$_smarty_tpl);?>
</legend>
		
		<label for="refresh_method">Refresh carrier list method</label>
		<div class="margin-form">
			<select id="refresh_method" name="refresh_method">
				<option value="0" <?php if ($_smarty_tpl->tpl_vars['refresh_method']->value==0){?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Anytime'),$_smarty_tpl);?>
</option>
				<option value="1" <?php if ($_smarty_tpl->tpl_vars['refresh_method']->value==1){?>selected<?php }?>><?php echo smartyTranslate(array('s'=>'Required all information set'),$_smarty_tpl);?>
</option>
			</select>
			<p><?php echo smartyTranslate(array('s'=>'Set the way to refresh information for a customer'),$_smarty_tpl);?>
</p>
		</div>
		
		<div class="margin-form">
			<input name="setGlobalConfiguration" type="submit" class="button" value="<?php echo smartyTranslate(array('s'=>'Submit'),$_smarty_tpl);?>
">
		</div>
	</fieldset>
</form><?php }} ?>