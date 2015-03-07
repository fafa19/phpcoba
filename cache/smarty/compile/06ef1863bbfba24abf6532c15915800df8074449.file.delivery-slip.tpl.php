<?php /* Smarty version Smarty-3.1.8, created on 2013-12-17 21:30:53
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\pdf\delivery-slip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2393652b0601d2c8784-52862940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06ef1863bbfba24abf6532c15915800df8074449' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\pdf\\delivery-slip.tpl',
      1 => 1347546548,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2393652b0601d2c8784-52862940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'invoice_address' => 0,
    'delivery_address' => 0,
    'order' => 0,
    'order_invoice' => 0,
    'payment' => 0,
    'order_details' => 0,
    'bgcolor' => 0,
    'product' => 0,
    'HOOK_DISPLAY_PDF' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52b0601d4bfd43_48168478',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b0601d4bfd43_48168478')) {function content_52b0601d4bfd43_48168478($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\tools\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\tools\\smarty\\plugins\\function.cycle.php';
?>
<div style="font-size: 9pt; color: #444">

<table>
	<tr><td>&nbsp;</td></tr>
</table>

<!-- ADDRESSES -->
<table style="width: 100%">
	<tr>
		<td style="width: 20%"></td>
		<td style="width: 80%">
			<?php if (!empty($_smarty_tpl->tpl_vars['invoice_address']->value)){?>
				<table style="width: 100%">
					<tr>
						<td style="width: 50%">
							<span style="font-weight: bold; font-size: 11pt; color: #9E9F9E"><?php echo smartyTranslate(array('s'=>'Delivery Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br />
							 <?php echo $_smarty_tpl->tpl_vars['delivery_address']->value;?>

						</td>
						<td style="width: 50%">
							<span style="font-weight: bold; font-size: 11pt; color: #9E9F9E"><?php echo smartyTranslate(array('s'=>'Billing Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br />
							 <?php echo $_smarty_tpl->tpl_vars['invoice_address']->value;?>

						</td>
					</tr>
				</table>
			<?php }else{ ?>
				<table style="width: 100%">
					<tr>
						<td style="width: 50%">
							<span style="font-weight: bold; font-size: 11pt; color: #9E9F9E"><?php echo smartyTranslate(array('s'=>'Billing & Delivery Address','pdf'=>'true'),$_smarty_tpl);?>
</span><br />
							 <?php echo $_smarty_tpl->tpl_vars['delivery_address']->value;?>

						</td>
						<td style="width: 50%">

						</td>
					</tr>
				</table>
			<?php }?>
		</td>
	</tr>
</table>
<!-- / ADDRESSES -->

<table>
	<tr><td style="line-height: 8px">&nbsp;</td></tr>
</table>

<!-- PRODUCTS TAB -->
<table style="width: 100%">
	<tr>
		<td style="width: 20%; padding-right: 7px; text-align: right; vertical-align: top">
			<!-- CUSTOMER INFORMATIONS -->
			<b><?php echo smartyTranslate(array('s'=>'Order Number:','pdf'=>'true'),$_smarty_tpl);?>
</b><br />
			<?php echo $_smarty_tpl->tpl_vars['order']->value->getUniqReference();?>
<br />
			<br />
			<b><?php echo smartyTranslate(array('s'=>'Order Date:','pdf'=>'true'),$_smarty_tpl);?>
</b><br />
			<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['order']->value->date_add,"%d-%m-%Y %H:%M");?>
<br />
			<br />
			<b><?php echo smartyTranslate(array('s'=>'Payment Method:','pdf'=>'true'),$_smarty_tpl);?>
</b><br />
			<table style="width: 100%;">
			<?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_invoice']->value->getOrderPaymentCollection(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value){
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
				<tr>
					<td style="width: 50%"><?php echo $_smarty_tpl->tpl_vars['payment']->value->payment_method;?>
</td>
					<td style="width: 50%"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['displayPrice'][0][0]->displayPriceSmarty(array('price'=>$_smarty_tpl->tpl_vars['payment']->value->amount,'currency'=>$_smarty_tpl->tpl_vars['order']->value->id_currency),$_smarty_tpl);?>
</td>
				</tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['payment']->_loop) {
?>
				<tr>
					<td><?php echo smartyTranslate(array('s'=>'No payment'),$_smarty_tpl);?>
</td>
				</tr>
			<?php } ?>
			</table>
			<br />
			<!-- / CUSTOMER INFORMATIONS -->
		</td>
		<td style="width: 80%; text-align: right">
			<table style="width: 100%">
				<tr style="line-height:6px;">
					<td style="text-align: left; background-color: #4D4D4D; color: #FFF; padding-left: 10px; font-weight: bold; width: 60%"><?php echo smartyTranslate(array('s'=>'ITEMS TO BE DELIVERED','pdf'=>'true'),$_smarty_tpl);?>
</td>
					<td style="background-color: #4D4D4D; color: #FFF; text-align: left; font-weight: bold; width: 20%"><?php echo smartyTranslate(array('s'=>'REFERENCE','pdf'=>'true'),$_smarty_tpl);?>
</td>
					<td style="background-color: #4D4D4D; color: #FFF; text-align: center; font-weight: bold; width: 20%"><?php echo smartyTranslate(array('s'=>'QTY','pdf'=>'true'),$_smarty_tpl);?>
</td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['order_details']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
				<?php echo smarty_function_cycle(array('values'=>'#FFF,#DDD','assign'=>'bgcolor'),$_smarty_tpl);?>

				<tr style="line-height:6px;background-color:<?php echo $_smarty_tpl->tpl_vars['bgcolor']->value;?>
;">
					<td style="text-align: left; width: 60%"><?php echo $_smarty_tpl->tpl_vars['product']->value['product_name'];?>
</td>
					<td style="text-align: left; width: 20%">
						<?php if (empty($_smarty_tpl->tpl_vars['product']->value['product_reference'])){?>
							---
						<?php }else{ ?>
							<?php echo $_smarty_tpl->tpl_vars['product']->value['product_reference'];?>

						<?php }?>
					</td>
					<td style="text-align: center; width: 20%"><?php echo $_smarty_tpl->tpl_vars['product']->value['product_quantity'];?>
</td>
				</tr>
				<?php } ?>
			</table>
		</td>
	</tr>
</table>
<!-- / PRODUCTS TAB -->

<table>
	<tr><td style="line-height: 8px">&nbsp;</td></tr>
</table>

<?php if (isset($_smarty_tpl->tpl_vars['HOOK_DISPLAY_PDF']->value)){?>
	<div style="line-height: 1pt">&nbsp;</div>
	<table style="width: 100%">
		<tr>
			<td style="width: 15%"></td>
			<td style="width: 85%">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_DISPLAY_PDF']->value;?>

			</td>
		</tr>
	</table>
<?php }?>

</div>

<?php }} ?>