<div class="container">
  <div class="row mb-3 mt-2">
    <div class="col-md-4 ">
      <div class="row">
        <div class="col-md-12 ">
          <div class="center simple-border bg-primary mb-2">
            <h3 class="custom-font">Juego</h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 ">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/{$imagen['nombre']}" alt="{$imagen['alt']}">
            <div class="card-body">
              <h5 class="card-title">{$juego['nombre']}</h5>
              <p class="card-text">{$juego['descripcion']}</p>
              <div class="row">
                <div class="col-md-12 center mb-2">
                  <bitton  class="btn btn-primary">Ingresar Apuesta</bitton>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 center">
                  <input type="number" class="number-input-juego" placeholder="Apuesta"></input>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="center simple-border bg-primary mb-2">
        <h3 class="custom-font">Apuestas</h3>
      </div>
      <div class="card" style="width: 18rem;">
        <div class="card-body ">
          <h4>Vista clasica:</h4>
          {include file="templates/tablaApuestas.tpl"}
        </div>
      </div>
    </div>
  </div>
</div>
