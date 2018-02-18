<?php

    include_once('modelo/modelo.php');

    class ModeloMandaderos extends Modelo{

        function __construct(){
            parent::__construct();
        }

        public function getMandaderosDisponibles(){

            $mandaderos = $this->getMandaderos();
            $mandaderosDisponibles = [];
            foreach ($mandaderos as $mandadero) {
                if($this->cantMandados($mandadero) < 5){
                    $mandaderosDisponibles[] = $mandadero;
                }
            }
            return $mandaderosDisponibles;
        }
        
        public function getMandaderos(){
            $sql = $this->db->prepare("SELECT id_M, ultima_ubicacion FROM mandadero");
            $sql->execute([]);
            return $mandaderos = $sql->fetchAll();
        
        }

        private function cantMandados($mandadero){
            $sql = $this->db->prepare("SELECT count(id_P) from pedido where id_M=? and (estado='1' or estado='2')");
            $sql->execute([$mandadero['id_M']]);
            return $sql->fetch()[0];
        }

    }



?>