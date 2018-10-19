<?php

session_start();

require 'config.php';


if(!empty($_POST['done'])){

    $req = $bdd->prepare('UPDATE task SET done = 1 WHERE id = :id_task');
    $req->execute(array(
    'id_task' => $_GET['task']
    ));

        echo '<img class="loading m-5" src="img/ping.gif">Task done';
        header("Refresh:1; URL=task.php?list=" . $_GET['list'] ."&project=" . $_GET['project'] ."&id=" . $_SESSION['id'] ."");
        unset($bdd);

}

   else{

     $req = $bdd->prepare('UPDATE task SET done = 0 WHERE id_list = :id_list');
     $req->execute(array(
       'id_list' => $_GET['list']
     ));

       echo '<img class="loading m-5" src="img/ping.gif">task not changed';
       header("Refresh:1; URL=task.php?list=" . $_GET['list'] . "&project=" . $_GET['project'] ."&id=" . $_SESSION['id']   ."");
       unset($bdd);
}
