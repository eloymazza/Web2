<?php

    function home(){

        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Form test</title>
        </head>
        <body>
            <form class="js-form" method="post">
                <label for="">
                        Ingrese numero<input type="text" value="" name="number">
                </label>
                <button type="submit">Enviar</button>
            </form>
            <div class="dataPlace"></div>
        </body>
        <script src="../practico1-PHP/jquery-3.2.1.min.js"></script>
        <script src="js/main.js"></script>
        </html>';
    }

    function numberReceiver($params = null){

        echo 'El numero recibido es: '.$params[0];
    }
?>