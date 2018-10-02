<?php

  include('header.php');

?>

<form class="form_modify" action="update_task.php?list=<?php echo $_GET['list']?>" method="post">

  <input type="checkbox" name="done" value="do" /> <label for="case">Done</label><br />

  <input class="sub" type="submit" name="valid" value="Send"/>

</form>

<?php

  include('footer.php')

?>
