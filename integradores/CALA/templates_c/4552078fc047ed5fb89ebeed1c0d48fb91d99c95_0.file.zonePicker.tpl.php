<?php
/* Smarty version 3.1.30, created on 2018-08-01 04:00:09
  from "C:\xampp\htdocs\collection\Web2\integradores\CALA\templates\trees\zonePicker.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b611429720a77_13523350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4552078fc047ed5fb89ebeed1c0d48fb91d99c95' => 
    array (
      0 => 'C:\\xampp\\htdocs\\collection\\Web2\\integradores\\CALA\\templates\\trees\\zonePicker.tpl',
      1 => 1533088496,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b611429720a77_13523350 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id='zoneForm'  action='treesByZone'>
    <div>
        Min Long <input type='number' name='minLong' placeholder="Ingrese Longitud mínima">
        Max Long <input type='number' name='maxLong' placeholder="Ingrese Longitud máxima">
    </div>
    <div>
        Min Lat <input type='number' name='minLat' placeholder="Ingrese Latitud mínima">
        Max Lat <input type='number' name='maxLat' placeholder="Ingrese Latitud máxima">
    </div>
    <button type='submit'>Enviar</button>
</form>
<div>
    <h3>Arboles:</h3>
    <div id='treesByZone'>

    </div>
</div>
    <?php }
}
