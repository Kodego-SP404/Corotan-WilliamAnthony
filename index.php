<!-- PHP SCRIPTS -->
<?php include './scripts/submit.php' ?>


<!-- HEADER FILES -->
<?php
include './components/header.php';
include './components/navbar.php';
?>

<!-- BODY -->
<main>
  <div class="container d-flex flex-column align-items-center">
    <img src="/php-feedback-activity/img/logo.png" class="w-25 mb-3" alt="" />
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Kodego SP404</p>

    <!-- FORM -->
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="mt-4 w-75 needs-validation" novalidate>
      <!-- NAME FIELD -->
      <div class="mb-3">
        <label for="name" class="form-label">Name </label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required />
      </div>

      <!-- EMAIL FIELD -->
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required />
      </div>

      <!-- FEEDBACK FIELD -->
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control" id="body" name="body" placeholder="Enter your feedback" required></textarea>
      </div>

      <!-- SUBMIT BUTTON -->
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100" />
      </div>
    </form>
  </div>
</main>

<!-- FOOTER -->
<?php include './components/footer.php'; ?>

<!-- VALIDATION SCRIPT !!! NEED TO BE AFTER FORM  !!! -->
<?php include './scripts/validation.php' ?>