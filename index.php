<?php
  if(isset($_POST['searchterm'])) {
    echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES);
  }
?>

<form
    action=""
    method="post">
    <input type="text" name="searchterm">
    <input type="submit" value="Search">
</form>