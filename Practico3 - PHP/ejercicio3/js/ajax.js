$('document').ready(function(){

    $('.js-materia-btn').click(function(){

        let materia = $(this).val();

        $.get('alumnos/'+materia, function(response){
                $('.js-contenedor-alumnos').html(response);
        });

    });

});


