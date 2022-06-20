<?php

$pdo = getConnect();
$manager = new \Authentification\Usersmanager($pdo);

// On autorise l'utilisateur a envoyer le formulaire via la méthode POST
if (isset($_POST['nickname'])) {
    // on crée le nouvel utilisateur
    $user = new \Authentification\Users(
        [
            'name' => $_POST['name'],
            'firstname' => $_POST['firstname'],            
            'nickname' => $_POST['nickname'],
            'email' => $_POST['email'],
            'age' => $_POST['age'],
            'city'=> $_POST['city'],
            'bio'=>$_POST['bio']            
            ]
        );
        
        //   on envoie le nouvel utilisateur créé en base de données
        if ($user->profilUpdated()) {            
            $userManager->editProfil($user);
            echo 'Profil mis à jour!';
        } else {
            $errors = $user->getErrors();
        }
}

// chemin vers la page affichée sur le navigateur
require_once realpath('public\views\profil.php');

?>