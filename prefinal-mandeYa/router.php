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
          break;
        case 'getPedidosRealizados':
          $api->getCantPedidosRealizados($_GET['diaElegido']);
          break;
        case 'getRankingMandaderos':
          $api->getRankingMandaderos($_GET['mesElegido']);
          break;
        case 'ingresosPorDia':
          $api->getIngresosPorDia($_GET['diaIngresos']);
          break;
        case 'getMandaderos':
          echo $api->getMandaderos();
          break;
        case 'getPedidos':
          echo $api->getPedidos($_GET['idMandadero']);
          break;
      }
  }
  else{
    mostrarHome();
  }


?>
