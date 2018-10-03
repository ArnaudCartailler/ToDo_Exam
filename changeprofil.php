<?php

session_start();

require 'config.php';


    if($_POST['pseudo'] != $_SESSION['pseudo']){

      $diffPseudo = true;

    }

    if($POST['pass1'] != $_POST['pass']){

      $diffOldPass = true;
    }

    if($_POST['pass'] == $_POST['pass3']){

      $diffPass = true;

    }

      if ( $diffPseudo AND $diffPass AND $diffOldPass){

        $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);

          $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

          $req = $bdd->prepare('SELECT * FROM members WHERE pseudo = :pseudo');

          $req->execute(array(
            'pseudo' => $_SESSION['pseudo'],
            'pass' => $_POST['pass']
          ));

          $received = $req->fetch();

          if(!empty($_POST['pseudo'])){

              $req = $bdd->prepare('UPDATE members SET pseudo = :pseudo, pass = :pass WHERE pseudo = :oldpseudo');
              $req->execute(array(
              'pseudo' => $_POST['pseudo'],
              'pass' => $pass_hache,
              'oldpseudo' => $_SESSION['pseudo']
              ));

                  echo 'Done';
                  header('Refresh:1; URL=connexion.php');
                  session_destroy();
                  unset($bdd);

        }

             else{

                echo 'Incorrect';
                header('Refresh:1; URL=profil.php');

          }

}
