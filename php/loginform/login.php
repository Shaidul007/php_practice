
<?php

$email= $_POST["email"] ?? '';
$password= $_POST["password"] ?? '';
$errorMessage = "''";
$fp = fopen("./data/user.txt", "r"); 
$roles = [];
$emails = [];
$passwords = [];
//Read file
while ($line = fgets($fp)) {
    $values = explode(",", $line);
    array_push($roles, trim($values[0]));
    array_push($emails, trim($values[1]));
    array_push($passwords, trim($values[2]));
}
fclose($fp);
//match email and password 
for($i=0; $i<count($roles); $i++){
    if($roles[$i]=="user"){
        if($emails[$i]==$email && $passwords[$i]==$password){
            //After matching email & password go to index.php page
            header("location: index.php");
        }
    }else{
        $errorMessage= "You are not a user";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center">Login Page</h1>
        <form action="login.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="******">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div>
            
            <p class="text-worning">
                <?php echo $errorMessage; ?>
            </p>
            
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>