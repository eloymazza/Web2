<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Ejercicio3</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="" method="post">
            <label for="string1">String 1</label>
            <input type="text" name="string1" placeholder="Ingrese String 1">
            <label for="string2">String 2</label>
            <input type="text" name="string2" placeholder="Ingrese String 2">
            <button type="submit">Enviar</button>
        </form>
        <?php
            if(isset($_POST['string1']) && isset($_POST['string2'])){
                echo $_POST['string1']." ".$_POST['string2']; 
            } 
        ?>
    </body>
</html>