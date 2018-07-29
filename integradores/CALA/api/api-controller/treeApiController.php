<?php

    require_once('api.php');
    class TreeApiController extends Api {

        function __construct(){
            parent::__construct();
            $this->model = new TreeModel();
        }

        function getTrees(){
            $trees = $this->model->getTrees($params = []);
            return $this->json_response($trees, 200);
        }

    }


?>