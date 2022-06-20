<?php
namespace Community;

class Blog {
    private int $id;    
    private string $article_name;
    private string $article_content;

    // le constructeur du tableau 
    function __construct($data = []) {           
        $this->hydrater($data);
    }
    
// on crée une fonction qui va hydrater le tableau en fonction de chaque attribut. $data=le tableau, $attribut=attribut du tableau, $value=paramètre de l'attribut
    public function hydrater($data){
        foreach($data as $attribut => $value){
            $settersMethod = 'set'.ucfirst($attribut);
            $this->$settersMethod($value);
        }            
    }    

// les setters

    public function setId($id) {
        $this->id = $id;
    }

    public function setArticle_name($article_name) {
        $this->article_name = $article_name;
    }

    public function setArticle_content($article_content) {
        $this->article_content = $article_content;
    }

// les getters

    public function getId() {
        return $this->id;
    }

    public function getArticle_name() {
        return $this->article_name;
    }

    public function getArticle_content() {
        return $this->article_content;
    }
}
?>