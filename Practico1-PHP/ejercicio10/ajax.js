let auto = false;

$("#formulario").on("submit", function(){
    auto = true;
    event.preventDefault();
    let serializedData = $(this).serialize();
    $.post("bascara.php", serializedData, function(response){
        $("#resultado").html(response);
    });
});

$
$("input").change(function(){
    if(auto){
        let serializedData = $("#formulario").serialize();
        $.post("bascara.php", serializedData, function(response){
            $("#resultado").html(response);
        });
    }
});