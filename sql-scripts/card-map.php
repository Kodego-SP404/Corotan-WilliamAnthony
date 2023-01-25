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
        //resultArray = [1,2,3]
        foreach ($result as $data) {
          echo "
            <div class=\"card my-3 container \">
            <div class=\"card-body text-center \">
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