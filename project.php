<?php

session_start();
require 'config.php';
include('header.php');

$req = $bdd->prepare('SELECT * FROM project WHERE id = ?');

$req->execute(array($_GET['project']));
$project = $req->fetch();

if($project['done'] == 0){
  $real = 'Non fait';
}else{
  $real = 'Fait';
}


?>


  <div class="list col-md-6 col-xs-12 d-flex mt-3 text-justify">
      <div class="list_name">

      <ul class="detail_project mb-2">
        <li><?php echo $project['name'] ?></li>
        <li><?php echo $project['summary'] ?></li>
        <li><?php echo $project['limit_date'] ?></li>
        <li><?php echo $real ?></li>

          <form class="trash" action="deleteproject.php?project=<?php echo $value['id'] ?>" method="post">
            <input class="trashin" type="submit" value="&#10007;">
          </form>

      </ul>
    </div>
  </div>


</div>
</div>

<div class="container-fluid my-5">
  <div class="row">

    <div class="add col-md-6 col-sm-6 mx-auto text-center mb-2">
      <a class="form_list" href="form_list.php?project=<?php echo $_GET['project'] ?>"><i class="fas fa-plus-circle"></i></a>
    </div>

  </div>
</div>


<?php

/*For the listing*/

$project = $_GET['project'];

$stmt = $bdd->prepare('SELECT * FROM list WHERE id_project = :project');

$stmt->execute(array(
 'project'=> $project
));

$list = $stmt->fetchAll();

  if($list['done'] == 0){

     $list_real = 'Non fait';

  }else{

     $list_real = 'Fait';
  }

?>

<div class="container-fluid all_listing">
 <div class="row list_row">

<?php foreach($list as $key => $value){ ?>


 <div class="column col-md-4 col-xs-12 d-flex mt-3 text-center">
   <a class="task" href="task.php?list=<?php echo $value['id'] ?>">
     <div class="column_name w-100">

     <ul class="detail_list">
       <li><?php echo $value['name'] . ' ' . '/'. ' ' . $list_real ?></li>
     </ul>

       <div class="detail_task">

         <?php

         /*For the task*/

         $tasklist = $value['id'];

         $det = $bdd->prepare('SELECT * FROM task WHERE id_list = :list');

         $det->execute(array(
           'list'=> $tasklist
         ));

         $task = $det->fetchAll();

?>
        <ul>

      <?php foreach($task as $key => $value_task){

        if($value_task['done'] == 0){

           $task_real = 'Non fait';

        }if($value_task['done'] == 1){

           $task_real = 'Fait';
        }
?>
         <li><?php echo $value_task['name'] . ' ' . '/' . ' ' . $value_task['date_limit'] . ' ' . '/' . ' ' . $task_real ?></li>

         <?php
       }

       ?>
     </ul>
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
