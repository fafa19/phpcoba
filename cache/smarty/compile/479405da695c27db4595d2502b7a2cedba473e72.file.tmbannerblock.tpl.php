<?php /* Smarty version Smarty-3.1.8, created on 2013-12-14 23:33:42
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\modules\tmbannerblock\tmbannerblock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:338952ac8866e9cbe7-45373005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '479405da695c27db4595d2502b7a2cedba473e72' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\modules\\tmbannerblock\\tmbannerblock.tpl',
      1 => 1363052636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '338952ac8866e9cbe7-45373005',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'xml' => 0,
    'my_item' => 0,
    'title' => 0,
    'text' => 0,
    'module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52ac8866f31c40_26123762',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ac8866f31c40_26123762')) {function content_52ac8866f31c40_26123762($_smarty_tpl) {?><!-- Module JM Slideshow -->
<?php if ($_smarty_tpl->tpl_vars['page_name']->value=="index"){?>

<div id="banner-1" class="jms-slideshow">
    
    <?php  $_smarty_tpl->tpl_vars['my_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['my_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xml']->value->item; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['my_item']->key => $_smarty_tpl->tpl_vars['my_item']->value){
$_smarty_tpl->tpl_vars['my_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']++;
?>
                
           <div class="step no-modile num-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration'];?>
">   <a class="jms-link" href="<?php echo $_smarty_tpl->tpl_vars['my_item']->value->url;?>
">  
            <div class="jms-content">
                    <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['my_item']->value->{$_smarty_tpl->tpl_vars['title']->value},127,'...');?>
</h3>
                    <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['my_item']->value->{$_smarty_tpl->tpl_vars['text']->value},127,'...');?>
</p>
                   
                </div>
                <img src='<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['my_item']->value->img;?>
' alt="" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['my_item']->value->{$_smarty_tpl->tpl_vars['title']->value},127,'...');?>
" /> </a>
            </div>
                        
        
    <?php } ?>
</div>

<div id="banner-2" class="jms-slideshow">
    
    <?php  $_smarty_tpl->tpl_vars['my_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['my_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xml']->value->item; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['my_item']->key => $_smarty_tpl->tpl_vars['my_item']->value){
$_smarty_tpl->tpl_vars['my_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']++;
?>
                
           <div class="step modile-1 num-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration'];?>
">   <a class="jms-link" href="<?php echo $_smarty_tpl->tpl_vars['my_item']->value->url;?>
">  
            <div class="jms-content">
                    <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['my_item']->value->{$_smarty_tpl->tpl_vars['title']->value},127,'...');?>
</h3>
                    <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['my_item']->value->{$_smarty_tpl->tpl_vars['text']->value},127,'...');?>
</p>
                </div>
                <img src='<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['my_item']->value->img;?>
' width="246" height="113" alt="" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['my_item']->value->{$_smarty_tpl->tpl_vars['title']->value},127,'...');?>
" /> </a>
            </div>
                        
        
    <?php } ?>
</div>

<div id="banner-3" class="jms-slideshow">
    
    <?php  $_smarty_tpl->tpl_vars['my_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['my_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xml']->value->item; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['my_item']->key => $_smarty_tpl->tpl_vars['my_item']->value){
$_smarty_tpl->tpl_vars['my_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']++;
?>
                
           <div class="step modile-2 num-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration'];?>
">   <a class="jms-link" href="<?php echo $_smarty_tpl->tpl_vars['my_item']->value->url;?>
">  
            <div class="jms-content">
                    <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['my_item']->value->{$_smarty_tpl->tpl_vars['title']->value},127,'...');?>
</h3>
                    <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['my_item']->value->{$_smarty_tpl->tpl_vars['text']->value},127,'...');?>
</p>
                </div>
                <img src='<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['my_item']->value->img;?>
' width="300" height="138" alt="" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['my_item']->value->{$_smarty_tpl->tpl_vars['title']->value},127,'...');?>
" /> </a>
            </div>
                        
        
    <?php } ?>
</div>
<div id="banner-4" class="jms-slideshow">
    
    <?php  $_smarty_tpl->tpl_vars['my_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['my_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['xml']->value->item; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['my_item']->key => $_smarty_tpl->tpl_vars['my_item']->value){
$_smarty_tpl->tpl_vars['my_item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['loop']['iteration']++;
?>
                
           <div class="step no-modile num-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['loop']['iteration'];?>
">   <a class="jms-link" href="<?php echo $_smarty_tpl->tpl_vars['my_item']->value->url;?>
">  
            <div class="jms-content">
                    <h3><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['my_item']->value->{$_smarty_tpl->tpl_vars['title']->value},127,'...');?>
</h3>
                    <p><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['my_item']->value->{$_smarty_tpl->tpl_vars['text']->value},127,'...');?>
</p>
                </div>
                <img src='<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['my_item']->value->img;?>
' width="310" height="143" alt="" title="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['my_item']->value->{$_smarty_tpl->tpl_vars['title']->value},127,'...');?>
" /> </a>
            </div>
                        
        
    <?php } ?>
</div>


<?php }?>
<!-- /Module JM Slideshow --><?php }} ?>