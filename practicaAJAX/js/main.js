$('.js-form').on('submit', function(e){

    e.preventDefault();
    //let data = $(this).serialize();
    let data = $(this).find('input').val();
    $.post('numberReceiver/'+ data, function(response){
        $('.dataPlace').append('<p>'+response+'</p>');
    })
});


