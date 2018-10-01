<?php

 $project = $_GET['project'];

$stmt = $bdd->prepare('SELECT * FROM list WHERE id_project = '$project'');

$stmt->execute(array(
  'id_project'=> $_GET['project']
));

$list = $stmt->fetch();

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
$list->closeCursor();

 ?>
