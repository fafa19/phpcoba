<?php /* Smarty version Smarty-3.1.8, created on 2013-12-17 18:46:57
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\themes\theme481\modules\blockwishlist\blockwishlist-ajax.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2006852b039b1a5ae10-83339514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cc6b57e7e7c504c43bc9576e548bfe396193047' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\themes\\theme481\\modules\\blockwishlist\\blockwishlist-ajax.tpl',
      1 => 1363052636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2006852b039b1a5ae10-83339514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
    'product' => 0,
    'link' => 0,
    'img_dir' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52b039b21155d6_10724561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b039b21155d6_10724561')) {function content_52b039b21155d6_10724561($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\tools\\smarty\\plugins\\modifier.escape.php';
?>

<?php if ($_smarty_tpl->tpl_vars['products']->value){?>
	<dl class="products" style="<?php if ($_smarty_tpl->tpl_vars['products']->value){?>border-bottom:1px solid #fff;<?php }?>">
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['product']->iteration=0;
 $_smarty_tpl->tpl_vars['product']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
 $_smarty_tpl->tpl_vars['product']->index++;
 $_smarty_tpl->tpl_vars['product']->first = $_smarty_tpl->tpl_vars['product']->index === 0;
 $_smarty_tpl->tpl_vars['product']->last = $_smarty_tpl->tpl_vars['product']->iteration === $_smarty_tpl->tpl_vars['product']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['first'] = $_smarty_tpl->tpl_vars['product']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['i']['last'] = $_smarty_tpl->tpl_vars['product']->last;
?>
		<dt class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['last']){?>last_item<?php }else{ ?>item<?php }?>">
			<span class="quantity-formated"><span class="quantity"><?php echo intval($_smarty_tpl->tpl_vars['product']->value['quantity']);?>
</span>x</span>
			<a class="cart_block_product_name" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['category_rewrite']);?>
" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['name'], 'htmlall', 'UTF-8');?>
" style="font-weight:bold;"><?php echo smarty_modifier_escape($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],13,'...'), 'htmlall', 'UTF-8');?>
</a>
			<a class="ajax_cart_block_remove_link" href="javascript:;" onclick="javascript:WishlistCart('wishlist_block_list', 'delete', '<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
', <?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
, '0');" title="<?php echo smartyTranslate(array('s'=>'remove this product from my wishlist','mod'=>'blockwishlist'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img_dir']->value;?>
icon/delete.gif" width="12" height="12" alt="<?php echo smartyTranslate(array('s'=>'Delete'),$_smarty_tpl);?>
" class="icon" /></a>
		</dt>
		<?php if (isset($_smarty_tpl->tpl_vars['product']->value['attributes_small'])){?>
		<dd class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['first']){?>first_item<?php }elseif($_smarty_tpl->getVariable('smarty')->value['foreach']['i']['last']){?>last_item<?php }else{ ?>item<?php }?>" style="font-style:italic;margin:0 0 0 10px;">
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getProductLink($_smarty_tpl->tpl_vars['product']->value['id_product'],$_smarty_tpl->tpl_vars['product']->value['link_rewrite']);?>
" title="<?php echo smartyTranslate(array('s'=>'Product detail'),$_smarty_tpl);?>
"><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['product']->value['attributes_small'], 'htmlall', 'UTF-8');?>
</a>
		</dd>
		<?php }?>
	<?php } ?>
	</dl>
<?php }else{ ?>
	<dl class="products" style="font-size:10px;border-bottom:1px solid #fff;">
	<?php if (isset($_smarty_tpl->tpl_vars['error']->value)&&$_smarty_tpl->tpl_vars['error']->value){?>
		<dt><?php echo smartyTranslate(array('s'=>'You must create a wishlist before adding products','mod'=>'blockwishlist'),$_smarty_tpl);?>
</dt>
	<?php }else{ ?>
		<dt><?php echo smartyTranslate(array('s'=>'No products','mod'=>'blockwishlist'),$_smarty_tpl);?>
</dt>
	<?php }?>
	</dl>
<?php }?>
<?php }} ?>