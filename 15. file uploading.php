<?php

if (isset($_POST['submit'])) {
  print_r($_FILES);
} else {
  echo '<p style="color: red;">No File Chosen</p>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FIle Upload</title>
</head>

<body>

  <?php echo $message ?? null ?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
    <label for="fileupload">Select image to upload:</label>
    <input type="file" name="fileupload" id="fileupload">
    <input type="submit" value="submit">
  </form>
</body>

</html>