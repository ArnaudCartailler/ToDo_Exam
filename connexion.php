  <?php
    include('header.php');
  ?>

<form class="connect" action="membersco.php" method="post">

  <p>Veuillez taper votre pseudo:</p>
  <input type="text" name="pseudo" placeholder="pseudo" required/>

    <p>Veuillez taper votre mot de passe:</p>
    <input type="password" name="pass" required/><br />

  <input class="sub" type="submit"name="valid" value="Send"/>

</form>

<div class="col-md-3 signin">
  <a href="formmembers.php">Sign in</a>
</div>

  <?php
    include('footer.php')
  ?>
