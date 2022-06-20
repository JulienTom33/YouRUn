<?php
namespace Community;

require_once 'src\models\ForumCategory.php';
require_once realpath('src\database\database.php');

class ForumCategoryManager {

    // Une fonction qui crée une catégorie du forum
    public function insert(ForumCategory $forumCategory){
        $connect = getConnect();
        $request = $connect->prepare('INSERT INTO forum_categories(category_name) VALUES (:category_name)');    
        $request->bindvalue(':category_name', $forumCategory->getCategory_name()); 
        $request->execute();
        header('Location: index.php?page=forum');
        exit;
    }
}
?>