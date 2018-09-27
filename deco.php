<?php

session_start();

echo 'Vous êtes déconnecté ' . $_SESSION['pseudo'];

$_SESSION = array();

session_destroy();

setcookie('login', '');

setcookie('pass_hache', '');

header('Refresh:1; URL=index.php');

?>
