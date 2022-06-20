<!-- FORUM -->

<div class="forum">

  <!-- boutons d'ajout de catégories et de posts -->
  <div class="forum__adds">    
    <a href="index.php?page=add-forum-category">Ajouter une catégorie</a>    
    <a href="index.php?page=add-forum-posts">Ajouter un post</a>
  </div>

  <!-- On affiche les catégories du forum  -->
  <?php
  foreach ($categories as $category) : ?>
    <div class="forum__item">
      <h3><?= ($category['category_name']) ?></h3>

      <!-- On affiche les posts correspondant aux catégories -->
      <div class="forum__post">
        <?php
        foreach ($posts as $post) :
          if ($category['id'] === $post['category_id']) { ?>
            <h4><?= $post['post_name'] ?></h5>
            <p><?= $post['post_content'] ?></p>
          <?php } ?>
        <?php endforeach; ?>
      </div>
    </div>
  <?php endforeach; ?>

</div>