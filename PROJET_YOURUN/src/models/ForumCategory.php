<?php
namespace Community;

class ForumCategory {
    private int $id;    
    private string $category_name;

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

    public function setCategory_name($category_name) {
        $this->category_name = $category_name;
    }

// les getters

    public function getId() {
        return $this->id;
    }

    public function getCategory_name() {
        return $this->category_name;
    }
}
?>