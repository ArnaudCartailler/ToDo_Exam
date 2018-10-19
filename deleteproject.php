<?php

session_start();

require('config.php');


  if (!empty($_SESSION['id'])) {

    $removeproject = $bdd->exec("DELETE FROM project WHERE id =" . $_GET['project'] . "");

    echo "Project deleted";

    header('Refresh:1; URL=index.php?id=<?php echo $_SESSION['id'] ?>');

  } else {

    echo "Project not deleted";

    header('Refresh:1; URL=index.php?id=<?php echo $_SESSION['id'] ?>');

}
