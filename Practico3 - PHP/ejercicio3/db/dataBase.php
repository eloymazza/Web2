<?php

class DataBase{

    protected $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=asistencia;charset=utf8','root', '');
    }
}

class DBPreloader extends DataBase{


    function __construct($paths, $sentences){
        
        parent::__construct();
        for ($i=0; $i < count($paths); $i++) { 
            $this->precargar($paths[$i], $sentences[$i]);
        }
        fopen('dbStart/preloaded.txt', 'w+');
    }      

    function precargar($path, $sentence){
        $file = fopen($path, 'r');   
        $log = array();
        
        while (!feof($file)){
            $log = explode(';',fgets($file));
            $this->insert($log,$sentence);
        }    
        fclose($file);
    }
    
    function insert($log,$sentenceSQL){
        $sentence = $this->db->prepare($sentenceSQL);
        $sentence->execute($log);
    }
    
}

class DBInteractions extends DataBase{
    
    function __construct(){
        parent::__construct();

    }
    
    function getMaterias(){

        $sql = $this->db->prepare('SELECT * FROM materia');
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    function getAlumnos($materia){
        $sql = $this->db->prepare('SELECT dni FROM inscriptos WHERE '.$materia.'=?');
        $sql->execute([1]);
        $regAlumnos =  $sql->fetchAll(PDO::FETCH_ASSOC);
        $alumnos = array();
        
        foreach ($regAlumnos as $regAlumno) {
            $sql = $this->db->prepare('SELECT * FROM alumno WHERE dni=?');
            $sql->execute([$regAlumno["dni"]]);
            $alumnos[] = $sql->fetchAll()[0];
        }
        return $alumnos;
        
    }

}



if(!file_exists('dbStart/preloaded.txt')){
    $paths = array(
        'dbStart/inscriptos.txt',
        'dbStart/estudiantes.txt',
        'dbStart/materias.txt'
    );
    $sentences = array(
        0 =>'INSERT INTO inscriptos(dni,matematicas,web1,programacion1,ingles) VALUES (?,?,?,?,?)',
        1 =>'INSERT INTO alumno(dni,nombre,apellido) VALUES (?,?,?)',
        2 =>'INSERT INTO materia(nombre) VALUES(?)'
    );
    $preloader = new DBPreloader($paths, $sentences);
}



?>