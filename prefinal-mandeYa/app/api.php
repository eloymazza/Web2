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
                $pedidoRegistrado = $this->modeloPedidos->registrarPedido($fecha,$destino,50,$id_M);
                $result['mensaje'] = $this->vistaIndex->pedidoExitoso();
                $result['ultimoPedido'] = $pedidoRegistrado;
                header("Content-Type: application/json");
                header("HTTP/1.1 200 OK");
                echo json_encode($result);
                
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

        public function getCantPedidosRealizados($dia){        
            return $this->modeloPedidos->getPedidosRealizados($dia);
        }

        public function getRankingMandaderos($mes){
            $mesActual = '2018-'.$mes.'%';
            $mandaderos = $this->modeloMandaderos->getMandaderos();
            $rankingMandaderos= [];
            $cont=0;
            foreach ($mandaderos as $mandadero) {
                $rankingMandaderos[$mandadero['nombre']] = $this->modeloPedidos->getCantPedidosRM($mandadero['id_M'], $mesActual);
            }
            arsort($rankingMandaderos);

            $result = [];
            $keys = array_keys($rankingMandaderos);
            $values = array_values($rankingMandaderos);
            for ($i=0; $i < count($rankingMandaderos); $i++) {
                if($values[$i] > 0) 
                $result[$i] = [
                    'nombre' => $keys[$i],
                    'cantPedidos' => $values[$i]
                ];
            }
            header("Content-Type: application/json");
            header("HTTP/1.1 200 OK");
            echo json_encode($result);
   
        }

        public function getIngresosPorDia($dia){
            $mes = date('m');
            echo array_sum($this->modeloPedidos->getIngresosDia($dia,$mes));
        }

    }
        
        


?>