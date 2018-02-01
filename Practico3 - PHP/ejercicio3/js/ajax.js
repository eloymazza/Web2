$('document').ready(function(){

    $('.js-materia-btn').click(function(){

        let materia = $(this).val();

        $.get('alumnos/'+materia, function(response){
               let contenedor = $('.js-contenedor-alumnos');
               contenedor.html(response);
               contenedor.find('.js-grabar-asistencia').click(grabarAsistencia);
        });

    });


    function grabarAsistencia(){

        let diaElegido = $('.js-selector-dia').val();
        console.log(diaElegido);

    }

});


