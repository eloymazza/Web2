<?php

    include_once("modelo.php");

    define('ASIGNADO',1);

    class ModeloPedidos extends Modelo{

        function __construct(){
            parent::__construct();
        }


        public function registrarPedido($fecha,$destino,$precio=50,$id_M){

            $sql = $this->db->prepare("INSERT INTO pedido(fecha, destino, precio, estado, id_M) VALUES(?,?,?,?,?)");
            $sql->execute([$fecha,$destino,$precio,ASIGNADO,$id_M]);

        }

    }



?>