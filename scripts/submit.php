<?php
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "php-feedback-activity";

if (isset($_POST['submit'])) {
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $insert  = "INSERT INTO feedback (username, email, body, date) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['body'] . "', now())";

    // use exec() because no results are returned
    $conn->exec($insert);
    echo "New record created successfully";
    echo $_POST['name'];
    echo $_POST['email'];
    echo $_POST['body'];
    header('Location: ' . './feedback.php');
  } catch (PDOException $e) {
    echo $e->getMessage();
  } finally {
    $conn = null;
  }
}
