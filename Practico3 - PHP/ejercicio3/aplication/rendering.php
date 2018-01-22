<?php


    function cargarMaterias($db){
        $materias = $db->getMaterias();
        foreach ($materias as $materia) {
            echo '<button class="ml-3 js-materia-btn" value="'.$materia['nombre'].'">'.$materia['nombre'].'</button>';
        }
    }
    
    function home(){
        $db = new DBInteractions();
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                </div>
            </body>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
            <script src="js/ajax.js"></script>
        </html>';
    }

    function cargarAlumnos($materia){
        $db = new DBInteractions();
        $alumnos = $db->getAlumnos($materia[0]);
        
        echo '<ul>';
        foreach ($alumnos as $alumno) {
            echo '<li>'.$alumno["nombre"].' '.$alumno['apellido'].'</li>';
        }
        echo '</ul>';
    }

?>