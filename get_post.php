<?php

if (isset($_POST['submit'])) {
  echo $_POST['name'];
  echo $_POST['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=William&age=22"> click</a>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
  <div>
    <label for="name">Name: </label>
    <input type="text" name="name" id="name">
  </div>
  <br>
  <div>
    <label for="age">Age: </label>
    <input type="text" name="age" id="age">
  </div>
  <br>
  <input type="submit" value="submit">
</form>