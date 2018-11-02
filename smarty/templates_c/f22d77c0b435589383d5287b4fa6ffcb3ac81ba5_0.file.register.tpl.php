<?php
/* Smarty version 3.1.32, created on 2018-11-02 18:26:21
  from 'D:\xampp\htdocs\videoteca-project\smarty\templates\user\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bdc88bd40f4f2_38873506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f22d77c0b435589383d5287b4fa6ffcb3ac81ba5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\videoteca-project\\smarty\\templates\\user\\register.tpl',
      1 => 1541179570,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5bdc88bd40f4f2_38873506 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta http-equiv="content-type" content="text/html; charset=UTF-8"> <!-- character encoding of document !--> 
<title>Registrazione</title>
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
			<h2>Registrazione</h2>
			<hr>
			<?php if ($_smarty_tpl->tpl_vars['error1']->value) {?> 
			<div class="alert alert-warning">
				<strong>Attenzione!</strong><br>Questo nome utente è già stato utilizzato <br>Si prega di riprovare.
			</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['error2']->value) {?> 
			<div class="alert alert-warning">
				<strong>Attenzione!</strong><br>È già associato un account a questo indirizzo mail <br>Si prega di riprovare.
			</div>
			<?php }?>			
			<!-- Sezione di immissione dati !-->
			<form class="form-vertical col-sm-offset-2 col-sm-8" method="post" action="signup">
				<!-- Nome utente !-->
				<div class="form-group">
					<label for="user" class="<?php if ($_smarty_tpl->tpl_vars['error3']->value) {?> text-danger<?php }?>" >Nome Utente:</label> 
					<input type="text" class="form-control" id="user" placeholder="Alfanumerico 6-15 caratteri" name="name">
				</div>
				<?php if ($_smarty_tpl->tpl_vars['error3']->value) {?>
				<div class="errori">
  						Deve essere lungo 6-15 caratteri!
				</div>
				<?php }?>				
				
				<!-- Password !-->
				<div class="form-group">
					<label for="password" class="<?php if ($_smarty_tpl->tpl_vars['error4']->value) {?> text-danger<?php }?>">Password:</label> 
					<input type="password" class="form-control" id="password" placeholder="Alfanumerico 6-20 caratteri" name="pwd">
				</div>
				<?php if ($_smarty_tpl->tpl_vars['error4']->value) {?>
				<div class="errori">
  						Deve essere lunga 6-20 caratteri!
				</div>
				<?php }?>				
				
				<!-- Mail !-->
				<div class="form-group">
					<label for="mail" class="<?php if ($_smarty_tpl->tpl_vars['error5']->value) {?> text-danger<?php }?>">Mail:</label> 
					<input type="text" class="form-control" id="mail" placeholder="Inserisci un indirizzo e-mail valido" name="mail">
				</div>
				<?php if ($_smarty_tpl->tpl_vars['error5']->value) {?>
				<div class="errori">
  						Deve essere un indirizzo e-mail valido!      
				</div>
				<?php }?>
				
				<div class="form-group">
					<button type="submit" class="btn btn-default">Invia</button>
				</div>
			</form>
	    </div>
	

	
</body>
</html><?php }
}
