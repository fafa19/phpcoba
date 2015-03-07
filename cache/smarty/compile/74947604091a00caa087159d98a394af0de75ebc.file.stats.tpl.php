<?php /* Smarty version Smarty-3.1.8, created on 2013-12-16 20:29:27
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\admin123/themes/default\template\controllers\stats\stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1989052af003720eb52-07546136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74947604091a00caa087159d98a394af0de75ebc' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\admin123/themes/default\\template\\controllers\\stats\\stats.tpl',
      1 => 1347546544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1989052af003720eb52-07546136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_name' => 0,
    'module_instance' => 0,
    'hook' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52af00372633f0_56687315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52af00372633f0_56687315')) {function content_52af00372633f0_56687315($_smarty_tpl) {?>

<div>
	<?php if ($_smarty_tpl->tpl_vars['module_name']->value){?>
		<?php if ($_smarty_tpl->tpl_vars['module_instance']->value&&$_smarty_tpl->tpl_vars['module_instance']->value->active){?>
			<?php echo $_smarty_tpl->tpl_vars['hook']->value;?>

		<?php }else{ ?>
			<?php echo smartyTranslate(array('s'=>'Module not found'),$_smarty_tpl);?>

		<?php }?>
	<?php }else{ ?>
		<h3 class="space"><?php echo smartyTranslate(array('s'=>'Please select a module in the left column.'),$_smarty_tpl);?>
</h3>
	<?php }?>
</div>
</div>
</div>


<?php }} ?>