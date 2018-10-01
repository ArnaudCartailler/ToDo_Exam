<?php

  include('header.php');

?>

<form class="form_project" action="add_list.php?project=<?php echo $_GET['project'] ?>" method="post">

  <p>List Name:</p>

  <input type="text" name="name" placeholder="name" required/>

  <input class="sub" type="submit"name="valid" value="Send"/>

</form>

<?php

  include('footer.php')

?>
