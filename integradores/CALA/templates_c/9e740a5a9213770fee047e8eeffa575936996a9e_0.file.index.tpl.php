<?php
/* Smarty version 3.1.30, created on 2018-08-01 01:40:23
  from "C:\xampp\htdocs\collection\Web2\integradores\CALA\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b60f367f17ab9_64454828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e740a5a9213770fee047e8eeffa575936996a9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\collection\\Web2\\integradores\\CALA\\templates\\index.tpl',
      1 => 1533080422,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:trees/treesList.tpl' => 1,
    'file:trees/species.tpl' => 1,
    'file:trees/notFlaggedTrees.tpl' => 1,
    'file:trees/extEspecies.tpl' => 1,
    'file:trees/zonePicker.tpl' => 1,
  ),
),false)) {
function content_5b60f367f17ab9_64454828 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <article>
        <section>
            <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
            <h2>Lista de arboles:</h2>
            <?php $_smarty_tpl->_subTemplateRender("file:trees/treesList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </section>
        <section>
            <h2>Cantidad de arboles por especie</h2>
            <?php $_smarty_tpl->_subTemplateRender("file:trees/species.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </section>
        <section>
            <h2> Lista de arboles sin señalizar: </h2>
            <?php $_smarty_tpl->_subTemplateRender("file:trees/notFlaggedTrees.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </section>
        <section>
            <h2> Lista de arboles en extincion: </h2>
            <?php $_smarty_tpl->_subTemplateRender("file:trees/extEspecies.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </section>
        <section>
            <h2> Lista de arboles segun zona elegida: </h2>
            <?php $_smarty_tpl->_subTemplateRender("file:trees/zonePicker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </section>
    </article>
</body>
<?php echo '<script'; ?>
 src='js/serialize-0.2.min.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='js/speciesPicker.js'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src='js/localization.js'><?php echo '</script'; ?>
>
</html><?php }
}
