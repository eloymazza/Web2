<?php
/* Smarty version 3.1.30, created on 2018-02-13 23:39:10
  from "C:\xampp\htdocs\proyectos\Web2\integradores\De Chiripa SA\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a83690e04eb36_03029076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '194983ce99ac0d9c00cccbe105ffc3f6524372ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web2\\integradores\\De Chiripa SA\\templates\\index.tpl',
      1 => 1518561549,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:mainSection.tpl' => 1,
  ),
),false)) {
function content_5a83690e04eb36_03029076 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rubik+Mono+One" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
  </head>
  <body>
    <header>
      <div class="container-fluid bg-primary simple-border mb-2">
        <div class="row ">
          <div class="col-md-12">
            <div class="center custom-font">
              <h1 class="main-title">De chiripa Sa</h1>
              <h2 class="subtitle">Control de apuestas</h2>
            </div>
          </div>
        </div>
      </div>
    </header>
    <section>
      <?php $_smarty_tpl->_subTemplateRender("file:mainSection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    </section>
    <footer>
      <div class="container-fluid bg-primary simple-border mt-5">
        <div class="row">
          <div class="col-md-12">
            <h2>footer</h2>
          </div>
        </div>
      </div>
    </footer>
  </body>
  <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="js/main.js" charset="utf-8"><?php echo '</script'; ?>
>
</html>
<?php }
}
