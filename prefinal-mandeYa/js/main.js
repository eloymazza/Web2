$('document').ready(function(){

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

    function activarHandlers(){
        $(".js-pedido").submit(function(e){
            e.preventDefault();
            tomarPedido($(this));
        });
    }

    function tomarPedido(form){
        let data =form.serialize();
        $.post('tomarPedido',data, function(success){
            $('.js-exito-pedido').html(success);
            $('.js-pedido')[0].reset();
        });
    }



});

