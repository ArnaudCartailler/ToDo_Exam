<img class="loading m-5" src="img/ping.gif">

<?php

session_start();

echo 'Vous êtes déconnecté ' . $_SESSION['pseudo'];


session_destroy();

header('Refresh:1; URL=index.php');

?>
