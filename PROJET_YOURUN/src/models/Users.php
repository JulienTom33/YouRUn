<?php
namespace Authentification;

// on crée une classe Users qui va être notre nouvel utilisateur
class Users {
    private $errors = [];
    private int $id;
    private string $name;
    private string $firstname;    
    private string $email;
    private string $password;
    private string $nickname;
    private int $age;
    private string $city;
    private string $bio;   
          


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
        if(!empty($id)){
            $this->id = (int) $id;
        }
    }

    public function setName($name) {                       
        $this->name = $name;
    }       
    
    public function setFirstname($firstname) {           
        $this->firstname = $firstname;
    }

    public function setEmail($email) {           
        $this->email = $email;
    }       

    public function setPassword($password) {                     
        $this->password = $password;
    }      

    public function setNickname($nickname) {            
        $this->nickname = $nickname;
    }                

    public function setAge($age) {                                  
        $this->age = $age;
    }             

    public function setCity($city) {                             
        $this->city = $city;
    }      
        
    public function setBio($bio) {           
        $this->bio = $bio;
    }        

    // les getters
    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getFirstname() {
        return $this->firstname;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getNickname() {
        return $this->nickname;
    }

    public function getAge() {
        return $this->age;
    }

    public function getCity() {
        return $this->city;
    }

    public function getBio() {
        return $this->bio;
    }

    public function getErrors() {
        return $this->errors;
    }

      
    // fonction qui va vérifier si les inputs sont valides
    public function isUserValid() {
        // return true
        return !(empty($this->name) || empty($this->firstname) || empty($this->nickname) || empty($this->email) || empty($this->password) || empty($this->age) || empty($this->age) || empty($this->city) || empty($this->bio)) ;
    }

    // fonction qui va signaler à l'utilisateur que le profil est mis à jour
    public function profilUpdated() {
        // return true
        return !(empty($this->nickname) || empty($this->name) || empty($this->firstname) || empty($this->age) || empty($this->city) || empty($this->bio));
    }
}

?>