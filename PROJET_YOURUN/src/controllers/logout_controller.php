<?php

// fin de la session à la deconnection, on détruit la session puis on redirige vers la page 'home'
session_start ();
session_unset ();
session_destroy ();
header('Location: index.php?page=home');

?>
