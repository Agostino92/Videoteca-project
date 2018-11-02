<?php
/* Smarty version 3.1.32, created on 2018-11-02 18:41:15
  from 'D:\xampp\htdocs\videoteca-project\smarty\templates\errorPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bdc8c3bc8ee32_95710613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '568adc01ab8bd486c07601513eafd03a2e2243df' => 
    array (
      0 => 'D:\\xampp\\htdocs\\videoteca-project\\smarty\\templates\\errorPage.tpl',
      1 => 1541180473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bdc8c3bc8ee32_95710613 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Error Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="/videoteca-project/resources/css/style.css">
<link rel="stylesheet"
	href="/videoteca-project/resources/css/errore.css">
<!-- <?php echo '<script'; ?>

	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>

	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
!-->

</head>
<body>

		
	
	<div class="container text-center well">
		<h3>Ooooops! Something went wrong!</h3>
		<p><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
 Please go back to <a href="/videoteca-project/">home</a>
		</p>
		
	</div>

</body>
</html>
<?php }
}
