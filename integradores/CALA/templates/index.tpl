<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{$title}</title>
</head>
<body>
    <article>
        <section>
            <h1>{$title}</h1>
            <h2>Lista de arboles:</h2>
            {include file="trees/treesList.tpl"}
        </section>
        <section>
            <h2>Cantidad de arboles por especie</h2>
            {include file="trees/species.tpl"}
        </section>
        <section>
            <h2> Lista de arboles sin señalizar: </h2>
            {include file="trees/notFlaggedTrees.tpl"}
        </section>
        <section>
            <h2> Lista de arboles en extincion: </h2>
            {include file="trees/extEspecies.tpl"}
        </section>
        <section>
            <h2> Lista de arboles segun zona elegida: </h2>
            {include file="trees/zonePicker.tpl"}
        </section>
    </article>
</body>
<script src='js/serialize-0.2.min.js'></script>
<script src='js/speciesPicker.js'></script>
<script src='js/localization.js'></script>
</html>