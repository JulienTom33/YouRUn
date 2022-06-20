<?php
namespace Authentification;

require_once 'src\models\Users.php';

class UsersManager {

// Une fonction qui crée l'utilisateur
public function insert(Users $user){
    $connect = getConnect();
    $request = $connect->prepare('INSERT INTO users(name, firstname, email, password, nickname, age, city, bio) VALUES (:name, :firstname, :email, :password, :nickname, :age, :city, :bio)');    
    $request->bindvalue(':name', $user->getName());
    $request->bindvalue(':firstname', $user->getFirstname());        
    $request->bindvalue(':email', $user->getEmail());
    $request->bindvalue(':password', $user->getPassword());
    $request->bindvalue(':nickname', $user->getNickname());
    $request->bindvalue(':age', $user->getAge());  
    $request->bindvalue(':city', $user->getCity());
    $request->bindvalue(':bio', $user->getBio()); 
    $request->execute();
}    

// Une fonction qui édite le profil
public function editProfil($user){
    if (isset($_POST['name'], $_POST['firstname'], $_POST['nickname'], $_POST['email'], $_POST['age'], $_POST['city'], $_POST['bio'])){
        $connect = getConnect();
        $edituserProfil = $connect->prepare('UPDATE users SET name = :name, firstname = :firstname, nickname = :nickname, email = :email, age = :age, city = :city, bio = :bio WHERE id = :id');        
        if (isset($_POST['name'], $_POST['firstname'], $_POST['nickname'], $_POST['email'], $_POST['age'], $_POST['city'], $_POST['bio'])){
            $user->setName($_POST['name']);
            $user->setFirstname($_POST['firstname']);
            $user->setNickname($_POST['nickname']);                
            $user->setEmail($_POST['email']);
            $user->setAge($_POST['age']);
            $user->setCity($_POST['city']);
            $user->setBio($_POST['bio']);
        }   
        $edituserProfil->execute([
            'name' => $_POST['name'],
            'firstname' => $_POST['firstname'],
            'nickname' => $_POST['nickname'],                
            'email' => $_POST['email'],
            'age' => $_POST['age'],
            'city' => $_POST['city'],
            'bio' => $_POST['bio'],            
            ]);    
        return $user;
        echo 'Profil modifié !';
   }}

// Une fonction qui récupère tous les utilisateurs
public function getListUsers(){
    $connect = getConnect();
    $requestUsers = $connect->query('SELECT * FROM users');      
    $requestUsers->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Authentification\Users');
    $userData = $requestUsers->fetchAll();    
    return $userData;         
} 

// Une fonction qui sélectionne un utilisateur
public function getUser($id){  
    $connect = getConnect();
    $requestOneUser = $connect->prepare('SELECT * FROM users WHERE id = :id');      
    $requestOneUser->bindvalue(':id', (int) $id, \PDO::PARAM_INT);
    $requestOneUser->execute();
    $requestOneUser->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, '\Authentification\Users');
    $user = $requestOneUser->fetch();
    return $user;   
}

// Une fonction qui édite un utilisateur
public function editUser($user){
    if (isset($_POST['name'], $_POST['firstname'], $_POST['nickname'], $_POST['email'], $_POST['age'], $_POST['city'], $_POST['bio'])){
        $connect = getConnect();
        $edituser = $connect->prepare('UPDATE users SET name = :name, firstname = :firstname, nickname = :nickname, email = :email, age = :age, city = :city, bio = :bio WHERE id = :id');        
        if (isset($_POST['name'], $_POST['firstname'], $_POST['nickname'], $_POST['email'], $_POST['age'], $_POST['city'], $_POST['bio'])){
            $user->setName($_POST['name']);
            $user->setFirstname($_POST['firstname']);
            $user->setNickname($_POST['nickname']);                
            $user->setEmail($_POST['email']);
            $user->setAge($_POST['age']);
            $user->setCity($_POST['city']);
            $user->setBio($_POST['bio']);
        }   
        $edituser->execute([
            'name' => $_POST['name'],
            'firstname' => $_POST['firstname'],
            'nickname' => $_POST['nickname'],                
            'email' => $_POST['email'],
            'age' => $_POST['age'],
            'city' => $_POST['city'],
            'bio' => $_POST['bio'],
            'id' => $_GET['id']
            ]);
        Header('Location: index.php?page=admin');    
        // echo 'Utilisateur modifié!';
        return $user;        
   }}

     // Une fonction qui supprime l'utilisateur
    public function deleteUser($user){
        if(isset($_POST['name'], $_POST['firstname'], $_POST['nickname'], $_POST['email'], $_POST['age'], $_POST['city'], $_POST['bio'])) {  
            $connect = getConnect();
            $cancelUser = $connect->prepare('DELETE FROM users WHERE id = :id');         
            $cancelUser->execute([            
                'id'=>$_GET['id']            
            ]);
            Header('Location: index.php?page=admin');
            // echo 'Utilisateur supprimé!';
            return $user;                
    }}

} 

?>