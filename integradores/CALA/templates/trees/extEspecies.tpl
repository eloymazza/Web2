<ol>
    {assign var="date" value=date('Y')}
    {foreach from=$extEspecies item=$extEspecie}
        <li>
            <div>
                <span>Especie: {$extEspecie['nombre']}</span>
            </div>
            <div>
                <span>Descripcion: {$extEspecie['descripción']}</span>
            </div>
        </li>
    {/foreach}
</ol>