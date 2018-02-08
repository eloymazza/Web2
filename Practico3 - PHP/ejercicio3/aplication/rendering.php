<?php

   
    function home(){
        $db = new DBInteractions();
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/main.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            <title>Asistencia</title>
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <h1>Asistencia</h1>
                    </div>
                </div>
                <div class="container mt-3">
                    <div class="row">
                            <div class="col-md-8">
                                <h2>En que materia quieres cargar la asistencia?</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="mt-3">';
                            cargarMaterias($db);
                        echo'</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Alumnos que asisten:</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 js-contenedor-alumnos">';
                    echo'</div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>
                                <span class="bolder"> Elije el dia donde cargar la asistencia: </span>
                            </label>
                            <select name="day" id="js-dia">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select> 
                        </div>
                    </div>
                </div>
            </body>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="js/ajax.js"></script>
        </html>';
    }

    function cargarAlumnos($params){

        $db = new DBInteractions();

        $nombreMateria = $params[0];
        $dia = $params[1];

        $alumnos = $db->getAlumnos($nombreMateria);
        echo '<ul>';
        foreach ($alumnos as $alumno) {
            echo '<li>'.$alumno["nombre"].' '.$alumno["apellido"];
            if($db->asistio($dia, $alumno["id_alumno"], $db->getIDMateria($nombreMateria))){
               echo '<button class="js-grabar-asistencia ml-3" name="js-materia-'.$nombreMateria[0].'" id="alumno-'.$alumno["id_alumno"].'">Cargar Asistencia</button>(Inasistencia)';
            }
            else{
                echo '<span class="bolder ">Asistio</span></li>';
            }
        }
        echo '</ul>';
    }

    function crearRegistro($params){
        $db = new DBInteractions();
        $db->crearRegistro($params);
    }

       
    function cargarMaterias($db){
        $materias = $db->getMaterias();
        foreach ($materias as $materia) {
            echo '<button class="ml-3 js-materia-btn" value="'.$materia['nombre'].'">'.$materia['nombre'].'</button>';
        }
    }

?>