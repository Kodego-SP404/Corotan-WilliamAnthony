<!-- PHP SCRIPTS -->
<?php
session_start();


$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "php-feedback-activity";

if (isset($_POST['submit'])) {

  $_SESSION['name'] = $_POST['name'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['body'] = $_POST['body'];
  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $insert  = "INSERT INTO feedback (username, email, body, date) VALUES ('" . $_SESSION['name'] . "', '" . $_SESSION['email'] . "', '" . $_SESSION['body'] . "', now())";

    // use exec() because no results are returned
    $conn->exec($insert);
    echo "New record created successfully";
    echo $_SESSION['name'];
    echo $_SESSION['email'];
    echo $_SESSION['body'];
  } catch (PDOException $e) {
    echo $insert . "<br>" . $e->getMessage();
  }

  $conn = null;
}
?>

<!-- HEADER FILE -->
<?php
include './components/header.php';

?>

<body>
  <?php
  include './components/navbar.php';
  ?>
  <main>
    <div class="container d-flex flex-column align-items-center">
      <img src="/php-feedback-activity/img/logo.png" class="w-25 mb-3" alt="" />
      <h2>Feedback</h2>
      <p class="lead text-center">Leave feedback for Kodego SP404</p>


      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="mt-4 w-75">
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required />
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required />
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Feedback</label>
          <textarea class="form-control" id="body" name="body" placeholder="Enter your feedback" required></textarea>
        </div>
        <div class="mb-3">
          <input type="submit" name="submit" value="Send" class="btn btn-dark w-100" />
        </div>
      </form>
    </div>
  </main>

  <?php
  include './components/footer.php';
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>