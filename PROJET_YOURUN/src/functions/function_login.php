<?php

// fonction de démarrage de session lors de la connection de l'utilisateur
function isConnected():bool {
    // si la session n'est pas active, alors je fais un session start
    if(session_status() === PHP_SESSION_NONE) {
        session_start();
    };
    return !empty($_SESSION['connecté']);
}
// var_dump(isConnected());
?>