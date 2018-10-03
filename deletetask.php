<?php

session_start();

require('config.php');


  if (!empty($_SESSION['id'])) {

    $removetask = $bdd->exec("DELETE FROM task WHERE id =" . $_GET['task'] . "");

    echo "task deleted";

    header("Refresh:1; URL=task.php?list=" . $_GET['list'] ."&project=" . $_GET['project'] ."");

  } else {

    echo "task not deleted";

    header("Refresh:1; URL=task.php?list=" . $_GET['list'] ."&project=" . $_GET['project'] ."");

}
