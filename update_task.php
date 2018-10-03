<?php

session_start();

require 'config.php';


if(!empty($_POST['done'])){

    $req = $bdd->prepare('UPDATE task SET done = 1 WHERE id = :id_task');
    $req->execute(array(
    'id_task' => $_GET['task']
    ));

        echo 'Task done';
        header("Refresh:1; URL=task.php?list=" . $_GET['list'] ."&project=" . $_GET['project'] ."");
        unset($bdd);

}

   else{

     $req = $bdd->prepare('UPDATE task SET done = 0 WHERE id_list = :id_list');
     $req->execute(array(
       'id_list' => $_GET['list']
     ));

       echo "task don't change";
       header("Refresh:1; URL=task.php?list=" . $_GET['list'] . "&project=" . $_GET['project'] ."");
       unset($bdd);
}
