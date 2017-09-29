
<?php 

    function home(){

        echo "<!DOCTYPE html>
        <html lang='en'>
            <head>
                <title>Figuras Geometricas</title>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1'>
                <link href='css/style.css' rel='stylesheet'>
            </head>
            <body>
                <h1> Figuras </h1>
                <a href='example'> Ejemplo </a>
                <form action='circulos' method='get'>
                    <input type='number' name='radio'>
                    <button type='submit' id='botonCrearCirculo'>Crear Circulo</button>
                </form>

            <script src='https://code.jquery.com/jquery-3.2.1.min.js' integrity='sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=' crossorigin='anonymous'></script>
            <script src='parameter.js'></script>    
            </body>
        </html>";

    }
?>
