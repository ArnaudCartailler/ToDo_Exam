<?php

  include('header.php');

?>

<form class="form_modify" action="update_task.php?list=<?php echo $_GET['list'] ?>&amp;task=<?php echo $_GET['task'] ?>&amp;project=<?php echo $_GET['project'] ?>" method="post">

<div class="custom-control custom-checkbox">

  <ul>

  <input type="checkbox" class="custom-control-input" id="customCheck1" name="done" value="do">
  <label class="custom-control-label cr" for="customCheck1">Check if your task is done or uncheck it if not</label><br />
  <input class="sub" type="submit" name="valid" value="Send"/>

</div>

</form>

<?php

  include('footer.php')

?>
