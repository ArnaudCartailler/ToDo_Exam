<?php

session_start();

require 'config.php';


if (isset($_POST['name'])){

    $_POST['name'] = htmlspecialchars($_POST['name']);

            $stmt = $bdd->prepare("INSERT INTO list(name, id_project, done) VALUES (:name, :id_project, :done)");

            $id_project = $_GET['project'];

            $stmt->execute(array(
              'name' => $_POST['name'],
              'id_project' => $id_project,
              'done' => 0
            ));

            ?>

                <div class="redirection">
                    <p> List added ! </p>
                </div>

          <?php


                header("Refresh:1; URL=project.php?project=" . $_GET['project'] . "&list=" . $_GET['list'] ."");
                unset($bdd);
             }

             else{

               ?>

                     <div class="redirection">
                         <p> Incorrect, try again ! </p>
                     </div>


               <?php

                header('Refresh:1; URL=form_list.php');

             }

?>
