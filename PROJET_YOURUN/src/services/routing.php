<?php

// on requiert les paramètres des routes créées pour les pages
require_once realpath("src/config/settings.php");

// fonction qui va créer les routes
function getRoute():string {
    $defaultControllerPath = 'src/controllers/';
    $routesName = array_keys(AVAILABLE_ROUTES);
    $path = realpath($defaultControllerPath . AVAILABLE_ROUTES["home"]);

    if (isset($_GET["page"]) && in_array($_GET["page"], $routesName, true)) {
        $path = realpath($defaultControllerPath . AVAILABLE_ROUTES[$_GET["page"]]) ;                
    }
    return $path;
}
?>