<?php /* Smarty version Smarty-3.1.8, created on 2013-12-18 00:08:51
         compiled from "C:\Users\macbookpro\Documents\xampp\htdocs\prestashop123\admin123/themes/default\template\controllers\emails\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1513152b085233eba68-99237863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a78ebfb37e3ad36293f64e0f36a40838f7b22ce' => 
    array (
      0 => 'C:\\Users\\macbookpro\\Documents\\xampp\\htdocs\\prestashop123\\admin123/themes/default\\template\\controllers\\emails\\content.tpl',
      1 => 1347546544,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1513152b085233eba68-99237863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'token' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_52b085234a9391_85109825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b085234a9391_85109825')) {function content_52b085234a9391_85109825($_smarty_tpl) {?>

<script type="text/javascript">
	var textMsg = "<?php echo smartyTranslate(array('s'=>'This is a test message, your server is now configured to send e-mail'),$_smarty_tpl);?>
";
	var textSubject = "<?php echo smartyTranslate(array('s'=>'Test message - Prestashop'),$_smarty_tpl);?>
";
	var textSendOk = "<?php echo smartyTranslate(array('s'=>'A test e-mail has been sent to the e-mail address you specified'),$_smarty_tpl);?>
";
	var textSendError= "<?php echo smartyTranslate(array('s'=>'Error: please check your configuration'),$_smarty_tpl);?>
";
	var token_mail = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
';
	var errorMail = "<?php echo smartyTranslate(array('s'=>'This e-mail address is invalid'),$_smarty_tpl);?>
";
	$(document).ready(function() {
		if ($('input[name=PS_MAIL_METHOD]:checked').val() == 2)
			$('#smtp').show();
	});
</script>
<script type="text/javascript" src="../js/sendMailTest.js"></script>

<?php echo $_smarty_tpl->tpl_vars['content']->value;?>



<?php }} ?>