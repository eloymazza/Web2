<?php

  require_once('api.php');
  require_once('../model/digiModel.php');

  class DigimonApiController extends Api
  {

    function __construct()
    {
      parent::__construct();
      $this->digiModel = new DigiModel();
    }

    public function getDigimons(){

      $digimons = $this->digiModel->getDigimons();
      return $this->json_response($digimons,200);
    }
  }



?>
