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

      <ul class="detail_project">
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

<div class="container-fluid">
 <div class="row">

<?php foreach($list as $key => $value){ ?>
 <div class="column col-md-6 col-xs-12 d-flex mt-3 text-justify">
     <div class="column_name">

     <ul class="detail_list">
       <li><?php echo $value['name'] ?></li>
       <li><?php echo $list_real ?></li>
     </ul>

   </div>
 </div>

 <?php

}

?>

</div>
</div>

<?php


include('footer.php');

 ?>
