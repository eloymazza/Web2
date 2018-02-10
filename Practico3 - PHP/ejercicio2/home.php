<?php

    function home(){

        echo '<!DOCTYPE html>
        <html lang="en">
            <head>
                <title>Figuras Geometricas</title>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link href="css/main.css" rel="stylesheet">
            </head>
            <body>
                <h1> Creador de Figuras </h1>

                <ul>
                  <li>
                    <label>
                    <h2>Creador de Circulos</h2>
                    </label>
                    <form name="createCircle">
                      <input type="number" name="radio" placeholder="Ingrese radio">
                      <input type="submit" value="Crear" >
                    </form>
                    <div class="hidden">
                      <p>Circulo Creado Exitosamente</p>
                    </div>
                  </li>
                  <li>
                    <label>
                    <h2>Creador de Cuadrados </h2>
                    </label>
                    <form name="createSquare">
                      <input type="number" name="lado" id="js-square-long" placeholder="Ingrese longitud del lado">
                      <input type="submit" value="Crear">
                    </form>
                    <div class="hidden">
                    <p>Cuadrado Creado Exitosamente</p>
                    </div>
                  </li>
                  <li>
                    <label>
                    <h2> Creador de Triangulos</h2>
                    </label>
                    <form name="createTriangle">
                      <input type="number" name="base" placeholder="Ingrese longitud de la base">
                      <input type="number" name="altura" placeholder="Ingrese longitud de la altura">
                      <input type="submit" value="Crear">
                    </form>
                    <div class="hidden">
                      <p>Triangulo Creado Exitosamente</p>
                    </div>
                  </li>
                </ul>

            <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
            <script src="js/main.js"></script>
            </body>
        </html>';

    }
?>
