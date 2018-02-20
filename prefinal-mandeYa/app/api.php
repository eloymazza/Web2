<?php

    include_once('vista/index.php');
    include_once('modelo/modeloMandaderos.php');
    include_once('modelo/modeloPedidos.php');


    class API{

        protected $vistaIndex;
        protected $modeloPedidos;
        protected $modeloMandaderos;

        function __construct(){
            $this->vistaIndex = new Index();
            $this->modeloPedidos = new ModeloPedidos();
            $this->modeloMandaderos = new ModeloMandaderos();
        }
           
        public function mostrarHome(){
            
            $this->vistaIndex->mostrarHome();
            
        }
        
        public function mostrarIndex(){
            
            $this->vistaIndex->mostrarIndex();
            
        }

        public function tomarPedido(){

            $fecha = $_POST['fecha'];
            $destino = $_POST['destino'];
            $id_M = $this->getMejorMandadero($destino);

            if($id_M != -1){
                $this->modeloPedidos->registrarPedido($fecha,$destino,50,$id_M);
                $this->vistaIndex->pedidoExitoso();
            }
            else{
                $this->vistaIndex->pedidoErroneo();
            }

        }
        
        private function getMejorMandadero($destino){

            $mandaderosDisponibles = $this->modeloMandaderos->getMandaderosDisponibles();

            if(count($mandaderosDisponibles) != 0){
                $distanciaMinima = $this->calcularDistancia($destino, $mandaderosDisponibles[0]['ultima_ubicacion']);
                $mejorMandadero = $mandaderosDisponibles[0];
                
                foreach ($mandaderosDisponibles as $mandadero){
                    $distanciaActual = $this->calcularDistancia($destino,$mandadero['ultima_ubicacion']);
                    if($distanciaActual < $distanciaMinima){
                        $distanciaMinima = $distanciaActual;
                        $mejorMandadero = $mandadero;
                    }
                }
                return $mejorMandadero['id_M'];
            }
            return -1;
        }
        
        private function calcularDistancia($destino, $ubicMandadero){
            return abs($destino - $ubicMandadero);
        }

        public function getPedidosEnEspera(){

            $pedidos = $this->modeloPedidos->getPedidosEnEspera();
            header("Content-Type: application/json");
            header("HTTP/1.1 200 OK");
            echo json_encode($pedidos);

        }

    }
        
        


?>