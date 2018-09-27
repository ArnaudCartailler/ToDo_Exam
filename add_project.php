<?php

session_start();


require 'config.php';

if (isset($_POST['name']) AND !empty($_POST['summary']) AND isset($_POST['summary'])){

    $_POST['name'] = htmlspecialchars($_POST['name']);
    $_POST['summ'] = htmlspecialchars($_POST['summary']);


            $stmt = $bdd->prepare("INSERT INTO project(name, summary, limit_date, id_members, done) VALUES (:name, :summary, :limit_date, :id_members, :done)");

            $stmt->execute(array(
              'name' => $_POST['name'],
              'summary' => $_POST['summary'],
              'limit_date' => $_POST['limit_date'],
              'done' => 0,
              'id_members' => $_SESSION['id']
            ));

            ?>

                <div class="redirection">
                    <p> Project added ! </p>
                </div>

            <?php

                header('Refresh:1; URL=index.php');
                unset($bdd);
             }

             else{

               ?>

                     <div class="redirection">
                         <p> Incorrect, try again ! </p>
                     </div>


               <?php

                header('Refresh:1; URL=form_project.php');

             }

?>
