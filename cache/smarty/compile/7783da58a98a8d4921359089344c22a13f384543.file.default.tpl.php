<?php /* Smarty version Smarty-3.1.8, created on 2013-12-14 23:33:42
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\modules\lofcamera\themes\default\default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2421252ac8866e15343-91434562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7783da58a98a8d4921359089344c22a13f384543' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\modules\\lofcamera\\themes\\default\\default.tpl',
      1 => 1363052636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2421252ac8866e15343-91434562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'params' => 0,
    'hookname' => 0,
    'images' => 0,
    'thumb_uri' => 0,
    'img' => 0,
    'image_uri' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52ac8866e41638_45408246',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ac8866e41638_45408246')) {function content_52ac8866e41638_45408246($_smarty_tpl) {?><div id="slide_wrap"  >
<?php if ($_smarty_tpl->tpl_vars['params']->value['showTitle']){?>
    <h4><?php echo $_smarty_tpl->tpl_vars['params']->value['title'];?>
</h4>
<?php }?>  
<div class="camera_wrap <?php echo $_smarty_tpl->tpl_vars['params']->value['skin'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['hookname']->value;?>
"  >
    <?php  $_smarty_tpl->tpl_vars['img'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['img']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['images']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['img']->key => $_smarty_tpl->tpl_vars['img']->value){
$_smarty_tpl->tpl_vars['img']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['images']['iteration']++;
?>
       <div data-thumb="<?php echo $_smarty_tpl->tpl_vars['thumb_uri']->value;?>
<?php echo $_smarty_tpl->tpl_vars['img']->value['name'];?>
" data-src="<?php echo $_smarty_tpl->tpl_vars['image_uri']->value;?>
<?php echo $_smarty_tpl->tpl_vars['img']->value['name'];?>
" data-link="<?php echo $_smarty_tpl->tpl_vars['img']->value['link'];?>
">
            <?php if ($_smarty_tpl->tpl_vars['img']->value['title']){?>                         
                <div class="camera_caption fadeFromBottom num-<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['images']['iteration'];?>
" >  
               
                   
                   
                    <div class="lof_camera_title " >
                        <?php echo $_smarty_tpl->tpl_vars['img']->value['title'];?>

                    </div>
                    <div class="lof_camara_desc">
 <?php if ($_smarty_tpl->tpl_vars['img']->value['price']){?>
                        <div class="des2 "><?php echo $_smarty_tpl->tpl_vars['img']->value['price'];?>
</div>
                        <?php }?>
                        <div class="des1">  <?php echo $_smarty_tpl->tpl_vars['img']->value['desc'];?>
<em class="item-text">&nbsp;</em></div> 
                    </div>

               
               </div>
            <?php }?>
        </div>
    <?php } ?>    
</div>
</div><?php }} ?>