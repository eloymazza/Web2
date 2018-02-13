<?php


  class IndexView extends View
  {

      function __construct(){
        parent::__construct();

      }
      function showIndex(){
        $this->smarty->display('templates/index.tpl');
      }

  }



 ?>
