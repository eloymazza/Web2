
$("form").on("submit", function(event){
    event.preventDefault();
    let dataSerializada = $(this).serialize();
    $.ajax({
        "url": "multiplicador.php",
        "method": "POST",
        "dataType": "HTML",
        "data": dataSerializada,
        "success" : function(data){
            $("table").html(data);
        }
    });
});
