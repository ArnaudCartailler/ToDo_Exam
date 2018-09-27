  <?php

    include('header.php');

    require 'config.php';


$req = $bdd->prepare('SELECT pseudo, pass FROM members WHERE pseudo = :pseudo');

$req->execute(array(
  'pseudo' => $_POST['pseudo']
));

$resultat = $req->fetch();

$isPasswordCorrect = password_verify($_POST['pass'], $resultat['pass']);

if($isPasswordCorrect){

  session_start();

  $_SESSION['pseudo'] = $_POST['pseudo'];

?>


    <div class="redirection">
        <p> Back Home ! </p>
    </div>


<?php
  header('Refresh:2; URL=index.php');

} else {

  echo "Acces Denied";

}

?>

<?php include('footer.php') ?>
