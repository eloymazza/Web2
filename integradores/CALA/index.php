<?php

    include_once('controller/indexController.php');
    include_once('model/model.php');
    
    $indexController = new IndexController();
    $indexController->showIndex();

?>