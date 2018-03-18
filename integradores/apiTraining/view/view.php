<?php
require_once('libs/Smarty.class.php');

class View
{
  protected $smarty;
  function __construct()
  {
    $this->smarty = new Smarty();
    $this->smarty->assign('title', 'Grocery App');
    $this->smarty->assign('baseURL', "http://".$_SERVER['SERVER_NAME'].dirname($_SERVER['PHP_SELF'])."/");
  }
 
}
?>