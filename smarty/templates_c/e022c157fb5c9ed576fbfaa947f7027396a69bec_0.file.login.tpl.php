<?php
/* Smarty version 3.1.32, created on 2018-11-01 16:22:21
  from 'D:\xampp\htdocs\videoteca-project\smarty\templates\user\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bdb1a2d062722_41792921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e022c157fb5c9ed576fbfaa947f7027396a69bec' => 
    array (
      0 => 'D:\\xampp\\htdocs\\videoteca-project\\smarty\\templates\\user\\login.tpl',
      1 => 1541085739,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5bdb1a2d062722_41792921 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta http-equiv="content-type" content="text/html; charset=UTF-8"> <!-- character encoding of document !--> 
<title>Login</title>
<meta charset="utf-8"> <!-- unicode !-->
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- mobile-device responsive !-->
 <link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  <!-- including bootstrap !-->
<link rel="stylesheet"
	href="/videoteca-project/resources/css/style.css">
<link rel="stylesheet"
	href="/videoteca-project/resources/css/login.css">
<?php echo '<script'; ?>

	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>

	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>

</head>
<body>

		<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
		
		<div class="container col-xs-12 col-sm-6 col-sm-offset-3 well text-center">
			<h2>Login</h2>
			<hr>
			<?php if ($_smarty_tpl->tpl_vars['error']->value) {?> 
			<div class="alert alert-warning">
			<!-- Errore form-->
				<strong>Attenzione!</strong><br>Combinazione errata di nome utente e password <br>Si prega di riprovare.
			</div>
			<?php }?>
			<!-- Sezione di immissione dati !-->
			<form class="form-vertical col-sm-offset-2 col-sm-8" method="post" action="login">
				<!-- Nome utente !-->
				<div class="form-group">
					<label for="user">Nome Utente:</label> 
					<input type="text" class="form-control" id="user" placeholder="Inserisci il nome utente" name="name">
				</div>
				
				<!-- Password !-->
				<div class="form-group">
					<label for="password">Password:</label> 
					<input type="password" class="form-control" id="password" placeholder="Inserisci la password" name="pwd">
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-default">Invia</button>
				</div>
			</form>
	    </div>
	

	
</body>
</html><?php }
}
