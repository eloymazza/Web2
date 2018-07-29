<?php

    include_once('controller/treeController.php');
    include_once('view/indexView.php');
    class IndexController extends Controller{

        protected $treeController;

        function __construct(){
            $this->treeController = new TreeController();
            $this->view = new IndexView();
        }

        function showIndex(){
            $this->view->showIndex($this->treeController->getTrees());
        }

    }

?>