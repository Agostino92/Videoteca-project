<?php
/* Smarty version 3.1.32, created on 2018-11-05 23:18:50
  from 'D:\xampp\htdocs\videoteca-project\smarty\templates\film\film.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be0c1ca957308_42093318',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f90f72b3e510b93af92b9063abd0623ecdeec8e0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\videoteca-project\\smarty\\templates\\film\\film.tpl',
      1 => 1541456327,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:navbar.tpl' => 1,
  ),
),false)) {
function content_5be0c1ca957308_42093318 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
<?php $_smarty_tpl->assign('uName',$_smarty_tpl->smarty->registered_objects['user'][0]->getNickName(array(),$_smarty_tpl));?>

<?php $_smarty_tpl->assign('uId',$_smarty_tpl->smarty->registered_objects['user'][0]->getId(array(),$_smarty_tpl));?>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title><?php echo $_smarty_tpl->tpl_vars['film']->value->getName();?>
</title>
<meta charset="utf-8"> <!-- unicode !-->
<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- mobile-device responsive !-->
 <link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  <!-- including bootstrap !-->
<link rel="stylesheet"
	href="/videoteca-project/resources/css/home.css">
<link rel="stylesheet"
	href="/videoteca-project/resources/css/login.css">	
<?php echo '<script'; ?>

	src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>

	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<style> body 
{
	background-color: RebeccaPurple;
	background-image: url("https://pre00.deviantart.net/47a1/th/pre/i/2015/177/1/2/lulu_and_bard_by_dakun87-d8ysub2.jpg"); 
	background-position: 50% 85%;
	background-size: cover; 
	background-repeat: no-repeat;
	background-attachment: fixed;
	-webkit-background-size: cover; /* per garantire compatibilità cross-browser */
	-moz-background-size: cover; 
	-o-background-size: cover; 
} </style>
</head>

<body>

	
	<?php $_smarty_tpl->_subTemplateRender("file:navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
<div class="container-fluid stiled nopad text-center" id="descr">
<h2><?php echo $_smarty_tpl->tpl_vars['film']->value->getAuthor();?>
 : <?php echo $_smarty_tpl->tpl_vars['film']->value->getName();?>
 (<?php echo $_smarty_tpl->tpl_vars['film']->value->getGenre();?>
)</h2>
	
    <div class="col-xs-12 col-sm-offset-3 col-sm-6 container bianco nopad" id="reviewcont">
     <div id="mezza">
	  <img src="<?php echo $_smarty_tpl->tpl_vars['film']->value->getLocandina();?>
"  class="nopad"/>
	  <p><?php echo $_smarty_tpl->tpl_vars['film']->value->getDescrizione();?>
</p>
     </div>
	</div>
</div>
			
	</div>
</body>
</html>
<?php }
}
