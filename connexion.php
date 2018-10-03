  <?php
    include('header.php');
  ?>

  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Sign up</li>
    </ol>
  </nav>

<div class="connect">

  <div class="signin">
    <a href="formmembers.php">Sign in</a>
  </div>

<form class="connect_form" action="membersco.php" method="post">

  <p>Veuillez taper votre pseudo:</p>
  <input type="text" name="pseudo" placeholder="pseudo" required/>

    <p>Veuillez taper votre mot de passe:</p>
    <input type="password" name="pass" required/><br />

  <input class="sub" type="submit" name="valid" value="Send"/>


</form>


</div>
  <?php
    include('footer.php')
  ?>
