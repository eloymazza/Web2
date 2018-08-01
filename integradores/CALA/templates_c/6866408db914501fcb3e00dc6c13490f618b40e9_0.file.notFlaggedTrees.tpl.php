<?php
/* Smarty version 3.1.30, created on 2018-07-30 03:50:27
  from "C:\xampp\htdocs\collection\Web2\integradores\CALA\templates\trees\notFlaggedTrees.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b5e6ee3082855_07464709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6866408db914501fcb3e00dc6c13490f618b40e9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\collection\\Web2\\integradores\\CALA\\templates\\trees\\notFlaggedTrees.tpl',
      1 => 1532915418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5e6ee3082855_07464709 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol>
    <?php $_smarty_tpl->_assignInScope('date', date('Y'));
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nfTrees']->value, 'nftree');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nftree']->value) {
?>
        <li>
            <div>
                <span>Especie: <?php echo $_smarty_tpl->tpl_vars['nftree']->value['nombre'];?>
</span>
            </div>
            <div>
                <span>Edad: <?php echo $_smarty_tpl->tpl_vars['date']->value-$_smarty_tpl->tpl_vars['nftree']->value['anio_plantado'];?>
</span>
            </div>
            <div>
                <span>Descripcion: <?php echo $_smarty_tpl->tpl_vars['nftree']->value['descripcion'];?>
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
