<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>My TODO List</title>
  <meta name="description" content="Website for making your own todo list">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="180x180" href="icon.png">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>

<div class="container-fluid header">

  <div class ="row text-center">

<?php
      if (!empty($_SESSION['id'])) {
        echo '<div class="col-md-4 index">
          <a href="index.php">Home</a>
        </div>';
        echo '<div class="col-md-4 profil">
        <a href="profil.php">Change profil</a>
        </div>';
        echo '<div class="col-md-4 disconnect">
          <a href="deco.php">Disconnect</a>
        </div>';
      }else{
        echo '<div class="col-md-6 index">
          <a href="index.php">Home</a>
        </div>';
        echo '<div class="col-md-6 connexion">
          <a href="connexion.php">Sign in/up</a>
        </div>';
      }
?>

  </div>

</div>
