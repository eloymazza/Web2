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

        function getSpecies(){
            $query = $this->db->prepare('SELECT nombre, id_especie, descripción FROM especie');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        function getCantTreesBySpecie($id_especie){
            $query = $this->db->prepare('SELECT count(id_arbol) from arbol where id_especie=?');
            $query->execute([$id_especie]);
            return $query->fetchAll(PDO::FETCH_ASSOC)[0];
        }

        function getNotFlaggedTrees(){
            $query = $this->db->prepare('SELECT descripcion, latitud, longitud, flag, anio_plantado, nombre FROM arbol INNER JOIN especie ON arbol.id_especie=especie.id_especie where flag=0');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

        function getExtEspecies(){
            $species = $this->getSpecies();
            $extSpecies = [];
            foreach ($species as $specie) {
                $cant = $this->getCantTreesBySpecie($specie['id_especie']);
                $cant = $cant['count(id_arbol)'];
                if($cant  < 3){
                    $extSpecies[] = $specie;
                }
            }
            return $extSpecies;
        }

        function getTreesByZone($zone){
            $query = $this->db->prepare('SELECT latitud, longitud, flag, anio_plantado, nombre
            FROM arbol INNER JOIN especie ON arbol.id_especie=especie.id_especie
            where arbol.longitud BETWEEN ? AND ? AND arbol.latitud BETWEEN ? AND ?');
            $query->execute($zone);
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }

    }

?>