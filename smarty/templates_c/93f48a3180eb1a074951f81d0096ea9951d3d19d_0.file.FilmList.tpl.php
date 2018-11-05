<?php
/* Smarty version 3.1.32, created on 2018-11-05 17:55:11
  from 'D:\xampp\htdocs\videoteca-project\smarty\templates\FilmList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5be075ef38d1f7_45558395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '93f48a3180eb1a074951f81d0096ea9951d3d19d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\videoteca-project\\smarty\\templates\\FilmList.tpl',
      1 => 1541436906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be075ef38d1f7_45558395 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<?php if ($_smarty_tpl->tpl_vars['array']->value) {?>
<!-- Table che mostra le canzoni -->
<table class="table table-responsive">
	<tbody>					
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['array']->value, 'film');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['film']->value) {
?>
		<tr> 
			<!-- Nome film -->
			<td><a href="/videoteca-project/film/show/<?php echo $_smarty_tpl->tpl_vars['film']->value->getId();?>
"><?php echo $_smarty_tpl->tpl_vars['film']->value->getName();?>
</a></td>
			<?php if (isset($_smarty_tpl->tpl_vars['key']->value)) {?>
			<!-- Autore film (se la table e' richiamata nella ricerca )-->
			<td><?php echo $_smarty_tpl->tpl_vars['film']->value->getAuthor();?>
</a></td>
			<!-- Genere del film -->
			<td><?php echo $_smarty_tpl->tpl_vars['film']->value->getGenre();?>
</td> 
			<?php }?> 
		</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tbody>
</table>
<?php } else { ?>
<p>Non è stato trovato alcun film!</p>
<?php }?>
		
<?php }
}
