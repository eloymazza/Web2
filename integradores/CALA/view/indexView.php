<?php

    require_once('view/view.php');
    class IndexView extends View{

        function __construct(){
            parent::__construct();
        }

        function showIndex($trees, $species, $notFlaggedTrees, $extEspecies){
            $this->smartyView->assign('trees', $trees);
            $this->smartyView->assign('species', $species);
            $this->smartyView->assign('nfTrees', $notFlaggedTrees);
            $this->smartyView->assign('extEspecies', $extEspecies);
            $this->smartyView->display('templates/index.tpl');
        }


    }

?>