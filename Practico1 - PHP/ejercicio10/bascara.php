<?php
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $powB = pow($b, 2);
    $det = 4*$a*$c;
    $d = ($powB)/(2*$a);
    $e = (sqrt($det - $powB))/ (2*$a);
    $f = (sqrt($powB - $det))/ (2*$a);
    $resultado = "<h2>Tipo:";

    if($powB < $det){
        $resultado .= " Raices complejas conjugadas</h2>";
        $resultado .= "<h2>Valor1: ".$d." + ".$e." i </h2>"; 
        $resultado .= "<h2>Valor2: ".$d." - ".$e." i </h2>"; 
    }
    else if($powB == $det){
        $resultado .= "<h2>Raices reales iguales</h2>";
        $resultado .= "<h2>Valor1 y Valor2: ".$d; 
    }
    else{
        $resultado .= " Raices Reales distintas</h2>";
        $resultado .= "<h2>Valor1: ". ($d+$f) ."</h2>"; 
        $resultado .= "<h2>Valor2: ".($d-$f)."</h2>"; 
    }
    echo $resultado;
?>