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


   } 

?>