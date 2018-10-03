<?php

  include('header.php');

?>


<form class="form_listadd" action="add_list.php?project=<?php echo $_GET['project'] ?>" method="post">

  <p>List Name:</p>

  <input type="text" name="name" placeholder="name" required/><br />

  <input class="sub" type="submit"name="valid" value="Send"/>

</form>

<a class="back_pro" href="project.php?project=<?php echo $_GET['project'] ?>">Back to Project page</a>
<?php

  include('footer.php')

?>
