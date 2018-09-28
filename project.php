<?php

session_start();
require 'config.php';
include('header.php');

$req = $bdd->prepare('SELECT * FROM project WHERE id = :id');
$req->execute(array($_GET['project']));
$project = $req->fetch();


?>



  <div class="list col-md-6 col-xs-12 d-flex mt-3 text-justify">
      <div class="list_name">

      <ul>
        <li><?php echo $project['name'] ?></li>
        <li><?php echo $project['summary'] ?></li>
        <li><?php echo $project['limit_date'] ?></li>
        <li><?php echo $project['done'] ?></li>

          <form class="trash" action="deleteproject.php?project=<?php echo $value['id'] ?>" method="post">
            <input class="trashin" type="submit" value="&#10007;">
          </form>

      </ul>
    </div>
  </div>


</div>
</div>

<?php
$project->closeCursor();
?>


<div class="container-fluid my-5">
  <div class="row">

    <div class="add col-md-6 col-sm-6 mx-auto text-center mb-2">
      <a class="form_list" href="form_list.php"><i class="fas fa-plus-circle"></i></a>
    </div>

  </div>
</div>

<?php



include('footer.php');

 ?>
