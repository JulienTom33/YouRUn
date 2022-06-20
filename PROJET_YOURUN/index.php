<?php

require_once 'src\models\BlogManager.php';
use \Community\BlogManager;
$blogManager = new BlogManager();

require_once 'src\models\ForumCategoryManager.php';
use \Community\ForumCategoryManager;
$categoryManager = new ForumCategoryManager;

require_once 'src\models\ForumPostsManager.php';
use \Community\ForumPostsManager;
$postsManager = new ForumPostsManager;

require_once 'src\models\UsersManager.php';
use Authentification\UsersManager;
$userManager = new UsersManager();

require_once realpath('src\services\routing.php');
require_once realpath('public\views\layout.php');

?>