<?php

// on crée le nouvel utilisateur
if(isset($_POST['name'])){
    $user = new \Authentification\Users(
                [
                    'name' => $_POST['name'],
                    'firstname' => $_POST['firstname'],            
                    'email' => $_POST['email'],
                    'password' => password_hash( $_POST['password'], PASSWORD_DEFAULT),
                    'nickname' => $_POST['nickname'],
                    'age' => $_POST['age'],
                    'city'=> $_POST['city'],
                    'bio'=>$_POST['bio']
                    ]
                );
                
    if ($user->isUserValid()) {            
        $userManager->insert($user);
        $msg = 'Bienvenue';
        // echo 'Bienvenue!';
        // header('Location: index.php?page=home');
        } else {
            $error = 'Tous les champs doivent être remplis';
    }
}              
   
// chemin vers la page affichée sur le navigateur
require_once realpath('public\views\registration.php');

?>