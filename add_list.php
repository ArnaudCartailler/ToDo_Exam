<?php

require 'config.php';

if (!empty($_POST['name']) AND !empty($_POST['date_limit'])) {

  $name = htmlspecialchars($_POST['name']);
  $date_limit = htmlspecialchars($_POST['date_limit']);

  if ($name, $date_limit)) {
    $newtask = $bdd->prepare("INSERT INTO list (name, date_limit, done, id_project) VALUES (:name, :date_limit, :done, :id_project)");
    $newtask->execute(array(
      'name' => $name,
      'date_limit' => $date_limit,
      'done' => 0,
      'id_project' => $_GET['project']
    ));

    header('Refresh:1; location: project.php);
  }
}
