<!-- PHP SCRIPTS -->
<?php include './components/header.php'; ?>

<body>
  <?php include './components/navbar.php'; ?>

  <!-- MAIN START -->
  <main>
    <div class="container d-flex flex-column align-items-center">
      <h2>Feedback</h2>
      <?php
      $servername = "localhost";
      $username = "admin";
      $password = "admin";
      $dbname = "php-feedback-activity";

      try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $select = $conn->prepare("SELECT username, email, body, date from feedback");

        $select->execute();



        $result = $select->fetchAll();
        foreach ($result as $data) {
          echo "
        <div class=\"card my-3\">
        <div class=\"card-body text-center\">
        <blockquote class=\"blockquote mb-0\">
          <p> " . $data['body'] . " </p>
          <footer class=\"blockquote-footer\">" . $data['username'] . " " . $data['date'] . "</footer>
        </blockquote>  
        </div>
        </div>
        ";
        }
      } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
      }
      ?>

    </div>
  </main>

  <?php include './components/footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>