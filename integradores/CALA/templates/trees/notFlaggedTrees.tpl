<ol>
    {assign var="date" value=date('Y')}
    {foreach from=$nfTrees item=$nftree}
        <li>
            <div>
                <span>Especie: {$nftree['nombre']}</span>
            </div>
            <div>
                <span>Edad: {$date - $nftree['anio_plantado']}</span>
            </div>
            <div>
                <span>Descripcion: {$nftree['descripcion']}</span>
            </div>
        </li>
    {/foreach}
</ol>