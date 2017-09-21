<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejercicio4</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form method="post">
            <label for="string1">Peso</label>
            <input type="text" name="peso" placeholder="Ingrese peso">
            <label for="string2">Altura</label>
            <input type="text" name="altura" placeholder="Ingrese altura">
            <button type="submit">Enviar</button>
        </form>
        <?php
            $bajoPeso = 18.50;
            $normal = 25;
            $sobrepeso = 30;
            if(isset($_POST['peso']) && isset($_POST['altura'])){
                $IMC = ($_POST['peso'])/(pow($_POST['altura'],2));
                if($IMC < $bajoPeso){
                    echo "Bajo Peso";
                }
                else if($IMC < $normal){
                    echo "Normal";
                }
                else if($IMC < $sobrepeso){
                    echo "Sobrepeso";
                }
                else{
                    echo "Obesidad";
                }
            }
        ?>
    </body>
</html>