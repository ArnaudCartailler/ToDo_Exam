<?php

require 'config.php';


if (isset($_POST['email']) AND isset($_POST['pseudo'])){

    $_POST['email'] = htmlspecialchars($_POST['email']);
    $_POST['pseudo'] = htmlspecialchars($_POST['pseudo']);

    $req = $bdd->prepare('SELECT pseudo FROM members WHERE pseudo = :pseudo');


    $req->execute(array(
      'pseudo' => $_POST['pseudo']
    ));

    $array = $req->fetch();

    if($POST['pass'] == $_POST['pass2']){
      $diff == false;
    }

      if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']) AND ($array['pseudo'] != $_POST['pseudo']) AND $diff == false){

            $pass_hache = password_hash($_POST['pass'], PASSWORD_DEFAULT);

            $stmt = $bdd->prepare("INSERT INTO members(pseudo, pass, email, date_inscription) VALUES (:pseudo, :pass, :email, NOW())");

            $stmt->bindParam(':pseudo', $_POST['pseudo']);
            $stmt->bindParam(':pass', $pass_hache);
            $stmt->bindParam(':email', $_POST['email']);

            $stmt->execute();

            ?>

                <div class="redirection">
                    <p> Go connexion ! </p>
                </div>

            <?php

                header('Refresh:1; URL=connexion.php');
                unset($bdd);
             }

             else{

               ?>

                     <div class="redirection">
                         <p> Incorrect, try again ! </p>
                     </div>


               <?php
                header('Refresh:2; URL=formmembers.php');

             }
}
