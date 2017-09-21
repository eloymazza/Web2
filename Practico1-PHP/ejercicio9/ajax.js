
$(window).click(function(event){
    let type = event.target.type;
    if(type == "button"){
        enviarDatos("&op=" + event.target.id);
    };
});

function enviarDatos(operacion){
    let serializedData =  $("form").serialize();
    serializedData+= operacion;
    console.log(serializedData);
    $.post("calculadora.php", serializedData, function(response){
        $("#response").html(response);
    });
}

