<?php

// ajout d'une catégorie dans le forum
if (isset($_POST['category_name'])) {
    $forumCategory = new \Community\ForumCategory([
        'category_name' => $_POST['category_name'],        
    ]);    
    // var_dump($forumCategory);    
    $categoryManager->insert($forumCategory);    
}

// chemin vers la page affichée sur le navigateur
require_once realpath('public\views\add_forum_categories.php');

?>