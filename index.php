<?php
  if(isset($_POST['searchterm'])) {
    echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES);
  }
?>

<form
    action=""
    method="post">
    User name: <input type="text" name="name"><br>
    Password: <input type="password" name="password"><br>
    Gender: 
      <input type="radio"  name="gender" value="f"> female
      <input type="radio"  name="gender" value="m"> male
      <input type="radio" name="gender"  value="o"> other<br />
    <input type="submit" value="Search">
</form>