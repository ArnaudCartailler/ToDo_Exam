<?php

session_start();

require 'config.php';

if (isset($_POST['name'])){

    $_POST['name'] = htmlspecialchars($_POST['name']);

            $req = $bdd->prepare("INSERT INTO task(name, id_list, date_limit, done) VALUES (:name, :id_list, :date_limit, :done)");

            $id_list = $_GET['list'];

            $req->execute(array(
              'name' => $_POST['name'],
              'id_list' => $id_list,
              'date_limit' => $_POST['date_limit'],
              'done' => 0
            ));
            ?>

                <div class="redirection">
                    <p> List added ! </p>
                </div>

          <?php


                header("Refresh:1; URL=task.php?list=" . $_GET['list'] ."&project=" . $_GET['project'] . "&id=" . $_SESSION['id'] ."");
                unset($bdd);
             }

             else{

               ?>

                     <div class="redirection">
                         <p> Incorrect, try again ! </p>
                     </div>


               <?php

                header("Refresh:1; URL=task.php?list=" . $_GET['list'] ."&project=" . $_GET['project'] . "&id=" . $_SESSION['id'] ."");

             }

?>
