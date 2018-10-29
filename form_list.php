<?php

  include('header.php');

?>

<!-- Allow the user to create a list-->

<form class="form_listadd" action="add_list.php?project=<?php echo $_GET['project'] ?>&amp;id=<?php echo $_SESSION['id'] ?>" method="post">

  <p>List Name:</p>

  <input type="text" name="name" placeholder="name" required/><br />

  <input class="sub" type="submit"name="valid" value="Send"/>

</form>

<a class="back_pro" href="project.php?project=<?php echo $_GET['project'] ?>&amp;id=<?php echo $_SESSION['id'] ?>">Back to Project page</a>
<?php

  include('footer.php')

?>
