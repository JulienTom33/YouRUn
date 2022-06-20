<!-- REGISTRATION -->

<div class="registration">
  <h2 class="registration__title">Inscription</h2>
  <form method="POST">
    <input type="text" name="name" placeholder="Ton nom...">        
    <input type="text" name="firstname" placeholder="Ton prénom...">      
    <input type="text" name="nickname" placeholder="Ton pseudo..." > 
    <input type="text" name="age" placeholder="Ton âge...">
    <input type="text" name="city" placeholder="Ta ville...">  
    <input type="email" name="email" placeholder="Ton mail...">        
    <input type="password" name="password" placeholder="Ton mot de passe...">   
    <textarea type="text" name="bio" rows="4" cols="30" placeholder="Ta bio..."></textarea>       
    <button type="submit" class="registration__button">Go</button>
  </form>
</div>

<!-- Message d'erreur si les champs ne sont pas tous remplis -->
<?php if(isset($error)): ?>
  <p class="error"><?= $error ?></p>
<?php endif ?>

<!-- Message si l'utilisateur est enregistré -->
<?php if(isset($msg)): ?>
  <p class="welcome"><?= $msg ?></p>
<?php endif ?>
