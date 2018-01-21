<?php

    require 'dbConnection.php';
    date_default_timezone_set('America/Argentina/Buenos_Aires');


    function fileOpen(){
        $path = 'interesesDeudas.csv';
        $file = fopen($path, 'r');

        return $file;
    }

    function insert($log,$db){

        $sentence =  $db->prepare('INSERT INTO interesesdeuda(cuota,fecha_pago,vencimiento,cuota_capital,interes,pagado,deudor) VALUES(?,?,?,?,?,?  ,?)');
        $sentence->execute($log);

    }

    function update($db){
        $date = date('d/m/Y');
        $lastID = $db->lastInsertId();
        $sentence = $db->prepare('UPDATE interesesdeuda SET fecha_pago=? WHERE id=?');
        $sentence->execute([$date,$lastID]);
    }

    function see($db){
        $sentence = $db->prepare('SELECT * FROM interesesdeuda');
        $sentence->execute([]);
    }
    function insertLogs($db){

        $file = fileOpen();
        fgets($file);

        $log = array();

        
        while (!feof($file)){
          $log = explode(';',fgets($file));
          insert($log, $db);
        }
        update($db);
        see($db);
        fclose($file); 

    }
    
    insertLogs($db);


?>