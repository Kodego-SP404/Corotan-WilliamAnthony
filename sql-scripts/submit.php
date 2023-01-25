<?php
// session_start();


// $servername = "localhost";
// $username = "admin";
// $password = "admin";
// $dbname = "php-feedback-activity";


// try {
//   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   $insert  = "INSERT INTO feedback (username, email, body, date) VALUES ('" . $_SESSION['name'] . "', '" . $_SESSION['email'] . "', '" . $_SESSION['body'] . "', now())";

//   // use exec() because no results are returned
//   $conn->exec($insert);
//   echo "New record created successfully";
// } catch (PDOException $e) {
//   echo $insert . "<br>" . $e->getMessage();
// } finally {
//   $conn = null;
//   session_destroy();
// }


$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "php-feedback-activity";

if (isset($_POST['submit'])) {

  // $_SESSION['name'] = $_POST['name'];
  // $_SESSION['email'] = $_POST['email'];
  // $_SESSION['body'] = $_POST['body'];

  //dito dapat yung validation 

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
  } catch (PDOException $e) {
    echo $insert . "<br>" . $e->getMessage();
  } finally {
    $conn = null;
    header('Location: ' . '../');
  }
}
