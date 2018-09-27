<?php

  include('header.php');

?>

<form class="form_project" action="add_project.php" method="post">

  <p>Project Name:</p>
  <input type="text" name="name" placeholder="name" required/>

    <p>Description:</p>
    <textarea name="summary" rows="5" cols="50"></textarea>

    <p>Limite Date:</p>
    <input type="date" name="limit_date" required/>


  <input class="sub" type="submit"name="valid" value="Send"/>

</form>

<?php

  include('footer.php')

?>
