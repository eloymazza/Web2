<?
    require_once('view/view.php');
    class TreeView{

        function __construct(){
            parent::__construct();
        }

        function showTrees($trees){
            $this->smartyView->assign('arboles', $trees);
            $this->smartyView->display('templates/index.tpl');
        }

    }

?>