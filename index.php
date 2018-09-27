<?php

include('header.php');

require 'config.php';

?>

<div class="container-fluid my-5">
  <div class="row">

    <?php foreach($products as $key => $value){ ?>

      <div class="project col-md-6 col-sm-6">
        <a class="link_project" href="project.php?index=<?php echo $key; ?>"></a>
      </div>

      <div class="add_project col-md-6 col-sm-6">
        <a class="form_project" href="form_project.php?index=<?php echo $key; ?>"></a>
      </div>

      <?php

      }

      ?>

  </div>
</div>

<?php

include('footer.php');

 ?>
