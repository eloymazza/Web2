<?php

    require_once('view/view.php');
    class IndexView extends View{

        function __construct(){
            parent::__construct();
        }

        function showIndex($trees){
            $this->smartyView->assign('trees', $trees);
            $this->smartyView->display('templates/index.tpl');
        }


    }

?>