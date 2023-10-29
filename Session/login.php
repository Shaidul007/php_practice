<?php
session_start();

$_SESSION['username'] = "John Doe";
header( "Location: index.php" );