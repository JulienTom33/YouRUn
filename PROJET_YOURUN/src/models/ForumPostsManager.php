<?php
namespace Community;

require_once 'src\models\ForumPosts.php';
require_once realpath('src\database\database.php');

class ForumPostsManager {

    // Une fonction qui crée un post dans une catégorie du forum
    public function insert(ForumPost $forumPosts){
        $connect = getConnect();
        $request = $connect->prepare('INSERT INTO forum_posts(category_id, post_name, post_content) VALUES (:category_id, :post_name, :post_content)');
        $request->bindvalue(':category_id', $forumPosts->getCategory_id());
        $request->bindvalue(':post_name', $forumPosts->getPost_name());        
        $request->bindvalue(':post_content', $forumPosts->getPost_content());
        $request->execute();
        header('Location: index.php?page=forum');
        exit;
    }
}
?>