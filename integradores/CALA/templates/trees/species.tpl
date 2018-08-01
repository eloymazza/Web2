<select id="specie_picker">
    <option disabled selected>Seleccione una especie</option>
    {foreach from=$species item=$specie}
        <option value="{$specie['id_especie']}">{$specie['nombre']}</option>
    {/foreach}
</select>
<div>
    Cantidad: <span id='speciesCount'></span>
</div>
    