<?php

session_start();

require 'config.php';

include('header.php');

$project = $bdd->query('SELECT * FROM project WHERE id_members = ' . $_SESSION["id"] .'');

?>

<div class="welcome">
  <p> Bonjour<?php echo ' '.$_SESSION['pseudo'] ?></p>
</div>

<div class="container-fluid my-5">
  <div class="row">

    <div class="add_project col-md-6 col-sm-6 mx-auto text-center mb-2">
      <a class="form_project" href="form_project.php"><i class="fas fa-plus-circle"></i></a>
    </div>

  </div>
</div>

<div class="container-fluid">
  <div class="row">

    <?php foreach($project as $key => $value){ ?>

      <div class="project col-md-6 col-xs-12 d-flex text-center justify-content-center">
        <a class="link_project" href="project.php?project="<?php echo $value['id'] ?>"">
          <div class="project_name">
            <p><?php echo $value['name'] ?></p>
            <p><?php echo $value['limit_date'] ?></p>

            <div class="trash">
              <a href="" class="trash"><i class="fas fa-trash"></i></a>
            </div>

        </div>
        </a>
      </div>

      <?php

      }

      ?>

  </div>
</div>


<?php

include('footer.php');

 ?>
