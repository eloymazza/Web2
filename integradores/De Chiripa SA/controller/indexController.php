<?php

  include_once('model/indexModel.php');
  include_once('view/IndexView.php');

  class IndexController extends Controller{


      function __construct(){

        $this->model = new IndexModel();
        $this->view = new IndexView();

      }

      function index(){

        $this->view->showIndex();

      }


  }


?>
