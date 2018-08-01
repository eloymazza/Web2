<?php
/* Smarty version 3.1.30, created on 2018-08-01 01:40:05
  from "C:\xampp\htdocs\collection\Web2\integradores\CALA\templates\trees\species.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b60f355111ff1_59217537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0e14c72b93581fe901c81814b044e55744b1483' => 
    array (
      0 => 'C:\\xampp\\htdocs\\collection\\Web2\\integradores\\CALA\\templates\\trees\\species.tpl',
      1 => 1533080061,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b60f355111ff1_59217537 (Smarty_Internal_Template $_smarty_tpl) {
?>
<select id="specie_picker">
    <option disabled selected>Seleccione una especie</option>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['species']->value, 'specie');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['specie']->value) {
?>
        <option value="<?php echo $_smarty_tpl->tpl_vars['specie']->value['id_especie'];?>
"><?php echo $_smarty_tpl->tpl_vars['specie']->value['nombre'];?>
</option>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</select>
<div>
    Cantidad: <span id='speciesCount'></span>
</div>
    <?php }
}
