<?php
// FILTER_SANITIZE_STRING - Convert string to string with only alphanumeric, whitespace, and the following characters - _.:/

// FILTER_SANITIZE_EMAIL - Convert string to a valid email address

// FILTER_SANITIZE_URL - Convert string to a valid URL

// FILTER_SANITIZE_NUMBER_INT - Convert string to an integer

// FILTER_SANITIZE_NUMBER_FLOAT - Convert string to a float

// FILTER_SANITIZE_FULL_SPECIAL_CHARS - HTML-encodes special characters, keeps spaces and most other characters


if (isset($_POST['submit'])) {
  // $name = htmlspecialchars($_POST['name']);
  // $age = htmlspecialchars($_POST['age']);

  $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  $age = filter_var($_POST['age'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);

  echo $name;
  echo $age;
}


?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
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