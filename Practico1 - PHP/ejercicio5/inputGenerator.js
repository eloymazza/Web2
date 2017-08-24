let cant = prompt("Elija Cantidad de Inputs");
let input;
let form = document.getElementById("formulario");
for (let i = 0; i < cant; i++) {
   input = document.createElement("input");
   input.name = i;
   form.appendChild(input);
}