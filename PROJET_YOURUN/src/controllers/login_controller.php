<?php

// on requiert la fonction de connection de l'utilisateur
require_once 'C:\laragon\www\PROJET_YOURUN\src\functions\function_login.php';

// on vérifie dans la base de données les données de l'utilisateur
$error = null;
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    // var_dump($email);
    // var_dump($password);
    $connect = getConnect();
    $request = $connect->prepare('SELECT * FROM users WHERE email = :email');
    $request -> bindValue('email', $email);
    $request -> bindValue('password', $password);
    $request->execute(
        [
        'email' => $_POST['email'],
        // 'password' => $_POST['password']        
        ]
    );
$resultUser = $request->fetch(PDO::FETCH_ASSOC);

// connection de l'utilisateur en fonction des données avec la base de données
if ($resultUser) {
    $passwordHash = $resultUser['password'];    
    if (password_verify($password, $passwordHash)){
        $_SESSION['connecté'] = 1;
        header('Location: index.php?page=home');
        exit;
        // $error = "Vous êtes connecté";
    }else{
        $error = "Identifiants incorrects";
    }};
}

// chemin vers la page affichée sur le navigateur   
require_once realpath('public\views\login.php');

?>