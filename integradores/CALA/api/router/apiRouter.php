<?php

    class ApiRouter {

        private $params;
        function __construct(){

        }

        public function route($requested_url) {
            foreach (ConfigRoutes::$ROUTES as $route) {
                $resource = $route[0];
                $httpVerb = $route[1];
                if($this->matchURL($resource, $requested_url) && $httpVerb == $_SERVER['REQUEST_METHOD']) {
                    $controller =  $route[2];
                    $metodo = $route[3];
                    return [ $controller, $metodo, $this->params];
                }
            }
        }
    
        private function matchURL($resource, $requested_url){
            $resourceExploded = explode('/', trim($resource,'/'));
            $requested_urlExploded = explode('/', trim($requested_url,'/'));
            if(sizeof($resourceExploded) != sizeof($requested_urlExploded)){
                return false;
            }
            $this->params = [];
            for($i = 0; $i < sizeof($requested_urlExploded); $i++){
                if($requested_urlExploded[$i] != $resourceExploded[$i]){
                    if($resourceExploded[$i][0]== ":"){
                        $this->params[$resourceExploded[$i]] = $requested_urlExploded[$i];
                    }
                    else {
                        return false;
                    } 
                }
            }
            return true;
        }

    }

?>