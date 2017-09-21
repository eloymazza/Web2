<?php 

    $input = $_POST["number"];

   $numbers =  explode(",", $input);

    sort($numbers);
    print_r($numbers);
?>