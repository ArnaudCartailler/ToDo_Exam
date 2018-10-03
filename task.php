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

<div class="container-fluid ">
  <div class="row">

    <div class="form col-md-6">

      <form class="form_project" action="add_task.php?list=<?php echo $_GET['list'] ?>&project=<?php echo $_GET['project'] ?>" method="post">

        <p>Task Name</p>

        <input type="text" name="name" placeholder="name" required/>

        <p>Limit Date</p>

        <input type="date" name="date_limit" required/><br />

        <input class="sub" type="submit"name="valid" value="Send"/>

      </form>

  </div>

<!--For the task-->

<div class="detail_task col-md-6">

  <p> Click on a task to modify it :</p>

  <ul>
<?php foreach($task as $key => $value){

  if($value['done'] == 0){

     $task_real = 'Not done';

  }if($value['done'] == 1){

     $task_real = 'Done';
  }

?>

   <a href="modify_taskform.php?task=<?php echo $value['id'] ?>&amp;list=<?php echo $_GET['list'] ?>&amp;project=<?php echo $_GET['project'] ?>"><li><?php echo $value['name'] . ' ' . ' /' . ' ' . $value['date_limit'] . ' ' .  '/' . ' ' . $task_real ?></li></a>
   <form class="trash" action="deletetask.php?task=<?php echo $value['id'] ?>&amp;list=<?php echo $_GET['list'] ?>&amp;project=<?php echo $_GET['project'] ?>" method="post">
     <input class="trashin" type="submit" value="&#10007;">
   </form>

   <?php
 }

 ?>
</ul>
</div>

</div>
</div>

<a class="back_pro" href="project.php?project=<?php echo $_GET['project'] ?>">Back to Project page</a>

<?php

include('footer.php');


 ?>
