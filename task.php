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

<a href="project.php?project=<?php ?>"
  
<form class="form_project" action="add_task.php?list=<?php echo $_GET['list'] ?>" method="post">

  <p>Task Name</p>

  <input type="text" name="name" placeholder="name" required/>

  <p>Limit Date</p>

  <input type="date" name="date_limit" required/>

  <input class="sub" type="submit"name="valid" value="Send"/>

</form>

<!--For the task-->

<div class="detail_task">

  <p> Click on a task to modify it </p>

  <ul>
<?php foreach($task as $key => $value){

  if($value['done'] == 0){

     $task_real = 'Non fait';

  }if($value['done'] == 1){

     $task_real = 'Fait';
  }

?>

   <a href="modify_taskform.php?task=<?php echo $value['id'] ?>&amp;list=<?php echo $_GET['list'] ?>"><li><?php echo $value['name'] . ' ' . ' /' . ' ' . $value['date_limit'] . ' ' .  '/' . ' ' . $task_real ?></li></a>

   <?php
 }

 ?>
</ul>
</div>

<?php

include('footer.php');


 ?>
