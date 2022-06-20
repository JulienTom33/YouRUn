<!-- BLOG -->

<div class="blog">          
  <div>
    <?php
    foreach ($articles as $article) : ?>
    <div class="blog__article">
      <h3><?= $article['article_name'] ?></h3>         
      <p><?= $article['article_content'] ?></p>
    </div>    
    <?php endforeach; ?>     
  </div>    
</div>

<!-- Ajout d'un article -->
<div class="registration">
  <h2 class="registration__title">Ajouter un article</h2>
  <form method="POST">
    <input type="text" name="article_name" placeholder="Titre" />
    <textarea name="article_content" rows="20" cols="30" placeholder="Contenu de l'article"></textarea>
    <button type="submit" class="registration__button">Publier</button>     
  </form>  
</div> 

 

