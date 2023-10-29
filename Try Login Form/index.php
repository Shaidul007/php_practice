<?php
session_start();
//set file location name for user information save
$usersDataFile = 'users.json';
//check file exists or not
// $users = file_get_contents( $usersDataFile ) ? json_decode( $usersDataFile, true ) : [];
$users = file_exists( $usersDataFile ) ? json_decode( file_get_contents( $usersDataFile ), true ) : [];

//set function for save user information
function saveUserData( $users, $file ) {
    file_put_contents( $file, json_encode( $users, JSON_PRETTY_PRINT ) );
}

//check if form has been submitted
if ( isset( $_POST['login'] ) ) {
    //get form data
    $userName = $_POST['username'];
    $email    = $_POST['email'];
    $password = $_POST['password'];

//validate form data
if(empty($userName)){
    echo 'Please fill in all fields';
}
//empty email check
if (empty($email)) {
    echo 'Please enter your email';
}
//empty password check
if (empty($password)) {
    echo 'Please enter your password';
}
//password length check
if (strlen($password) < 8) {
    echo 'Password must be at least 8 characters long';
}

//password and confirm password check
if ($password !== $_POST['confirm_password']) {
    echo 'Password and confirm password do not match';
}

//email already exists check
if (isset($users[$email])) {
    echo 'Email already exists';
}else{
    $users[$email] = [
        'username' => $userName,
        'password' => $password,
        'role'     => '',
    ];
    saveUserData( $users, $usersDataFile );
    $_SESSION['email'] = $email;
    header( 'Location: register.php' );
}
    // if ( empty( $userName ) || empty( $email ) || empty( $password ) ) {
    //     echo 'Please fill in all fields';
    // } else {
    //     //email already exists check
    //     if ( isset( $users[$email] ) ) {
    //         echo 'Email already exists';
    //     } else {
    //         $users[$email] = [
    //             'username' => $userName,
    //             'password' => $password,
    //             'role'     => '',
    //         ];
    //     }
    //     saveUserData( $users, $usersDataFile );
    //     $_SESSION['email'] = $email;
    //     header( 'Location: update.php' );
    // }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

  <section>
    <div class="container">
    <div class="row">
      <div class="col-lg-5 mx-auto mt-5">
      <form method="POST">
          <div class="mb-3">
              <label for="username" class="form-label">User Name</label>
              <input name="username" type="text" class="form-control" id="username" aria-describedby="username">
          </div>
          <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input name="email" type="email" class="form-control" id="email" aria-describedby="email">
          </div>
          <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input name="password" type="password" class="form-control" id="password">
              <input value="" name="role" type="hidden" class="form-control" id="role">
          </div>
          <div class="mb-3">
              <label for="confirm_password" class="form-label">Confirm Password</label>
              <input name="confirm_password" type="password" class="form-control" id="confirm_password">
              <input value="" name="role" type="hidden" class="form-control" id="role">
          </div>
        <button type="submit" name="login" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="dashboard.php">Already have an account</a>
      </form>
      </div>
    </div>
    </div>
  </section>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
  </script>
</body>

</html>