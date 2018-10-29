<?php

session_start();
require 'config.php';
include('header.php');

?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Change profil</li>
  </ol>
</nav>

<!-- Form to update the pseudo and the pass of the user-->

<form class="form_profilchange" action="changeprofil.php" method="post" enctype="multipart/form-data">

                  <p>Your new pseudo:</p>
                    <input type="text" name="pseudo" required />

                    <p>Your old password:</p>
                      <input type="password" name="pass1" required />

                  <p>Your new password:</p>
                    <input type="password" name="pass" required />

                    <p>Confirm your new password:</p>
                      <input type="password" name="pass3" required /> <br />

                      <input class="sub" type="submit" name="valid" value="Valider" />
     </form>


<?php include('footer.php') ?>
