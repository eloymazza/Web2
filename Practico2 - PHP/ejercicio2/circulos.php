<?php

    require_once("Figuras/Figura.php");
    require_once("Figuras/Cuadrado.php");
    require_once("Figuras/Triangulo.php");
    require_once("Figuras/Circulo.php");
    require_once("Figuras/Figuras.php");
    require_once("Figuras/AreaFilter.php");

    function circulos(){
        echo $_GET["radio"];
    }
?>