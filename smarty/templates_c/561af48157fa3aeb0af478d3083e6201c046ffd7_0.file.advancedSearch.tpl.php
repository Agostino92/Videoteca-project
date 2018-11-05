<?php
/* Smarty version 3.1.32, created on 2018-11-05 12:19:53
  from 'D:\xampp\htdocs\videoteca-project\smarty\templates\search\advancedSearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be02759329b96_53806357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '561af48157fa3aeb0af478d3083e6201c046ffd7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\videoteca-project\\smarty\\templates\\search\\advancedSearch.tpl',
      1 => 1541416779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5be02759329b96_53806357 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Ricerca avanzata</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet"
	href="/Videoteca-project/resources/css/style.css">
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

	<?php $_smarty_tpl->assign('uId',$_smarty_tpl->smarty->registered_objects['user'][0]->getId(array(),$_smarty_tpl));?>
 
	<?php $_smarty_tpl->assign('uName',$_smarty_tpl->smarty->registered_objects['user'][0]->getNickName(array(),$_smarty_tpl));?>

	
	<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<div class="container col-xs-12 col-sm-6 col-sm-offset-3 well text-center">
			<h2>Ricerca avanzata</h2>
			<hr>
			<!-- Sezione di immissione dati !-->
			<form class="form-vertical col-sm-offset-2 col-sm-8 ricercaavanzata" action="/videoteca-project/search/advanced">
				<!-- Ricerca !-->
				<div class="form-group">
					<label for="search">Inserisci la stringa di ricerca:</label>
					<input type="text" class="form-control" id="search" name="str" placeholder="Cerca...">
				</div>
				
				<!-- Categoria di ricerca (chiave) !-->
				<div class="form-group">
					<label for="inputKey">Stai cercando un film o un utente?</label>
					<select id="inputKey" class="form-control" name="key">
						<option value="film" selected>Film</option>
						<option value="user">Utente</option>
					</select>
				</div>
				
				<!-- Genere di ricerca (valore) !-->
				<div class="form-group">
					<label for="search">In base a cosa lo stai cercando? </br> PS Puoi cercare utenti solo tramite nome!</label>
					<select id="inputKey" class="form-control" name="value">
						<option value="genre" selected>Genere</option>
						<option value="name">Nome</option>
						<option value="author" selected>Autore</option>
					</select>
					
				</div class="form-group">
					<button type="submit" class="btn btn-default">Cerca</button>
				</div>
			</form>
	</div>
	
</body>
</html><?php }
}
