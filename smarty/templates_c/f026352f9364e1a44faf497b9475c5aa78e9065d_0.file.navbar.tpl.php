<?php
/* Smarty version 3.1.32, created on 2018-11-05 12:16:26
  from 'D:\xampp\htdocs\videoteca-project\smarty\templates\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be0268a83dc16_86208274',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f026352f9364e1a44faf497b9475c5aa78e9065d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\videoteca-project\\smarty\\templates\\navbar.tpl',
      1 => 1541416480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be0268a83dc16_86208274 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar"> <!-- collapses bar on smaller screens !-->
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/videoteca-project/"><img src="https://i.imgur.com/9idmjQq.png" alt="logo"></a>
			</div>
			<!-- Opzioni della Navbar -->
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<?php if ($_smarty_tpl->tpl_vars['uType']->value == 'guest') {?>
					<!-- Se Visitatore -->
					<li><a href="#sfoglia">SFOGLIA</a></li>
					<li><a href="#forum">FORUM</a></li>
					<li><a href="/videoteca-project/user/login">ACCEDI</a></li>
					<li><a href="/videoteca-project/user/signup">REGISTRATI</a></li>
				    <?php } else { ?>
					<li><a href="#sfoglia">SFOGLIA</a></li>
				    <!-- Se utente loggato 
					<li><a href="/deepmusic/user/profile/<?php echo $_smarty_tpl->tpl_vars['uId']->value;?>
"><span class="glyphicon glyphicon-user"></span> <?php echo $_smarty_tpl->tpl_vars['uName']->value;?>
's Account </a></li> 
					<?php if ($_smarty_tpl->tpl_vars['uType']->value == 'moderator') {?>
					<!-- Se moderatore 
					<li><a href="/deepmusic/manageReport/show"><span
							class="glyphicon glyphicon-warning-sign"></span> Report Hub </a></li> 
					<?php }?>
					<!-- Se utente loggato !-->
					<li><a href="/videoteca-project/user/logout"><span
							class="glyphicon glyphicon-log-out"></span> ESCI </a></li>
					<!--<?php }?> !-->
					
				</ul>
				<!-- Form per la barra di ricerca
				<form class="navbar-form navbar-right" role="search" action="/deepmusic/search/simple">
					<div class="form-group input-group">
						<input type="text" class="form-control" name="str"  placeholder="Search Song's Genre...">
						<span class="input-group-btn">
							<button class="btn btn-default" type="submit">
								<span class="glyphicon glyphicon-search"></span>
							</button>
						</span>
					</div>
				</form> !-->
				<?php if ($_smarty_tpl->tpl_vars['uType']->value != "guest") {?>
				<!-- Button per la ricerca avanzata (se loggato) !-->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/videoteca-project/search/advanced">Advanced Search</a></li>
				</ul>
				<?php }?> 
			</div>
		</div>
	</div>
</nav>
<?php }
}
