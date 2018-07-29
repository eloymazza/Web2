<?php

    include_once('model.php');

    class TreeModel extends Model{

        function __construct(){
            parent::__construct();
        }

        function getTrees(){
            $query = $this->db->prepare('SELECT descripcion, latitud, longitud, flag, anio_plantado, nombre FROM arbol INNER JOIN especie ON arbol.id_especie=especie.id_especie');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

    }

?>