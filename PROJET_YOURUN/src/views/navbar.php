<!-- NAVBAR -->

<!-- on requiert la fonction de login pour afficher le menu du profil quand l'utilisateur est connecté -->
<?php
require_once 'C:\laragon\www\PROJET_YOURUN\src\functions\function_login.php';
?>

<nav class="navbar">

  <!-- Menu burger  -->
  <div id="menu__burger" class="menu__burger">
    <span></span>
    <div id="menu" class="menu">
      <ul>
        <li><a href="index.php?page=home">Home</a></li>
        <li><a href="index.php?page=meet">Les Rendez-v'YouRun</a></li>
        <li><a href="index.php?page=forum">La Commu'YouRun</a></li>
        <li><a href="index.php?page=blog">Blog</a></li>
        <li><a href="index.php?page=login">Se connecter</a></li> 
        <li><a href="index.php?page=registration">S'inscrire</a></li>
        <?php if(isConnected()): ?>        
        <li><a href="index.php?page=logout">Se déconnecter</a></li> 
        <?php endif ?>
      </ul>
    </div>
  </div>

  <!-- Logo YouRun -->
  <div class="menu__logo">    
    <h1>YouRun</h1>
  </div>
  
  <!-- Apparition de l'onglet profil si connecté -->
  <div class="menu__profil">
  <?php if(isConnected()): ?>    
    <i class="fa-solid fa-person-running"><a href="index.php?page=profil">Profil</a></i>      
  <?php endif ?>
  </div>

</nav>


