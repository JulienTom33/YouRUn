<?php

// ajout d'un post dans le forum en fonction de la catégorie
if (isset($_POST['post_name'])) {
    $forumPosts = new \Community\ForumPost([
        'post_name' => $_POST['post_name'],
        'post_content' => $_POST['post_content'],
        'category_id' => $_POST['category_id']              
    ]);    
    // var_dump($forumPosts);    
    $postsManager->insert($forumPosts);    
}

// on récupère les catégories dans la base de données pour faire la sélection 
$connect = getConnect();
$request = $connect->query('SELECT * FROM forum_categories');          
$categories = $request->fetchAll(\PDO::FETCH_ASSOC);

// chemin vers la page affichée sur le navigateur
require_once realpath('public\views\add_forum_posts.php');

?>