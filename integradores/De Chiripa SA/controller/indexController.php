<?php

  include_once('model/indexModel.php');
  include_once('view/IndexView.php');

  class IndexController extends Controller{

      function __construct(){
        $this->model = new IndexModel();
        $this->view = new IndexView();
      }

      function index(){
        $juego = $this->model->getJuegoDefault();
        $imagen = $this->model->getImagenDefault($juego['id_imagen']);
        $apuesta = $this->model->getApuestaDefault($juego['id_juego']);
        $this->view->showIndex($juego,$imagen,$apuesta);
      }
  }


?>
