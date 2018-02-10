$("form").on("submit", function(event){
  event.preventDefault();
  let formName = this.name;
  let data = $(this).serialize();
  crearFigura(formName,data)
});

function crearFigura(formName,data) {
  $.post(formName+'/'+data, '', function(response){
    console.log(response);
  });
}
