<?php

include('header.php');

require 'config.php';

$list = $_GET['list'];

$det = $bdd->prepare('SELECT * FROM task WHERE id_list = :list');

$det->execute(array(
  'list'=> $list
));

$task = $det->fetchAll();

?>

<form class="form_project" action="add_task.php?list=<?php echo $_GET['list'] ?>" method="post">

  <p>Task Name</p>

  <input type="text" name="name" placeholder="name" required/>

  <p>Limit Date</p>

  <input type="date" name="date_limit" required/>

  <input class="sub" type="submit"name="valid" value="Send"/>

</form>

<!--For the task-->

<div class="detail_task">


<?php foreach($task as $key => $value){ ?>
   <p><?php echo $value['name'] ?><?php echo $value['date_limit'] ?></p>

   <?php
 }

 ?>
</div>

<?php

include('footer.php');


 ?>
