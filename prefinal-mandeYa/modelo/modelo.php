<?php

class Modelo{

    protected $db;
    function __construct(){
      $this->db = new PDO('mysql:host=localhost;dbname=mandeya;charset=utf8'
      ,'root', '');
    }
}
?>
