<?php
session_start();

if (isset($_SESSION['username'])) {
  echo 'hello' . $SESSION['username'];
  echo '<a href="13.2. logout.php"></a>';
} else {
  echo 'hello guest';
  echo '<a href="php-fundamentals/13. sessions.php">Home </a>';
}
