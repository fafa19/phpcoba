<?php /* Smarty version Smarty-3.1.8, created on 2013-12-17 15:52:08
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\modules\bankwire\views\templates\hook\payment_return.tpl" */ ?>
<?php /*%%SmartyHeaderCode:320652b010b87b9592-21489427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2d90c110bccf5ff0be4a3283d5405c406b3084f' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\modules\\bankwire\\views\\templates\\hook\\payment_return.tpl',
      1 => 1347546546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320652b010b87b9592-21489427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'shop_name' => 0,
    'total_to_pay' => 0,
    'bankwireOwner' => 0,
    'bankwireDetails' => 0,
    'bankwireAddress' => 0,
    'reference' => 0,
    'id_order' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52b010b88841c5_49468701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b010b88841c5_49468701')) {function content_52b010b88841c5_49468701($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['status']->value=='ok'){?>
<p><?php echo smartyTranslate(array('s'=>'Your order on %s is complete.','sprintf'=>$_smarty_tpl->tpl_vars['shop_name']->value,'mod'=>'bankwire'),$_smarty_tpl);?>

		<br /><br />
		<?php echo smartyTranslate(array('s'=>'Please send us a bank wire with:','mod'=>'bankwire'),$_smarty_tpl);?>

		<br /><br />- <?php echo smartyTranslate(array('s'=>'an amount of','mod'=>'bankwire'),$_smarty_tpl);?>
 <span class="price"> <strong><?php echo $_smarty_tpl->tpl_vars['total_to_pay']->value;?>
</strong></span>
		<br /><br />- <?php echo smartyTranslate(array('s'=>'to the account owner of','mod'=>'bankwire'),$_smarty_tpl);?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireOwner']->value){?><?php echo $_smarty_tpl->tpl_vars['bankwireOwner']->value;?>
<?php }else{ ?>___________<?php }?></strong>
		<br /><br />- <?php echo smartyTranslate(array('s'=>'with these details','mod'=>'bankwire'),$_smarty_tpl);?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireDetails']->value){?><?php echo $_smarty_tpl->tpl_vars['bankwireDetails']->value;?>
<?php }else{ ?>___________<?php }?></strong>
		<br /><br />- <?php echo smartyTranslate(array('s'=>'to this bank','mod'=>'bankwire'),$_smarty_tpl);?>
  <strong><?php if ($_smarty_tpl->tpl_vars['bankwireAddress']->value){?><?php echo $_smarty_tpl->tpl_vars['bankwireAddress']->value;?>
<?php }else{ ?>___________<?php }?></strong>
		<?php if (!isset($_smarty_tpl->tpl_vars['reference']->value)){?>
			<br /><br />- <?php echo smartyTranslate(array('s'=>'Do not forget to insert your order number #%d in the subject of your bank wire','sprintf'=>$_smarty_tpl->tpl_vars['id_order']->value,'mod'=>'bankwire'),$_smarty_tpl);?>

		<?php }else{ ?>
			<br /><br />- <?php echo smartyTranslate(array('s'=>'Do not forget to insert your order reference %s in the subject of your bank wire.','sprintf'=>$_smarty_tpl->tpl_vars['reference']->value,'mod'=>'bankwire'),$_smarty_tpl);?>

		<?php }?>		<br /><br /><?php echo smartyTranslate(array('s'=>'An e-mail has been sent to you with this information.','mod'=>'bankwire'),$_smarty_tpl);?>

		<br /><br /> <strong><?php echo smartyTranslate(array('s'=>'Your order will be sent as soon as we receive your settlement.','mod'=>'bankwire'),$_smarty_tpl);?>
</strong>
		<br /><br /><?php echo smartyTranslate(array('s'=>'For any questions or for further information, please contact our','mod'=>'bankwire'),$_smarty_tpl);?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
"><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'bankwire'),$_smarty_tpl);?>
</a>.
	</p>
<?php }else{ ?>
	<p class="warning">
		<?php echo smartyTranslate(array('s'=>'We noticed a problem with your order. If you think this is an error, you can contact our','mod'=>'bankwire'),$_smarty_tpl);?>
 
		<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
"><?php echo smartyTranslate(array('s'=>'customer support','mod'=>'bankwire'),$_smarty_tpl);?>
</a>.
	</p>
<?php }?>
<?php }} ?>