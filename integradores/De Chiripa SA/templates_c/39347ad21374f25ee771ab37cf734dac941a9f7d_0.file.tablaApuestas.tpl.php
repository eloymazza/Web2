<?php
/* Smarty version 3.1.30, created on 2018-02-14 03:47:35
  from "C:\xampp\htdocs\proyectos\Web2\integradores\De Chiripa SA\templates\tablaApuestas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a83a347304d41_57985469',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39347ad21374f25ee771ab37cf734dac941a9f7d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web2\\integradores\\De Chiripa SA\\templates\\tablaApuestas.tpl',
      1 => 1518576454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a83a347304d41_57985469 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="max-heigth-table">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">Monto</th>
    </tr>
  </thead>
  <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['apuestas']->value, 'apuesta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['apuesta']->value) {
?>
    <tr>
      <td><?php echo $_smarty_tpl->tpl_vars['apuesta']->value['fecha'];?>
</td>
      <td><?php echo $_smarty_tpl->tpl_vars['apuesta']->value['monto'];?>
</td>
    </tr>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

  </tbody>
</table>
</div>
<?php }
}
