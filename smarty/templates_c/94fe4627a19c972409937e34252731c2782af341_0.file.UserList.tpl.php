<?php
/* Smarty version 3.1.32, created on 2018-11-05 20:36:23
  from 'D:\xampp\htdocs\videoteca-project\smarty\templates\UserList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be09bb76af035_64880796',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94fe4627a19c972409937e34252731c2782af341' => 
    array (
      0 => 'D:\\xampp\\htdocs\\videoteca-project\\smarty\\templates\\UserList.tpl',
      1 => 1541446452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be09bb76af035_64880796 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<?php if ($_smarty_tpl->tpl_vars['array']->value) {?>
<table class="table table-responsive">
	<tbody>					
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?> <p> porcodio </p> 	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<tr>
			<td><a href="/videoteca-project/user/profile/<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value->getNickName();?>
</a></td>
			<td><?php echo substr(get_class($_smarty_tpl->tpl_vars['user']->value),1);?>
</td>
		</tr>

	</tbody>
</table>
<?php } else { ?>
<p>Non è stato trovato alcun utente!</p>
<?php }
}
}
