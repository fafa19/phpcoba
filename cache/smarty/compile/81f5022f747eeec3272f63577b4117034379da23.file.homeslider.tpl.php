<?php /* Smarty version Smarty-3.1.8, created on 2013-12-14 22:47:11
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\modules\homeslider\homeslider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1982952ac7d7f54c035-41551651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81f5022f747eeec3272f63577b4117034379da23' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\modules\\homeslider\\homeslider.tpl',
      1 => 1347546548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1982952ac7d7f54c035-41551651',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
    'homeslider_slides' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52ac7d7f596a90_82267257',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ac7d7f596a90_82267257')) {function content_52ac7d7f596a90_82267257($_smarty_tpl) {?>

<!-- Module HomeSlider -->
<?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)){?>
<script type="text/javascript">
<?php if (isset($_smarty_tpl->tpl_vars['homeslider_slides']->value)&&count($_smarty_tpl->tpl_vars['homeslider_slides']->value)>1){?>
	<?php if ($_smarty_tpl->tpl_vars['homeslider']->value['loop']==1){?>
		var homeslider_loop = true;
	<?php }else{ ?>
		var homeslider_loop = false;
	<?php }?>
<?php }else{ ?>
	var homeslider_loop = false;
<?php }?>
var homeslider_speed = <?php echo $_smarty_tpl->tpl_vars['homeslider']->value['speed'];?>
;
var homeslider_pause = <?php echo $_smarty_tpl->tpl_vars['homeslider']->value['pause'];?>
;
</script>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['homeslider_slides']->value)){?>
<ul id="homeslider">
<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['homeslider_slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
	<?php if ($_smarty_tpl->tpl_vars['slide']->value['active']){?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
"><img src="<?php echo @_MODULE_DIR_;?>
/homeslider/images/<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['slide']->value['legend'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['slide']->value['description'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeslider']->value['height'];?>
" width="<?php echo $_smarty_tpl->tpl_vars['homeslider']->value['width'];?>
" /></a></li>
	<?php }?>
<?php } ?>
</ul>
<?php }?>
<!-- /Module HomeSlider -->
<?php }} ?>