<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HTML</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>

        <table>
            <thead>
                <?php
                    echo "<th>\</th>";
                    for($i = 1; $i < 21; $i++){
                        echo "<th>".$i."</th>";
                    }
                ?>
            </thead>
            <tbody>
                <?php
                    for($i = 1; $i < 21; $i++){
                        echo "<tr><td class='resaltado'>".$i."</td>"; 
                        for($j = 1; $j < 21; $j++){
                            if($i == $j){
                                echo "<td class='resaltado'>".$j*$i."</td>";
                            }
                            else{
                                echo "<td>".$j*$i."</td>";
                            }
                        }
                        echo "</tr>";
                    }
                ?>
            </tbody>
        </table>
    
    </body>
</html>
