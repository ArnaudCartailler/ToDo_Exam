<?php

include('header.php');

require 'config.php'

?>

<input type="button" id="more_fields" onclick="add_fields();" value="&#10010;"/>
<div id="room_fileds">
    <div class='label'>Add a task</div>
      <div class="content" id="adding">
          <span>Task: <input type="text" name="name" style="width:210px;" name value="" /></span><br />
      </div>
</div>


<?php

include('footer.php')

?>
