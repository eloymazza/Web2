<div class="max-heigth-table">
  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Fecha</th>
      <th scope="col">Monto</th>
    </tr>
  </thead>
  <tbody>
    {foreach from=$apuestas item=$apuesta}
    <tr>
      <td>{$apuesta['fecha']}</td>
      <td>{$apuesta['monto']}</td>
    </tr>
    {/foreach}
  </tbody>
</table>
</div>
