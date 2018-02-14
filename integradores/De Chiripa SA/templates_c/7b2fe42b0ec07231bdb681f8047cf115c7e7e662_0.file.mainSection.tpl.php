<?php
/* Smarty version 3.1.30, created on 2018-02-14 01:46:17
  from "C:\xampp\htdocs\proyectos\Web2\integradores\De Chiripa SA\templates\mainSection.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a8386d9cfdf73_26232235',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b2fe42b0ec07231bdb681f8047cf115c7e7e662' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proyectos\\Web2\\integradores\\De Chiripa SA\\templates\\mainSection.tpl',
      1 => 1518568945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/tablaApuestas.tpl' => 1,
  ),
),false)) {
function content_5a8386d9cfdf73_26232235 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container">
  <div class="row mb-3 mt-2">
    <div class="col-md-4 ">
      <div class="row">
        <div class="col-md-12 ">
          <div class="center simple-border bg-primary mb-2">
            <h3 class="custom-font">Juego</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 ">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/ruleta.jpg" alt="Ruleta">
            <div class="card-body">
              <h5 class="card-title">Ruleta</h5>
              <p class="card-text">Ruleta clasica 37 numeros. Semi electronica. Sin  croupier</p>
              <div class="row">
                <div class="col-md-12 center mb-2">
                  <bitton  class="btn btn-primary">Ingresar Apuesta</bitton>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 center">
                  <input type="number" class="number-input-juego" placeholder="Apuesta"></input>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="center simple-border bg-primary mb-2">
        <h3 class="custom-font">Apuestas</h3>
      </div>
      <div class="card" style="width: 18rem;">
        <div class="card-body ">
          <h4>Vista clasica:</h4>
          <?php $_smarty_tpl->_subTemplateRender("file:templates/tablaApuestas.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        </div>
      </div>
    </div>
  </div>
</div>
<?php }
}
