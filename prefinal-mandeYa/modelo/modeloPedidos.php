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
            $newSQL = $this->db->prepare('SELECT destino, fecha, precio, nombre FROM pedido INNER JOIN mandadero ON pedido.id_M=mandadero.id_M where id_P=?');
            $newSQL->execute([$this->db->lastInsertId()]);
            return $newSQL->fetchAll()[0];
        }

        public function getPedidosEnEspera(){
            
            $sql = $this->db->prepare('SELECT destino, fecha, precio, nombre FROM pedido INNER JOIN mandadero ON pedido.id_M=mandadero.id_M where estado=1 or estado=2');
            $sql->execute();
            return $sql->fetchAll();

        }

        public function getPedidosRealizados($fecha){

            $sql = $this->db->prepare('SELECT count(id_P) from pedido WHERE estado=? and fecha=?');
            $sql->execute([3,$fecha]);
            print_r($sql->fetchAll()[0][0]);
        }

        public function getCantPedidosRM($id_M, $mes){
            $sql = $this->db->prepare('SELECT count(id_P) from pedido WHERE id_M=? and fecha like ? and estado=?');
            $sql->execute([$id_M, $mes, 3]);
            return $sql->fetchAll()[0][0];
        }

        public function getIngresosDia($dia, $mes){
            $sql = $this->db->prepare('SELECT precio FROM pedido WHERE DAY(fecha)=? and MONTH(fecha)=? and estado=3');
            $sql->execute([$dia, $mes]);
            return ($sql->fetchAll(PDO::FETCH_COLUMN));
        }

        public function getPedidos($id_M){

            $sql = $this->db->prepare('SELECT * from pedido WHERE id_M=?');
            $sql->execute([$id_M]);
            return($sql->fetchAll());
        }
    }



?>