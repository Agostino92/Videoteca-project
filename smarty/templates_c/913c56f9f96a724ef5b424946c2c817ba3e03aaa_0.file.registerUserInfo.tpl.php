<?php
/* Smarty version 3.1.32, created on 2018-11-04 11:40:21
  from 'D:\xampp\htdocs\videoteca-project\smarty\templates\user\registerUserInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bdecc950167f4_66332961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '913c56f9f96a724ef5b424946c2c817ba3e03aaa' => 
    array (
      0 => 'D:\\xampp\\htdocs\\videoteca-project\\smarty\\templates\\user\\registerUserInfo.tpl',
      1 => 1541328009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5bdecc950167f4_66332961 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Registrazione Info</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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
			<h2>Info Registrazione</h2>
			<hr>			
			<!-- Sezione di immissione dati !-->
			<form class="form-vertical col-sm-offset-2 col-sm-8" method="post" action="editInfo">
				<!-- Nome !-->
				<div class="form-group">
					<label for="Nome" class="<?php if ($_smarty_tpl->tpl_vars['error1']->value) {?> text-danger<?php }?>" >Nome:</label> 
					<input type="text" class="form-control" id="Nome" placeholder="Alfanumerico 2-20 caratteri" name="firstName">
				</div>
				<?php if ($_smarty_tpl->tpl_vars['error1']->value) {?>
				<div class="errori">
  						Deve essere lungo 2-20 caratteri!
				</div>
				<?php }?>				
				
				<!-- Cognome !-->
				<div class="form-group">
					<label for="Cognome" class="<?php if ($_smarty_tpl->tpl_vars['error2']->value) {?> text-danger<?php }?>">Cognome:</label> 
					<input type="text" class="form-control" id="Cognome" placeholder="Alfanumerico 2-20 caratteri" name="lastName">
				</div>
				<?php if ($_smarty_tpl->tpl_vars['error2']->value) {?>
				<div class="errori">
  						Deve essere lungo 2-20 caratteri!
				</div>
				<?php }?>				
				
				<!-- Luogo di nascita !-->
				<div class="form-group">
					<label for="Luogodinascita" class="<?php if ($_smarty_tpl->tpl_vars['error3']->value) {?> text-danger<?php }?>">Luogo di nascita:</label> 
					<input type="text" class="form-control" id="Luogodinascita" placeholder="6-25 caratteri" name="birthPlace">
				</div>
				<?php if ($_smarty_tpl->tpl_vars['error3']->value) {?>
				<div class="errori">
  						Deve essere lungo 3-25 caratteri!      
				</div>
				<?php }?>

				<!-- Data di nascita !-->
				<div class="form-group">
					<label for="Datadinascita" class="<?php if ($_smarty_tpl->tpl_vars['error4']->value) {?> text-danger<?php }?>">Data di nascita:</label> 
					<input type="text" class="form-control" id="Datadinascita" placeholder="Formato gg/mm/aaaa" name="birthDate">
				</div>
				<?php if ($_smarty_tpl->tpl_vars['error4']->value) {?>
				<div class="errori">
  						Deve essere nel formato valido e compresa tra il 1900 e il 2009!      
				</div>
				<?php }?>

				<!-- Biografia !-->
				<div class="form-group">
					<label for="Biografia" class="<?php if ($_smarty_tpl->tpl_vars['error5']->value) {?> text-danger<?php }?>">Biografia:</label> 
					<input type="text" class="form-control" id="Biografia" placeholder="Inserisci una breve biografia" name="bio">
				</div>
				<?php if ($_smarty_tpl->tpl_vars['error5']->value) {?>
				<div class="errori">
  						Deve essere lunga max 140 caratteri!      
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
