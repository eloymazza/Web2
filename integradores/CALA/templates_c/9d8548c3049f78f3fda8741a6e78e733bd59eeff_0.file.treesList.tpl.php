<?php
/* Smarty version 3.1.30, created on 2018-07-29 03:32:11
  from "C:\xampp\htdocs\collection\Web2\integradores\CALA\templates\trees\treesList.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b5d191b2075c3_18220226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d8548c3049f78f3fda8741a6e78e733bd59eeff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\collection\\Web2\\integradores\\CALA\\templates\\trees\\treesList.tpl',
      1 => 1532827930,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b5d191b2075c3_18220226 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ol>
    <?php $_smarty_tpl->_assignInScope('date', date('Y'));
?>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['trees']->value, 'tree');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tree']->value) {
?>
        <li>
            <div>
                <span>Especie: <?php echo $_smarty_tpl->tpl_vars['tree']->value['nombre'];?>
</span>
            </div>
            <div>
                <span>Edad: <?php echo $_smarty_tpl->tpl_vars['date']->value-$_smarty_tpl->tpl_vars['tree']->value['anio_plantado'];?>
</span>
            </div>
            <div>
                <span>Descripcion: <?php echo $_smarty_tpl->tpl_vars['tree']->value['descripcion'];?>
</span>
            </div>
            <div>
                <span>
                <?php ob_start();
echo $_smarty_tpl->tpl_vars['tree']->value['flag'];
$_prefixVariable1=ob_get_clean();
if ($_prefixVariable1) {?>
                    Esta señalizado
                <?php } else { ?>
                    No esta señalizado
                <?php }?>
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
