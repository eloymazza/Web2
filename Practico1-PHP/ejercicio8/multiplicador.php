<?php

    $objetivo = $_POST["numero"];
    $html = "<tbody><tr>";
    for ($i=1; $i <= $objetivo; $i++) { 
        $html.= "<td>".$i."</td>";
    }
    $html.="</tr>";
    for ($i=2; $i <= $objetivo; $i++) { 
        $html.= "<tr><td>".$i."</td>";
        for ($j=2; $j <= $objetivo; $j++) { 
            $html.= "<td>".$i*$j."</td>";
        }
        $html.= "</tr>";
    }


    $html.="</tbody>";
    echo $html;
?>