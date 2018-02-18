<?php

    include_once('vista/vista.php');

    class Index extends Vista{

        function __construct(){
            parent::__construct();
        }

        public function mostrarIndex(){
            
            echo '<div class="row">
            <div class="col-md-4 ml-1 form-border pt-1 pb-3">
                <h3>Solicitar Mandado</h3>
                <form class="js-pedido">
                    <div class="form-group">
                        <label for="destino">Destino</label>
                        <input type="number" name="destino" value="" class="form-control" id="destino" placeholder="1-100" min="0" max="100" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha de envio</label>
                        <input class="form-control" name="fecha" value="" type="date" placeholder="seleccione Fecha" id="fecha" required>
                    </div>
                    <div class="form-group row">
                        <label for="defaultPrice" class="col-sm-2 col-form-label">Precio: </label>
                        <div class="col-sm-10">
                            <input type="text" readonly class="form-control-plaintext" id="defaultPrice" value=" 50$">
                        </div>
                    </div>
                    <input type="submit" value="Realizar Pedido"></input>
                </form>
                </div>
                <div class="col-md-4">
                
                </div>
                <div class="col-md-4">
                
                </div>
                
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="bg-success js-exito-pedido">

                <div>
            </div<
        </div> 
        ';
        
           
        }

        public function pedidoExitoso(){
            echo '<div class="alert alert-success" role="alert">
                    Pedido Realizado con exito
                  </div>';
        }
        
        public function pedidoErroneo(){
            echo '<div class="alert alert-warning" role="alert">
                    Todos nuestros cadetes estan ocupados, intente mas tarde
                  </div>';
        }
    }
    
    ?>


 