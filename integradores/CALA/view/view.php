<?php
    require_once('libs/Smarty.class.php');
    class View {

        protected $smartyView;

        function __construct(){
            $this->smartyView = new Smarty();
            $this->smartyView->assign('title', 'Club Amigos de los Árboles');
        }
    }

?>