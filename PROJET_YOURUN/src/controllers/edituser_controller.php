<?php

$pdo = getConnect();
$manager = new \Authentification\Usersmanager($pdo);

// on récupère les données d'un utilisateur
$user = $manager->getUser((int) $_GET['id']);

// on update les données de l'utilisateur
$edituser = $manager->editUser($user);

// chemin vers la page affichée sur le navigateur
require_once realpath('public\views\edituser.php');

?>