$('document').ready(function(){

    let dia = 1;
    let materiaAcutual = "";
    $('#js-dia').change(function(event) {
        dia = event.target.value;
        cargarAlumnos(materiaAcutual);
    });

    $('.js-materia-btn').click(function(){
        let materia = $(this).val();
        materiaAcutual = materia;
        cargarAlumnos(materia);
    });



    function grabarAsistencia(e, materia){

        let idAlumno = e.target.id.split("-")[1];
        $.post('registro/'+idAlumno+'/'+materia+'/'+dia, function(response) {
            console.log('Cargado ok');
        }).done(function(){
            cargarAlumnos(materia);
        });
    }

    function cargarAlumnos(materia) {
        $.get('alumnos/'+materia+'/'+dia, function(response){
            let contenedor = $('.js-contenedor-alumnos');
            contenedor.html(response);
            contenedor.find('.js-grabar-asistencia').click(function(e){
                grabarAsistencia(e,materia);
            });
        });
    }

});


