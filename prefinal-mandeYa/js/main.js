$('document').ready(function(){

    let stateArray = ['asignado','en-envio','enviado'];

    $.ajax({
        'url': 'index',
        'mehtod': 'GET',
        'success': function(data){
            $('.main-content').html(data);
        },
        'error': function(e){
            console.log(e);
        }
    }).done(activarHandlers);

    // Mejorar
    $.get('pedidosEnEspera', '', function(pedidos){
        let html = '';
        for(let pedido of pedidos){
            html += '<tr><th>'+ pedido.destino +'</th><th>'+pedido.fecha+'</th><th>'+pedido.precio+'</th><th>'+pedido.nombre+'</th></tr>'; 
        }          
        $('.js-pedidos-pendientes').html(html);
    });

    $.get('getMandaderos','',function(mandaderos){
        let html = '';
        for(let mandadero of mandaderos){
            html += '<option value="'+mandadero.id_M+'">'+ mandadero.nombre +'</option>'; 
        }          
        $('.js-opciones-mandaderos').html(html);
    });

    function activarHandlers(){
        $(".js-pedido").submit(function(e){
            e.preventDefault();
            tomarPedido($(this));
        });
        $(".js-confirmar-dia-elegido").click(function(){
            let diaElegido = $(".js-dia-elegido");
            if(diaElegido.val() == ''){
                alert("Debes elegir un dia");
            }
            else{
                let fecha = diaElegido.serialize();
                getCantPedidosEnviados(fecha);
            }
        });
        $(".js-confirmar-mes-elegido").click(function(){
            let mesElegido = $(".js-mes-elegido");
            if(mesElegido.val() == ''){
                alert("Debes elegir un mes");
            }
            else{
                let mes = mesElegido.serialize();
                getRankingMandaderos(mes);
            }
        });
        $(".formIngresosDia").submit(function(e){
            e.preventDefault();
            let dia = $(this).serialize();
            getIngresosDia(dia);
        });
        $(".js-mostrar-pedidos").click(function(){
            let id_mandadero = $(".js-opciones-mandaderos").val();
            getPedidos(id_mandadero);
        });

    }

    function getIngresosDia(dia) {

        $.get('ingresosPorDia', dia, function(respuesta){
            $('.js-ingresos').html(respuesta + " $");
        });
    }

    function tomarPedido(form){
        let data = form.serialize();
        $.post('tomarPedido',data, function(result){
            $('.js-exito-pedido').html(result.mensaje);
            $('.js-pedido')[0].reset();
            let pedido = result.ultimoPedido;
            let html = '<tr><th>'+ pedido.destino +'</th><th>'+pedido.fecha+'</th><th>'+pedido.precio+'</th><th>'+pedido.nombre+'</th></tr>';
            $('.js-pedidos-pendientes').append(html); 
        });
    }

    function getCantPedidosEnviados(fecha){
        $.get('getPedidosRealizados',fecha, function(respuesta){
            $(".js-cantidad-pedidos").html(respuesta);
        });
    }

    function getRankingMandaderos(mes){
        $.get('getRankingMandaderos',mes, function(mandaderos){
            let html = '';
            for(let mandadero of mandaderos){
                html += '<li>'+mandadero.nombre+' con ' + mandadero.cantPedidos + ' pedidos enviados</li>';
            }
            $(".js-ranking").html(html);
        });
    }

    function getPedidos(id_mandadero){    
        let data = {
            'idMandadero' : id_mandadero
        }
        $.get('getPedidos',data, function(pedidos) {
            let html = '';
            for(let pedido of pedidos){
                let estado = stateArray[pedido.estado-1];
                html += '<tr><th>'+ pedido.destino +'</th><th>'+pedido.fecha+'</th><th>'+pedido.precio+'</th><th><img src="css/images/'+estado+'.png" alt="'+estado+'"></th></tr>';
            }
            $(".js-tabla-pedidos").html(html);
        });
    }
});
