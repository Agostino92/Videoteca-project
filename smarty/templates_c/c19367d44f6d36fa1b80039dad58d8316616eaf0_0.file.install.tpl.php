<?php
/* Smarty version 3.1.32, created on 2018-10-27 11:24:44
  from 'D:\xampp\htdocs\Videoteca-project\smarty\templates\install.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd42edcc9e1b1_08887518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c19367d44f6d36fa1b80039dad58d8316616eaf0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Videoteca-project\\smarty\\templates\\install.tpl',
      1 => 1540632272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd42edcc9e1b1_08887518 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<!-- <meta http-equiv="content-type" content="text/html; charset=UTF-8"> <!-- character encoding of document !--> 
<title>Installazione</title>
<meta charset="utf-8"> <!-- unicode !-->
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- mobile-device responsive !-->
 <link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  <!-- including bootstrap !-->
<link rel="stylesheet"
	href="/prova/resources/css/style.css">
<!-- <?php echo '<script'; ?>

	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>

	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
!-->
</head>
<body>

	
	<div class="container text-center">		
		<div class="col-sm-offset-3 col-sm-6 well">
		    <!-- Container (Sezione di presentazione del contenuto)!-->
		    <div class="well">
				<h1 id="important"> Programmazione Web </h1>
				<h4>Applicazione videoteca</h4>
				<h4 id="important">Autori:</h4>
				<ul>
					<li>Del Vecchio Agostino</li>
					<li>Morelli Claudio</li>
					<li>Morelli Massimo</li>
				</ul>
			<p>Per la corretta fruizione di questa applicazione<br>ABILITARE I COOKIES</p>
		    </div>
						<h2>Installazione</h2>
			<hr>
			<!-- Sezione di immissione dati !-->
			<form class="form-vertical col-sm-offset-2 col-sm-8" method="post" action="install">
				<div class="form-group">
					<label for="user">User Name:</label> 
					<input type="text" class="form-control" id="user" placeholder="Enter username" name="admin">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label> 
					<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
				</div>
				<div class="form-group">
					<label for="db">DB Name:</label>
					<input type="text" class="form-control" id="db" placeholder="Enter database name" name="database">
				</div>		
				<div class="form-group">
					<button type="submit" class="btn btn-default">Invia</button>
				</div>
			</form>
						<div class="col-sm-offset-2 col-sm-8">
			    <p>This application requires PHP 7.2.1</p>
			</div>
				    </div>
	</div>

	
</body>
</html><?php }
}
