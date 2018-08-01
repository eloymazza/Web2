<?php

    class ConfigRoutes {

        public static $ROUTES = [
            ['trees', 'GET', 'TreeApiController', 'getTrees'],
            ['trees/zone', 'GET', 'TreeApiController', 'getTreesByZone'],
            ['species', 'GET', 'TreeApiController', 'getSpecies'],
            ['species/:id', 'GET', 'TreeApiController', 'countSpecies']
        ];
    }

?>