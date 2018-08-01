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
            $trees = $this->treeController->getTrees();
            $species = $this->treeController->getSpecies();
            $notFlaggedTrees = $this->treeController->getNotFlaggedTrees();
            $extEspecies = $this->treeController->getExtEspecies();
            $this->view->showIndex($trees, $species, $notFlaggedTrees, $extEspecies);
        }

    }

?>