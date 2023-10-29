<?php
session_start();
echo "Hello";
$logingUrl= "login.php";
$logoutUrl= "logout.php";
if(isset($_SESSION['username'])) {
    echo $_SESSION['username'];
    echo "<br/>";
    echo "<a href='$logoutUrl'>logout</a>";
}
else{
    echo "guest";
    echo "<br/>";
    echo "<a href='$logingUrl'>login</a>";
}