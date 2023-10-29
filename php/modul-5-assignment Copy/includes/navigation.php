<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
</head>
<style>
    body{
        background-color: black;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg bg-success navbar-dark">
    <div class="container">
        <?php
        if($_SESSION['auth_role'] == "admin"){
            echo "<a class='navbar-brand' href='dashboard.php'>Home</a>";
        }
        ?>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <a href="dashboard.php?logout" class="btn btn-danger btn-md">Logout</a>
        </div>
    </div>
</nav>
</body>
</html>