<?php

    require_once('api.php');
    class TreeApiController extends Api {

        function __construct(){
            parent::__construct();
            $this->model = new TreeModel();
        }

        function getTrees(){
            $trees = $this->model->getTrees();
            return $this->json_response($trees, 200);
        }

        public function getSpecies(){
            $species = $this->model->getSpecies();
            return $this->json_response($species, 200);
        }

        public function countSpecies($id_especie){
            $resp = $this->model->getCantTreesBySpecie($id_especie[':id']);
            $cant = [ 'cantidad' => $resp['count(id_arbol)']];
            return $this->json_response($cant, 200);
        }

        public function getTreesByZone(){ 
            $params = array($_GET['minLong'],$_GET['maxLong'], $_GET['minLat'], $_GET['maxLat']);
            $trees = $this->model->getTreesByZone($params);
            return $this->json_response($trees, 200); 
        }
        

    }


?>