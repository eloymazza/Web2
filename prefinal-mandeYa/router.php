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
          break;
        case 'pedidosEnEspera':
          $api->getPedidosEnEspera();
        default:
          break;
      }
  }
  else{
    mostrarHome();
  }


?>
