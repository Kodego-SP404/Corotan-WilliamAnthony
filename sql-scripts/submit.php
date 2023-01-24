<?php

$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "php-feedback-activity";



try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $insert = "INSERT INTO feedback (username, email, body, date)
  VALUES ('Juan', 'juan@gmail.com', 'this is the feddback body', now())";
  // use exec() because no results are returned
  $conn->exec($insert);
  echo "New record created successfully";
} catch (PDOException $e) {
  echo $insert . "<br>" . $e->getMessage();
}

$conn = null;

header('Location: ' . '../');
