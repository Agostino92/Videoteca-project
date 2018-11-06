<?php
/* Smarty version 3.1.32, created on 2018-11-06 01:00:28
  from 'D:\xampp\htdocs\videoteca-project\smarty\templates\user\userInfo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be0d99c5dfab7_59646555',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d7992189b7c5a23d0e3eb7fcf3488c3b75835eb' => 
    array (
      0 => 'D:\\xampp\\htdocs\\videoteca-project\\smarty\\templates\\user\\userInfo.tpl',
      1 => 1541462426,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be0d99c5dfab7_59646555 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<?php $_smarty_tpl->assign('pInfo',$_smarty_tpl->smarty->registered_objects['profile'][0]->getUserInfo(array(),$_smarty_tpl));?>

<div class="well circled">				
	<p id="important"><?php echo $_smarty_tpl->tpl_vars['pName']->value;?>
</p>
</div>

<div class="well squared">
	<p id="important"> Nome: </p> <span><?php if ($_smarty_tpl->tpl_vars['pInfo']->value->getFirstName()) {?> <?php echo $_smarty_tpl->tpl_vars['pInfo']->value->getFirstName();
}?></span>
	<p id="important"> Cognome: </p> <span> <?php if ($_smarty_tpl->tpl_vars['pInfo']->value->getLastName()) {?> <?php echo $_smarty_tpl->tpl_vars['pInfo']->value->getLastName();
}?> </span>
</div>
<div class="well squared">
	<p id="important"> Data di nascita: </p> <span><?php if ($_smarty_tpl->tpl_vars['pInfo']->value->getBirthDate()) {?> <?php echo $_smarty_tpl->tpl_vars['pInfo']->value->getBirthDate(true);
}?></span>
	<p id="important"> Luogo di nascita: </p> <span> <?php if ($_smarty_tpl->tpl_vars['pInfo']->value->getBirthPlace()) {?> <?php echo $_smarty_tpl->tpl_vars['pInfo']->value->getBirthPlace();
}?> </span>
</div>
<div class="well squared">
	<p id="important">Biografia</p>
	<p><?php if ($_smarty_tpl->tpl_vars['pInfo']->value->getBio()) {
echo $_smarty_tpl->tpl_vars['pInfo']->value->getBio();
}?></p>
</div>

<?php }
}
