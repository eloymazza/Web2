<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejercicio6</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <form  method="post">
            <label for="dineroInicial">
                Inversion:
            </label>
            <input type="text" name="inversion" value="0">
            <button type="submit">Calcular</button>
        </form>

            <?php
                if(isset($_POST["inversion"])){
                    $tasa = 0.014;
                    $total = $_POST["inversion"];
                    echo "<table>
                            <thead>
                                <th>Dinero Acumulado</th><th> N° Mes </th>
                            </thead>
                            <tbody>";
                    for ($i=0; $i <= 12 ; $i++) { 
                        $total +=floor($total * $tasa);
                        echo "<tr><td>".$total."</td><td>".$i."</td></tr>";

                    }
                    echo "</tbody></table>";
                }
            ?>

    </body>
</html>