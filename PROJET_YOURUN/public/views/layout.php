<!-- LAYOUT QUI COMPREND LES PARAMETRES ET LES SCRIPTS DE LA PAGE -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="/public/ressources/logo-bleuciel.svg">
    <!-- reset css -->
    <link rel="stylesheet" href="/public/css/normalize.css">
    <!-- style du site  -->
    <link rel="stylesheet" href="/public/css/style.css">
    <!-- style pour openmapstreet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />
    <!-- librairie fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- script du menu burger -->
    <script src="/public/js/navbarburger.js"></script>
    <!-- script de la météo -->
    <script src="/public/js/weather.js"></script>
    <!-- script de la librairie pour la map -->
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin=""></script>
    <!-- script de la map -->
    <script src="/public/js/openstreet.js"></script>
    <title>YouRun</title>
</head>


<!-- Appels de la navbar, du header et du footer -->
<?php
  require 'C:\laragon\www\PROJET_YOURUN\src\views\navbar.php';
  require 'C:\laragon\www\PROJET_YOURUN\src\views\header.php';
  require 'C:\laragon\www\PROJET_YOURUN\src\views\footer.php';  
?>
<!-- Routeur -->
<?php require getRoute() ?>