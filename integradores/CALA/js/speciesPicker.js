window.onload = () => {

    let picker = document.querySelector('#specie_picker')
    let speciesCount = document.querySelector('#speciesCount');

    picker.addEventListener('change', (event) => { 
        let id_especie = event.target.value;
        fetch(`api/species/${id_especie}`).then((response) => (response.json()).then((r)=>{
            speciesCount.innerHTML = r.cantidad;
        }));

    });








};
