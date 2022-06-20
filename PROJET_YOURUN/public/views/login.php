<!-- LOGIN -->

<div class="login">
  <h2 class="login__title">Login</h2>           
  <form method="POST" >
    <input type="email" name="email" placeholder="Email">               
    <input type="password" name="password" placeholder="Password">    
    <button type="submit" class="login__button">Go</button> 
  </form> 
</div>

<!-- Message d'erreur si les identifiants ne correspondent pas -->
<?php if(isset($error)): ?>
  <p class="error"><?= $error ?></p>
<?php endif ?> 

<!-- lien vers page admin  -->
<div class="adminPage">
  <a href="index.php?page=admin">Admin</a>
</div>

