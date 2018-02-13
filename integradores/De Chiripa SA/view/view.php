<?php

  require_once('libs/Smarty.class.php');
  class View {

    protected $view;
    function __construct(){

      $this->smarty = new Smarty();
      $this->smarty->assign('title', 'Control de Apuestas');

    }
  }


 ?>
