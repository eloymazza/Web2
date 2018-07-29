<ol>
    {assign var="date" value=date('Y')}
    {foreach from=$trees item=$tree}
        <li>
            <div>
                <span>Especie: {$tree['nombre']}</span>
            </div>
            <div>
                <span>Edad: {$date - $tree['anio_plantado']}</span>
            </div>
            <div>
                <span>Descripcion: {$tree['descripcion']}</span>
            </div>
            <div>
                <span>
                {if  {$tree['flag']}}
                    Esta señalizado
                {else}
                    No esta señalizado
                {/if}
                </span>
            </div>
        </li>
    {/foreach}
</ol>