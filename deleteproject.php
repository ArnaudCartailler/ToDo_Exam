<?php

session_start();

require('config.php');

//Take project id form the correct user and delete it


  if (!empty($_SESSION['id'])) {

    $removeproject = $bdd->exec("DELETE FROM project WHERE id =" . $_GET['project'] . "");

    echo "Project deleted";

    header('Refresh:1; URL=index.php?id=<?php echo $_SESSION['id'] ?>');

  } else {

    echo "Project not deleted";

    header('Refresh:1; URL=index.php?id=<?php echo $_SESSION['id'] ?>');

}
