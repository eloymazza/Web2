<?php

    require_once('config/configRoutes.php');
    require_once('router/ApiRouter.php');
    require_once('../model/model.php');
    require_once('../model/treeModel.php');
    require_once('api.php');
    require_once('api-controller/treeApicontroller.php');
    require_once('api-controller/notFoundApiController.php');

    class Request {

        protected $apiRouter;

        function __construct(){
            $this->apiRouter = new ApiRouter();
        }

        function request($req){ 
            $action = $this->apiRouter->route($req);
            if(sizeof($action) == 0)
                echo (new NotFoundApiController())->show404();
            else{
                $controller = $action[0];
                $metodo = $action[1];
                $url_params = $action[2];
                echo (new $controller())->$metodo($url_params);
            }
        }

    }
    
    $request = new Request();
    $request->request($_GET['resource']);
?>