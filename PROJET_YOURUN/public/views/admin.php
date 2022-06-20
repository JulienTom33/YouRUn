<!-- ADMIN -->

<div class="admin">
  <h2 class="admin__title">Administrateur</h2>
  <?php foreach ($manager->getListUsers() as $user) :?>
  <div class="admin__userinfo">
    <p>Nom: <?= $user->getName() ?></p>
    <p>Prénom: <?= $user->getFirstName() ?></p>
    <p>Pseudo: <?= $user->getNickname() ?></p>
    <p>Mail: <?= $user->getEmail() ?></p>
    <p>Age: <?= $user->getAge() ?></p>
    <p>Ville: <?= $user->getCity() ?></p>
    <p>Bio: <?= $user->getBio() ?></p>      
    <a class="admin__button "href="index.php?page=edituser&id=<?= $user->getId() ?>">Editer le profil</a> 
    <a class="admin__button "href="index.php?page=deleteuser&id=<?= $user->getId() ?>">Supprimer le profil</a>
  </div>
  <?php endforeach; ?>
</div>