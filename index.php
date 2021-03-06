<?php

session_start();

require 'config.php';

include('header.php');


$project = $bdd->query('SELECT * FROM project WHERE id_members = ' . $_SESSION["id"] .'');


if(!empty($_SESSION['id'])){


?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>

<div class="welcome p-0 m-0">
  <p> Bonjour<?php echo ' '.$_SESSION['pseudo']; ?></p>
</div>

<div class="container-fluid my-5">
  <div class="row">

    <div class="add col-md-6 col-sm-6 mx-auto  p-0 m-0 text-center mb-2">
      <a class="form_project" href="form_project.php?id=<?php echo $_SESSION['id'] ?>"><i class="fas fa-plus-circle"></i></a>
    </div>

  </div>
</div>

<div class="container-fluid">
  <div class="row">

  <!-- Display all project from the user-->

    <?php foreach($project as $key => $value){ ?>

      <div class="project col-md-4 col-xs-12 d-flex mb-5 text-center justify-content-center">
        <a class="link_project" href=project.php?project=<?php echo $value['id'] ?>&amp;id=<?php echo $_SESSION['id'] ?>>
          <div class="project_name">

            <p><?php echo $value['name']; ?></p>
            <p><?php echo $value['limit_date']; ?></p>

              <form class="trash" action="deleteproject.php?project=<?php echo $value['id'] ?>&amp;id=<?php echo $_SESSION['id'] ?>" method="post">
                <input class="trashin" type="submit" value="&#10007;">
              </form>

        </div>
        </a>
      </div>

      <?php

      }
      ?>

  </div>
</div>


<?php

} else {

  header('Location: connexion.php');

}

include('footer.php');

 ?>
