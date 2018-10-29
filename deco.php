<img class="loading m-5" src="img/ping.gif">

<?php

session_start();

echo 'Vous êtes déconnecté ' . $_SESSION['pseudo'];

//User is disconnected and back to index

session_destroy();

header('Refresh:1; URL=index.php');

?>
