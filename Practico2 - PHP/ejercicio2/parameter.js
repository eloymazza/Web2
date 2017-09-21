$("#botonCrearCirculo").on("click", function(){

    $.ajax({
        url: "add/"+$("#radio").val(),
        }).done(( function(data) {
        $( document ).html( data );
    });)
});