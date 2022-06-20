<!-- PAGE DE SUPPRESSION D'UN UTILISATEUR -->

<div class="registration">
  <h2 class="registration__title">Supprimer l'utilisateur</h2>
  <form method="POST">            
    <input type="text" name="name" value="<?=$user->getName()?> ">            
    <input type="text" name="firstname" value="<?=$user->getFirstname() ?>">
    <input type="text" name="nickname" value="<?=$user->getNickname() ?>">                       
    <input type="email" name="email" value="<?=$user->getEmail() ?>">
    <input type="text" name="age" value="<?=$user->getAge() ?>">
    <input type="text" name="city" value="<?=$user->getCity() ?>">
    <textarea type="text" name="bio"><?=$user->getBio() ?></textarea> 
    <input name="submit" type="submit" value="Delete">            
  </form>      
</div>
   
     