<?php

// on ajoute un article au blog
if (isset($_POST['article_name'])) {
    $blog = new \Community\Blog([
        'article_name' => $_POST['article_name'],
        'article_content' => $_POST['article_content']
    ]);    
    // var_dump($blog);     
    $blogManager->insert($blog);    
}

// on affiche un article du blog
$pdo = getConnect();     
$request = $pdo->query('SELECT * FROM blog_articles');
$articles = $request->fetchAll();

// chemin vers la page affichée sur le navigateur
require_once realpath('public\views\blog.php');

?>