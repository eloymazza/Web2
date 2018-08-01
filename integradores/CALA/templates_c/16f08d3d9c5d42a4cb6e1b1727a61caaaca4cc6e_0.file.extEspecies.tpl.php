<?php
/* Smarty version 3.1.30, created on 2018-08-01 03:36:05
  from "C:\xampp\htdocs\collection\Web2\integradores\CALA\templates\trees\extEspecies.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b610e85124347_67645819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16f08d3d9c5d42a4cb6e1b1727a61caaaca4cc6e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\collection\\Web2\\integradores\\CALA\\templates\\trees\\extEspecies.tpl',
      1 => 1533086814,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b610e85124347_67645819 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol>
    <?php $_smarty_tpl->_assignInScope('date', date('Y'));
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['extEspecies']->value, 'extEspecie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['extEspecie']->value) {
?>
        <li>
            <div>
                <span>Especie: <?php echo $_smarty_tpl->tpl_vars['extEspecie']->value['nombre'];?>
</span>
            </div>
            <div>
                <span>Descripcion: <?php echo $_smarty_tpl->tpl_vars['extEspecie']->value['descripción'];?>
</span>
            </div>
        </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</ol><?php }
}
