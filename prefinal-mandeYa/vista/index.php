<?php

    include_once('vista/vista.php');

    class Index extends Vista{

        function __construct(){
            parent::__construct();
        }

        public function mostrarIndex(){
            
        echo '  <div class="row justify-content-between">
                    <div class="col-md-3 form-border pt-1 pb-3">
                        <h3>Solicitar Mandado</h3>
                        <form class="js-pedido">
                            <div class="form-group">
                                <label for="destino">Destino</label>
                                <input type="number" name="destino" value="4" class="form-control" id="destino" placeholder="1-100" min="0" max="100" required>
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
                        <div class="row">
                            <div class="col-md-12">
                                <div class="bg-success js-exito-pedido">
                            </div>
                        </div>
                    </div> 
                    </div>
                    <div class="col-md-4 form-border pt-1 pb-3">
                        <h3> Pedidos </h3>
                        <h5> Pedidos en espera:</h5>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                <th scope="col">Destino</th>
                                <th scope="col">Fecha</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Nombre Mandadero</th>
                                </tr>
                            </thead>
                            <tbody class="js-pedidos-pendientes">
                                
                            </tbody>
                        </table>
                        <h5>Cantidad Pedidos Realizados</h5>
                        <div class="row">
                            <div class="col-md-5">
                                <input class="form-control js-dia-elegido" name="diaElegido" value="" type="date" placeholder="seleccione Fecha" id="dia" required>
                            </div>
                            <div class="col-md-3">
                                <button class="js-confirmar-dia-elegido">Confirmar</button>
                            </div>
                            <div class="col-md-4">
                                <div class="ml-1">Resultado:<span class="js-cantidad-pedidos"></span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 form-border pt-1 pb-3">
                        <h3> Mandaderos </h3>
                        <h5> Ranking Mandaderos</h5>
                        <div class="row">
                            <div class="col-md-7">
                                <select class="form-control js-mes-elegido" name="mesElegido" value=""  min=1 max=12 placeholder="seleccione Mes" id="mes" required>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="col-md-5">
                                <button class="js-confirmar-mes-elegido">Confirmar</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 offset-md-1">
                                <div class="ml-2">Resultado:</div>
                                <ol class="js-ranking">
                                </ol>
                            </div>
                        </div>
                        <h5> Ingresos por dia</h5>
                        <div class="calendario">
                            <form class="formIngresosDia">
                                <h6>Ultimo mes: <span>'.date('F').'</span></h6>
                                <label for="diaIngresos">Elige un dia</label>
                                <input type="number" name="diaIngresos" value="1" id="diaIngresos" min="1" max="28">    
                                <button type="submit">Elegir</button>
                            </form>
                        </div>
                        <div>
                            Ingresos Totales: <span class="js-ingresos"> </span>
                        </div> 
                        <h5>Lista de Pedidos</h5>
                        <label for="listaMandadros">Elige un mandadero</label>
                        <select class="js-opciones-mandaderos" id="listaMandaderos" name="idMandadero">
                                
                        </select>
                        <button class="btn btn-primary js-mostrar-pedidos">Elegir</button>
                        <h5>Pedidos</h5>
                        <table class="table table-striped">
                            <tr>
                            <th scope="col">Destino</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Estado</th>
                            </tr>
                            <tbody class="js-tabla-pedidos">
                                
                            </tbody>
                        </table>
                </div>  
            </div>';
        
           
        }

        public function pedidoExitoso(){
            return  '<div class="alert alert-success" role="alert"> Pedido Realizado con exito</div>';
        }
        
        public function pedidoErroneo(){
            echo '<div class="alert alert-warning" role="alert">
                    Todos nuestros cadetes estan ocupados, intente mas tarde
                  </div>';
        }
    }
    
    ?>