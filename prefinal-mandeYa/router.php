<?php

  include_once('app/api.php');

  $api = new API();

  if(isset($_GET['action'])){
      switch ($_GET['action']) {
        case '':
          $api->mostrarHome();
          break;
        case 'index':
          $api->mostrarIndex();  
          break;
        case 'tomarPedido':
          $api->tomarPedido();
        default:
          # code...
          break;
      }
  }
  else{
    mostrarHome();
  }


?>
