<?php
// CONSTANT VARIABLES
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "php-feedback-activity";

if (isset($_POST['submit'])) {
  try {
    // DB CONNECTION STRING
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // INSERT QUERY STATEMENT
    $insert  = "INSERT INTO feedback (username, email, body, date) VALUES ('" . $_POST['name'] . "', '" . $_POST['email'] . "', '" . $_POST['body'] . "', now())";

    // use exec() because no results are returned
    $conn->exec($insert);

    // REDIRECT TO FEEDBACK
    header('Location: ' . './feedback.php');
  } catch (PDOException $e) {
    echo $e->getMessage();
  } finally {
    // CLOSING DB CONNECTION
    $conn = null;
  }
}
