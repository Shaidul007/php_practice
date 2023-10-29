<?php
include "functions.php";
include "includes/header.php";

// Check User Login
if(isset($_SESSION['auth_id'])){
  header("Location: index.php", true, 301);
}
?>
<style>
  body{
    background-color: black;
  }
</style>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3 mt-5">
          <div style="padding: 50px 0; border:1px solid #444; border-radius: 10px; padding: 20px">
            <form method="POST" action="functions.php">
            <h1 class="text-center text-success mb-5">Sign up to our platform</h1>
              <!-- Show Error Message -->
              <?php
                if (isset($_SESSION['errors']) && count($_SESSION['errors']) > 0) {
                  foreach ($_SESSION['errors'] as $error) {
                    preg_filter('/\s/', '', $error);
                    echo "<div class='alert alert-danger'>$error</div>";
                  }
                  unset($_SESSION['errors']); 
                }
              ?>
            
              <div class="form-group mt-3">
                <label for="username" class="form-label fw-bolder text-white">User Name</label>
                <input value="" name="username" placeholder="Enter User Name" type="text" class="form-control" id="username" aria-describedby="username">
              </div>

              <div class="form-group mt-3">
                <label for="email" class="form-label fw-bolder text-white">Email</label>
                <input name="email" placeholder="Enter Email" type="email" class="form-control" id="email" aria-describedby="email">
              </div>

              <div class="form-group mt-3">
                <label for="password" class="form-label fw-bolder text-white">Password</label>
                <input name="password" placeholder="Enter Password" type="password" class="form-control" id="password" aria-describedby="password">
              </div>

              <div class="form-group mt-3">
                <label for="confirm_password" class="form-label fw-bolder text-white">Confirm Password</label>
                <input name="confirm_password" placeholder="Confirm Password" type="password" class="form-control" id="confirm_password" aria-describedby="password">
              </div>

              <div class="form-group mt-3">
                <button name="registration" type="submit" class="btn btn-success me-2">Sign Up</button>
                <a href="login.php" class="btn btn-link">Already have an account?</a>
              </div>
          </form>
        </div>
      </div>
    </div>
    </div>
  </section>

<?php include "includes/footer.php" ?>

