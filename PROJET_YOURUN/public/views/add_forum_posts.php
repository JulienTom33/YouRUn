<!-- AJOUT D'UN POST DANS UNE CATEGORIE DU FORUM -->

<div class="registration">
  <h2 class="registration__title">Nouveau Post</h2>
  <form method="POST">
    <input type="text" placeholder="Ajoute un post" name="post_name">
    <select name="category_id">
      <?php             
        foreach ($categories as $category) : ?>        
          <option value="<?= $category["id"] ?>"><?= $category["category_name"] ?></option>
      <?php endforeach; ?>
    </select> 
    <textarea name="post_content" rows="17" cols="30" placeholder="Contenu du post"></textarea><br />
    <button type="submit" class="registration__button">Ajouter</button>
  </form>
</div>
