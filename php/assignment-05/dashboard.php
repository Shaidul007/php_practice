<?php
include "functions.php";
include "includes/header.php";
?>

  <!-- nav section -->
  <nav class="navbar navbar-expand-lg text-bg-success p-3">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
      </ul>
      <?php
        if(isset($_SESSION['auth_id'])){
          if($_SESSION['auth_role'] == "admin"){
            echo "<a href='dashboard.php' class='btn btn-danger btn-md me-3'>Dashboard</a>";
            echo "<a href='functions.php?logout' class='btn btn-danger btn-md me-3'>Logout</a>";
          }
        }
     
      ?>

   
    </div>
  </div>
</nav>
<h1 class="display-4 text-primary text-center my-2">Welcome To Admin Dashboard</h1>
  <!-- nav section -->

<section>
  <div class="container">
    <div class="row d-flex justify-content-center  ">
    <div class="col-md-10">
      <div class="card">
        <div class="bg-success card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title text-white">User List</h4>
          <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Create User</a>
        </div>
        <div class="card-body ">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">UserName</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>   
              <?php 
              $data=file_get_contents('./Data/user.json');
              $data=json_decode($data,true);
              foreach ($data as $key => $value) {
                if($value['id'] != "auth_id"){?>
                  <tr>
                    <th scope="row"><?php echo $value['id'] ?></th>
                    <td><?php echo $value['username'] ?></td>
                    <td><?php echo $value['email'] ?></td>
                    <td><?php echo $value['role'] ?></td>
                    <td>
                      <a href="userEdit.php?edit=<?php echo $value['id'] ?>" class="btn btn-success btn-sm">Edit</a>
                      <a href="functions.php?delete=<?php echo $value['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                  </tr>
                <?php
                  
                }
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    </div>
  </div>
</section>


  <?php include __DIR__ ."/includes/footer.php" ?>