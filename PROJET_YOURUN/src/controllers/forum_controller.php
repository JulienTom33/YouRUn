<?php

$pdo = getConnect();

// on récupère les catégories dans la base de données pour les afficher
$request = $pdo->query('SELECT * FROM forum_categories');
$categories = $request->fetchAll();

// on récupère les posts dan sla base de données pour les afficher
$request = $pdo->query('SELECT * FROM forum_posts');
$posts = $request->fetchAll();

// chemin vers la page affichée sur le navigateur
require_once realpath('public\views\forum.php');

?>