<?php
namespace Community;

class ForumPost{
    private int $id;
    private int $category_id;
    private string $post_name;
    private string $post_content;

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
    public function setCategory_id($category_id) {
        $this->category_id = $category_id;
    }

    public function setPost_name($post_name) {
        $this->post_name = $post_name;
    }

    public function setPost_content($post_content) {
        $this->post_content = $post_content;
    }

// les getters
    public function getCategory_id() {
        return $this->category_id;
    }

    public function getPost_name() {
        return $this->post_name;
    }

    public function getPost_content() {
        return $this->post_content;
    }
}

?>