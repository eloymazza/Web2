<?php

  include_once("model.php");

  class DigiModel extends Model
  {

    function __construct(){
        parent::__construct();
    }

    public function getDigimons(){

      $sql = $this->db->prepare('SELECT * FROM digimon');
      $sql->execute();
      return $sql->fetchAll();
    }

    public function getDigimonByID($id){

      $sql = $this->db->prepare('SELECT * FROM digimon where id_digimon=?');
      $sql->execute([$id]);
      return $sql->fetchAll();

    }

  }
?>
