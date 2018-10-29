<?php

session_start();

require('config.php');

//Take task id form the correct user and delete it


  if (!empty($_SESSION['id'])) {

    $removetask = $bdd->exec("DELETE FROM task WHERE id =" . $_GET['task'] . "");

    echo '<img class="loading m-5" src="img/ping.gif">task deleted';

    header("Refresh:1; URL=task.php?list=" . $_GET['list'] ."&project=" . $_GET['project'] . "&id=" . $_SESSION['id'] ."");

  } else {

    echo '<img class="loading m-5" src="img/ping.gif">task not deleted';

    header("Refresh:1; URL=task.php?list=" . $_GET['list'] ."&project=" . $_GET['project'] . "&id=" . $_SESSION['id'] ."");

}
