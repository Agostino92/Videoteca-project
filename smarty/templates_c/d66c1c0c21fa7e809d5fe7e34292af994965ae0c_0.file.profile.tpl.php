<?php
/* Smarty version 3.1.32, created on 2018-11-06 01:13:38
  from 'D:\xampp\htdocs\videoteca-project\smarty\templates\user\profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be0dcb2d2c801_72545817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd66c1c0c21fa7e809d5fe7e34292af994965ae0c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\videoteca-project\\smarty\\templates\\user\\profile.tpl',
      1 => 1541463215,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
    'file:user/userInfo.tpl' => 1,
  ),
),false)) {
function content_5be0dcb2d2c801_72545817 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
 
<?php $_smarty_tpl->assign('uName',$_smarty_tpl->smarty->registered_objects['user'][0]->getNickName(array(),$_smarty_tpl));?>

<?php $_smarty_tpl->assign('uId',$_smarty_tpl->smarty->registered_objects['user'][0]->getId(array(),$_smarty_tpl));?>

 
<?php $_smarty_tpl->assign('pName',$_smarty_tpl->smarty->registered_objects['profile'][0]->getNickName(array(),$_smarty_tpl));?>

<?php $_smarty_tpl->assign('pId',$_smarty_tpl->smarty->registered_objects['profile'][0]->getId(array(),$_smarty_tpl));?>


<html lang="en">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['pName']->value;?>
's Profile</title>
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
	

	<div class="container text-center">
	
		<div class="col-sm-3">
		<!-- Informazioni utente -->
			<?php $_smarty_tpl->_subTemplateRender("file:user/userInfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			
        </div>
			<div class="col-sm-7 well">
			<!-- Contenuto principale -->

				

				
				<?php if ($_smarty_tpl->tpl_vars['content']->value == 'Listafilm') {?>
				<!-- Lista following -->
				<h4 id="important">Lista Film</h4>
				Sezione in via di sviluppo

				
				<?php } elseif ($_smarty_tpl->tpl_vars['content']->value == 'None') {?>
				<!-- Simple introduction-->
				<h3>Hi! I'm a <?php echo ucfirst($_smarty_tpl->tpl_vars['pType']->value);?>
!</h3>
				<?php }?>
			</div>

		
	</div>

</body>
</html>
<?php }
}
