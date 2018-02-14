<?php

  class IndexModel extends Model{

      public function getJuegoDefault($idJuego = 1){

          $sql = $this->db->prepare('SELECT * from juego WHERE id_juego=?');
          $sql->execute([$idJuego]);
          return $sql->fetchAll()[0];

      }

      public function getImagenDefault($id_imagen){

        $sql = $this->db->prepare('SELECT nombre,alt FROM imagen WHERE id_imagen=?');
        $sql->execute([$id_imagen]);
        return $sql->fetchAll()[0];

      }

      public function getApuestaDefault($id_juego){
        $sql = $this->db->prepare('SELECT * FROM apuesta where id_juego=?');
        $sql->execute([$id_juego]);
        return $sql->fetchAll();
      }



  }



 ?>
