<?php

    require_once('api.php');
    class NotFoundApiController extends Api {

        function __construct(){
            parent::__construct();
        }

        function show404(){
            return $this->json_response(array('Data' => 'Not Found'), 404);
        }

    }


?>