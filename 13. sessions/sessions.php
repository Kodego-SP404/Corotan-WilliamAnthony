<?php

if (isset($_POST['submit'])) {
  $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $password = $_POST['password'];

  echo $username;
  echo $password;


  if ($username == 'william' && $password == 'password') {
    $_SESSION['username'] = $username;
    header('Location: /php-fundamentals/13.1.%dashboard.php');
  } else {
    echo 'Incorrect username or password';
  }
}
?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
  <div>
    <label for="username">Username: </label>
    <input type="text" name="username" id="name">
  </div>
  <br>
  <div>
    <label for="pasword">password: </label>
    <input type="password" name="password" id="password">
  </div>
  <br>
  <input type="submit" value="submit">
</form>