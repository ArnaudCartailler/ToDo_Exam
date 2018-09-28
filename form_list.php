<?php

  include('header.php');

?>

<form class="form_project" action="add_list.php" method="post">

  <p>List Name:</p>
  <input type="text" name="name" placeholder="name" required/>

    <p>Limite Date:</p>
    <input type="date" name="limit_date" required/>

  <input class="sub" type="submit"name="valid" value="Send"/>

</form>

<?php

  include('footer.php')

?>
