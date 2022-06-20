<?php
namespace Community;

require_once 'src\models\Blog.php';
require_once realpath('src\database\database.php');

class BlogManager {

    // Une fonction qui crée l'article du blog
    public function insert(Blog $blog){
        $connect = getConnect();
        $request = $connect->prepare('INSERT INTO blog_articles(article_name, article_content) VALUES (:article_name, :article_content)');    
        $request->bindvalue(':article_name', $blog->getArticle_name()); 
        $request->bindvalue(':article_content', $blog->getArticle_content());
        $request->execute();
    }
}

?>