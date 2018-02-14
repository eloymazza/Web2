<?php

  class IndexView extends View
  {

      function __construct(){
        parent::__construct();

      }
      function showIndex($juego,$imagen,$apuestas){
        $this->smarty->assign('juego',$juego);
        $this->smarty->assign('imagen',$imagen);
        $this->smarty->assign('apuestas',$apuestas);
        $this->smarty->display('templates/index.tpl');
      }

  }

 ?>
