<?php
class ConfigApp{

  public static $ACTION = "action";
  public static $PARAMS = "params";
  public static $ACTIONS = [
      '' => 'home',
      'alumnos' => 'cargarAlumnos',
      'registro' => 'crearRegistro'
  ];
}

?>
