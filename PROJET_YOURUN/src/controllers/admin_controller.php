<?php

$pdo = getConnect();
$manager = new \Authentification\Usersmanager($pdo);

// chemin vers la page affichée sur le navigateur
require_once realpath('public\views\admin.php');

?>