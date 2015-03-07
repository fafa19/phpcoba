<?php /* Smarty version Smarty-3.1.8, created on 2013-12-14 23:33:43
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\modules\tmblocksearch\tmblocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2693052ac88671f9327-52493748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aea3bca19edcb63ebf2fc0d236ed0869caaf81fd' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\modules\\tmblocksearch\\tmblocksearch-top.tpl',
      1 => 1363052636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2693052ac88671f9327-52493748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hook_mobile' => 0,
    'link' => 0,
    'ENT_QUOTES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52ac8867231e05_03439067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ac8867231e05_03439067')) {function content_52ac8867231e05_03439067($_smarty_tpl) {?><!-- block seach mobile -->
<?php if (isset($_smarty_tpl->tpl_vars['hook_mobile']->value)){?>
<div id="search_block_top" data-role="fieldcontain">
	<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
" id="searchbox">
    <p >
		<label><?php echo smartyTranslate(array('s'=>'Search','mod'=>'tmblocksearch'),$_smarty_tpl);?>
</label>
        <input type="hidden" name="controller" value="search" />
	    <input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
        		<input class="search_query" type="search" id="search_query_top" name="search_query" placeholder="<?php echo smartyTranslate(array('s'=>'Search','mod'=>'tmblocksearch'),$_smarty_tpl);?>
" value="<?php if (isset($_GET['search_query'])){?><?php echo stripslashes(htmlentities($_GET['search_query'],$_smarty_tpl->tpl_vars['ENT_QUOTES']->value,'utf-8'));?>
<?php }?>" />
		<a href="javascript:document.getElementById('searchbox').submit();"><?php echo smartyTranslate(array('s'=>'Search','mod'=>'tmblocksearch'),$_smarty_tpl);?>
</a>
</p>
	</form>
</div>
<?php }else{ ?>
<!-- Block search module TOP -->
<div id="search_block_top">

	<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
" id="searchbox">
		<p>
			<label for="search_query_top"><!-- image on background --></label>
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query" type="text" id="search_query_top" name="search_query" value="<?php if (isset($_GET['search_query'])){?><?php echo stripslashes(htmlentities($_GET['search_query'],$_smarty_tpl->tpl_vars['ENT_QUOTES']->value,'utf-8'));?>
<?php }?>" />
			<a href="javascript:document.getElementById('searchbox').submit();"><?php echo smartyTranslate(array('s'=>'Search','mod'=>'tmblocksearch'),$_smarty_tpl);?>
</a>
	</p>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate (($_smarty_tpl->tpl_vars['self']->value)."/tmblocksearch-instantsearch.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }?>
<!-- /Block search module TOP -->
<?php }} ?>