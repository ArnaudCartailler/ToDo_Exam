<?php

session_start();

require('config.php');


  if (!empty($_SESSION['id'])) {

    $removelist = $bdd->exec("DELETE FROM list WHERE id =" . $_GET['list'] . "");

    echo "list deleted";

    header("Refresh:1; URL=project.php?project=" . $_GET['project'] . "&id=" . $_SESSION['id'] ."");

  } else {

    echo "list not deleted";

    header("Refresh:1; URL=project.php?project=" . $_GET['project'] . "&id=" . $_SESSION['id'] ."");

}
