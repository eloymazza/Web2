<?php

   $operacion = $_POST["op"];
   $a = $_POST["a"];
   $b = $_POST["b"];

   switch ($operacion) {
        case 'sumar':
            echo $a + $b;
            break;
        case 'restar':
            echo $a - $b;
            break;
        case 'multiplicar':
            echo $a * $b;
            break;   
   }
?>