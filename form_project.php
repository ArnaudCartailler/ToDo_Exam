<?php

  include('header.php');

?>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add project</li>
  </ol>
</nav>

<form class="form_addproject" action="add_project.php?id=<?php echo $_SESSION['id'] ?>" method="post">

  <p>Project Name:</p>
  <input type="text" name="name" required/>

    <p>Description:</p>
    <textarea name="summary" rows="5" cols="30"></textarea>

    <p>Limite Date:</p>
    <input type="date" name="limit_date" required/> <br />


  <input class="sub" type="submit"name="valid" value="Send"/>

</form>

<?php

  include('footer.php')

?>
