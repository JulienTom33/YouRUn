<?php

// on crée des constantes de routes qui vont servir à diriger vers les pages demandées

const AVAILABLE_ROUTES = [   
    'home' => 'home_controller.php',
    'meet' => 'meet_controller.php',
    'blog' => 'blog_controller.php',    
    'forum' => 'forum_controller.php',
    'registration' => 'registration_controller.php',
    'login' => 'login_controller.php',
    'logout' => 'logout_controller.php',
    'profil' => 'profil_controller.php',
    'add-forum-category' => 'forum_category_controller.php',
    'add-forum-posts' => 'forum_posts_controller.php',    
    'admin' => 'admin_controller.php', 
    'edituser' => 'edituser_controller.php',
    'deleteuser' => 'deleteuser_controller.php',     
];

?>