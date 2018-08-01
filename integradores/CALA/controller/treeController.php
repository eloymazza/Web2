<?php

    include_once('controller/controller.php');
    include_once('model/treeModel.php');

    class TreeController extends Controller {
        
        function __construct(){
            $this->model = new TreeModel();       
        }

        public function getTrees(){
            $trees = $this->model->getTrees();
            return $trees;
        }

        public function getSpecies(){
            $species = $this->model->getSpecies();
            return $species;
        }

        public function getNotFlaggedTrees(){
            $notFlaggedTrees = $this->model->getNotFlaggedTrees();
            return $notFlaggedTrees;
        }

        public function getExtEspecies(){
            return $this->model->getExtEspecies();
        }
   } 

?>