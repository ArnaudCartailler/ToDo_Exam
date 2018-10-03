<?php include('header.php') ?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Sign In</li>
  </ol>
</nav>

<div class="connexion_form">
  <a class="signup" href="connexion.php">Sign up</a>
</div>

<form class="addmembers" action="addmembers.php" method="post" enctype="multipart/form-data">

                  <p>Veuillez taper votre pseudo:</p>
                    <input type="text" name="pseudo" required/>

                  <p>Veuillez taper votre mot de passe:</p>
                    <input type="password" name="pass" required/>

                    <p>Veuillez confirmer votre mot de passe:</p>
                      <input type="password" name="pass2" required/>

                    <p>Veuillez taper votre email:</p>
                      <input type="email" name="email" required/><br />

                      <input class="sub" type="submit" name="valid" value="Valid sign in" />
     </form>


<?php include('footer.php') ?>
