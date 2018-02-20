<?php

    include_once("modelo.php");

    define('ASIGNADO',1);

    class ModeloPedidos extends Modelo{

        function __construct(){
            parent::__construct();
        }


        public function registrarPedido($fecha,$destino,$precio,$id_M){

            $sql = $this->db->prepare("INSERT INTO pedido(fecha, destino, precio, estado, id_M) VALUES(?,?,?,?,?)");
            $sql->execute([$fecha,$destino,$precio,ASIGNADO,$id_M]);

        }

        public function getPedidosEnEspera(){
            
            $sql = $this->db->prepare('SELECT destino, fecha, precio, nombre FROM pedido INNER JOIN mandadero ON pedido.id_M=mandadero.id_M where estado=1 or estado=2');
            $sql->execute();
            return $sql->fetchAll();

        }

    }



?>