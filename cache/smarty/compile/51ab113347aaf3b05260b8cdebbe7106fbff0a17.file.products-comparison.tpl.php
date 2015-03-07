<?php /* Smarty version Smarty-3.1.8, created on 2013-12-15 10:55:27
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\themes\theme481\products-comparison.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1169652ad282f0667f9-60221399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51ab113347aaf3b05260b8cdebbe7106fbff0a17' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\themes\\theme481\\products-comparison.tpl',
      1 => 1363052636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1169652ad282f0667f9-60221399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hasProduct' => 0,
    'products' => 0,
    'product' => 0,
    'use_taxes' => 0,
    'priceDisplay' => 0,
    'width' => 0,
    'link' => 0,
    'homeSize' => 0,
    'restricted_country_mode' => 0,
    'PS_CATALOG_MODE' => 0,
    'taxes_behavior' => 0,
    'unit_price' => 0,
    'allow_oosp' => 0,
    'add_prod_display' => 0,
    'static_token' => 0,
    'ordered_features' => 0,
    'classname' => 0,
    'feature' => 0,
    'product_id' => 0,
    'product_features' => 0,
    'feature_id' => 0,
    'tab' => 0,
    'HOOK_EXTRA_PRODUCT_COMPARISON' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52ad282f35f363_00580386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ad282f35f363_00580386')) {function content_52ad282f35f363_00580386($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\tools\\smarty\\plugins\\modifier.escape.php';
if (!is_callable('smarty_function_math')) include 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\tools\\smarty\\plugins\\function.math.php';
if (!is_callable('smarty_function_cycle')) include 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\tools\\smarty\\plugins\\function.cycle.php';
?><?php $_smarty_tpl->_capture_stack[0][] = array('path', null, null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'Product Comparison'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['tpl_dir']->value)."./breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<h1><?php echo smartyTranslate(array('s'=>'Product Comparison'),$_smarty_tpl);?>
</h1>
<?php if ($_smarty_tpl->tpl_vars['hasProduct']->value){?>
<table id="product_comparison" class="std bordercolor">
	<tr class="comparison_header">
		<th>
			<?php echo smartyTranslate(array('s'=>'Features'),$_smarty_tpl);?>

		</th>
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
			<th><a class="product_link" href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getLink();?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value->name,30,'...'), 'htmlall', 'UTF-8');?>
"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value->name,40,'...'), 'htmlall', 'UTF-8');?>
</a></th>
		<?php } ?>
	</tr>
		<td width="20%"></td>
		<?php $_smarty_tpl->tpl_vars['taxes_behavior'] = new Smarty_variable(false, null, 0);?>
		<?php if ($_smarty_tpl->tpl_vars['use_taxes']->value&&(!$_smarty_tpl->tpl_vars['priceDisplay']->value||$_smarty_tpl->tpl_vars['priceDisplay']->value==2)){?>
			<?php $_smarty_tpl->tpl_vars['taxes_behavior'] = new Smarty_variable(true, null, 0);?>
		<?php }?>
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
		<?php $_smarty_tpl->tpl_vars['replace_id'] = new Smarty_variable(($_smarty_tpl->tpl_vars['product']->value->id).('|'), null, 0);?>
		<td width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
%" class="ajax_block_product">
			<p class="product_desc"><a class="product_descr" href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getLink();?>
" title="<?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>
"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['product']->value->description_short),120,'...');?>
</a></p>
			<div class="comparison_product_infos">
			<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getLink();?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'html', 'UTF-8');?>
" class="product_image" >
				<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['product']->value->id_image,'home');?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->name, 'html', 'UTF-8');?>
" width="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['width'];?>
" height="<?php echo $_smarty_tpl->tpl_vars['homeSize']->value['height'];?>
" />
			</a>
			<?php if (isset($_smarty_tpl->tpl_vars['product']->value->show_price)&&$_smarty_tpl->tpl_vars['product']->value->show_price&&!isset($_smarty_tpl->tpl_vars['restricted_country_mode']->value)&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
		<p class="price_container"><span class="price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value->getPrice($_smarty_tpl->tpl_vars['taxes_behavior']->value)),$_smarty_tpl);?>
</span></p>
				<div class="product_discount">
				<?php if ($_smarty_tpl->tpl_vars['product']->value->on_sale){?>
					<span class="on_sale"><?php echo smartyTranslate(array('s'=>'On sale!'),$_smarty_tpl);?>
</span>
				<?php }elseif($_smarty_tpl->tpl_vars['product']->value->specificPrice&&$_smarty_tpl->tpl_vars['product']->value->specificPrice['reduction']){?>
					<span class="discount"><?php echo smartyTranslate(array('s'=>'Reduced price!'),$_smarty_tpl);?>
</span>
				<?php }?>
				</div>
					<?php if (!empty($_smarty_tpl->tpl_vars['product']->value->unity)&&$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio>0.000000){?>
					    <?php echo smarty_function_math(array('equation'=>"pprice / punit_price",'pprice'=>$_smarty_tpl->tpl_vars['product']->value->getPrice($_smarty_tpl->tpl_vars['taxes_behavior']->value),'punit_price'=>$_smarty_tpl->tpl_vars['product']->value->unit_price_ratio,'assign'=>'unit_price'),$_smarty_tpl);?>

					<p class="comparison_unit_price"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['unit_price']->value),$_smarty_tpl);?>
 <?php echo smartyTranslate(array('s'=>'per'),$_smarty_tpl);?>
 <?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->unity, 'htmlall', 'UTF-8');?>
</p>
				<?php }else{ ?>
				&nbsp;
				<?php }?>
			<?php }?>
			<!-- availability -->
			<p class="comparison_availability_statut">
					<?php if (!(($_smarty_tpl->tpl_vars['product']->value->quantity<=0&&!$_smarty_tpl->tpl_vars['product']->value->available_later)||($_smarty_tpl->tpl_vars['product']->value->quantity!=0&&!$_smarty_tpl->tpl_vars['product']->value->available_now)||!$_smarty_tpl->tpl_vars['product']->value->available_for_order||$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value)){?>
						<span id="availability_label"><?php echo smartyTranslate(array('s'=>'Availability:'),$_smarty_tpl);?>
</span>
						<span id="availability_value"<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0){?> class="warning-inline"<?php }?>>
							<?php if ($_smarty_tpl->tpl_vars['product']->value->quantity<=0){?>
								<?php if ($_smarty_tpl->tpl_vars['allow_oosp']->value){?>
									<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->available_later, 'htmlall', 'UTF-8');?>

								<?php }else{ ?>
									<?php echo smartyTranslate(array('s'=>'This product is no longer in stock'),$_smarty_tpl);?>

								<?php }?>
							<?php }else{ ?>
								<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value->available_now, 'htmlall', 'UTF-8');?>

							<?php }?>
						</span>
					<?php }?>
			</p>
			<a class="cmp_remove" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison.php',true);?>
" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
"><?php echo smartyTranslate(array('s'=>'Remove'),$_smarty_tpl);?>
</a>
				<div class="clearblock"></div>
				<a class="button" href="<?php echo $_smarty_tpl->tpl_vars['product']->value->getLink();?>
" title="<?php echo smartyTranslate(array('s'=>'View'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'View'),$_smarty_tpl);?>
</a>
				<div class="clearblock"></div>
				<?php if ((!$_smarty_tpl->tpl_vars['product']->value->hasAttributes()||(isset($_smarty_tpl->tpl_vars['add_prod_display']->value)&&($_smarty_tpl->tpl_vars['add_prod_display']->value==1)))&&$_smarty_tpl->tpl_vars['product']->value->minimal_quantity==1&&$_smarty_tpl->tpl_vars['product']->value->customizable!=2&&!$_smarty_tpl->tpl_vars['PS_CATALOG_MODE']->value){?>
					<?php if (($_smarty_tpl->tpl_vars['product']->value->quantity>0||$_smarty_tpl->tpl_vars['product']->value->allow_oosp)){?>
							<a class="exclusive ajax_add_to_cart_button" rel="ajax_id_product_<?php echo $_smarty_tpl->tpl_vars['product']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('cart',true,null,"qty=1&amp;id_product=".($_smarty_tpl->tpl_vars['product']->value->id)."&amp;token=".($_smarty_tpl->tpl_vars['static_token']->value)."&amp;add");?>
" title="<?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</a>
					<?php }else{ ?>
						<span class="exclusive"><?php echo smartyTranslate(array('s'=>'Add to cart'),$_smarty_tpl);?>
</span>
					<?php }?>
				<?php }else{ ?>
					<div class="clearblock"></div>
				<?php }?>
			</div>
		</td>
	<?php } ?>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['ordered_features']->value){?>
	<?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ordered_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value){
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
	<tr>
		<?php echo smarty_function_cycle(array('values'=>'comparison_feature_odd,comparison_feature_even','assign'=>'classname'),$_smarty_tpl);?>

		<td class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
" >
			<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['feature']->value['name'], 'htmlall', 'UTF-8');?>

		</td>
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
				<?php $_smarty_tpl->tpl_vars['product_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->id, null, 0);?>
				<?php $_smarty_tpl->tpl_vars['feature_id'] = new Smarty_variable($_smarty_tpl->tpl_vars['feature']->value['id_feature'], null, 0);?>
				<?php if (isset($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product_id']->value])){?>
					<?php $_smarty_tpl->tpl_vars['tab'] = new Smarty_variable($_smarty_tpl->tpl_vars['product_features']->value[$_smarty_tpl->tpl_vars['product_id']->value], null, 0);?>
					<td width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
%" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['tab']->value[$_smarty_tpl->tpl_vars['feature_id']->value], 'htmlall', 'UTF-8');?>
</td>
				<?php }else{ ?>
					<td width="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
%" class="<?php echo $_smarty_tpl->tpl_vars['classname']->value;?>
 comparison_infos"></td>
				<?php }?>
			<?php } ?>
	</tr>
	<?php } ?>
	<?php }else{ ?>
	<tr>
		<td></td>
		<td colspan="<?php echo count($_smarty_tpl->tpl_vars['products']->value)+1;?>
"><?php echo smartyTranslate(array('s'=>'No features to compare'),$_smarty_tpl);?>
</td>
	</tr>
	<?php }?>
	<?php echo $_smarty_tpl->tpl_vars['HOOK_EXTRA_PRODUCT_COMPARISON']->value;?>

</table>
<?php }else{ ?>
	<p class="warning"><?php echo smartyTranslate(array('s'=>'There are no products selected for comparison'),$_smarty_tpl);?>
</p>
<?php }?><?php }} ?>