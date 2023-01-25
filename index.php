<!-- HEADER FILE -->
<?php include './components/header.php'; ?>

<?php include './components/navbar.php'; ?>
<main>
  <div class="container d-flex flex-column align-items-center">
    <img src="/php-feedback-activity/img/logo.png" class="w-25 mb-3" alt="" />
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Kodego SP404</p>


    <form action="sql-scripts/submit.php" method="post" class="mt-4 w-75">
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

<?php include './components/footer.php'; ?>