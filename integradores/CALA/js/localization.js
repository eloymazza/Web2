let zoneForm = document.querySelector('#zoneForm');
let treesByZone = document.querySelector('#treesByZone');

zoneForm.addEventListener('submit', (event) => {
    event.preventDefault();
    let inputs = zoneForm.querySelectorAll('input');
    let data = '';
    for (let i = 0; i < inputs.length; i++){
        let input = inputs[i];
        data+= input.name + '=' + input.value;
        if(i < inputs.length-1){
            data+='&';
        }
    }
    
    fetch('api/trees/zone?' +  data).then((response) => response.json()).then( (trees) => {
        treesByZone.replaceChild(printTrees(trees), treesByZone.childNodes[0])
    });
    
});

function printTrees(trees){

    let contenedor = document.createElement('div');
    let ul = document.createElement('ul');
    let li;
    for (tree of trees){
        li = document.createElement('li');
        li.innerText = 
        `Especie: ${tree.nombre} 
        Latitud: ${tree.latitud}
        Longitud: ${tree.longitud}
        ${(tree.flag == 1) ? 'Señalizado' : 'Sin Señalizar'}`
        ul.appendChild(li);
    }
    contenedor.appendChild(ul);
    return contenedor;
}