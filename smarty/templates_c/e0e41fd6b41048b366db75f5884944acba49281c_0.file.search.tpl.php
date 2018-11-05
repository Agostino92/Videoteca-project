<?php
/* Smarty version 3.1.32, created on 2018-11-05 14:39:40
  from 'D:\xampp\htdocs\videoteca-project\smarty\templates\search\search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be0481cc76f53_39645226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0e41fd6b41048b366db75f5884944acba49281c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\videoteca-project\\smarty\\templates\\search\\search.tpl',
      1 => 1541425176,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:FilmList.tpl' => 1,
    'file:UserList.tpl' => 1,
  ),
),false)) {
function content_5be0481cc76f53_39645226 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>Ricerca di: <?php echo $_smarty_tpl->tpl_vars['string']->value;?>
</title>
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
		<h2>Ricerca di: <?php echo $_smarty_tpl->tpl_vars['string']->value;?>
</h2>
		<!-- Sezione di output !-->
		<div class="col-sm-offset-2 col-sm-8">
			<h4>Search Results for <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
's <?php echo $_smarty_tpl->tpl_vars['value']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['string']->value;?>
: </h4>
				<?php if ($_smarty_tpl->tpl_vars['key']->value == "Film") {?>
					<?php $_smarty_tpl->_subTemplateRender("file:FilmList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == "User") {?>
					<?php $_smarty_tpl->_subTemplateRender("file:UserList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
				<?php }?>			
		</div>
	</div>
	
</body>
</html>

<?php }
}
