  <?php

  session_start();

    require 'config.php';

    include('header.php');


$req = $bdd->prepare('SELECT * FROM members WHERE pseudo = :pseudo');

$req->execute(array(
  'pseudo' => $_POST['pseudo']
));

$resultat = $req->fetch();

$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);


if($isPasswordCorrect){

 $_SESSION['pseudo'] = $_POST['pseudo'];
 $_SESSION['id'] = $resultat['id'];
 $_SESSION['admin'] = $resultat['admin'];

  echo '<img class="loading m-5" src="img/ping.gif"> Back Home !';
  header('Refresh:1; URL=index.php');

} else {

  echo "Acces Denied";
    header('Refresh:1; URL=connexion.php');

}

?>

<?php include('footer.php') ?>
