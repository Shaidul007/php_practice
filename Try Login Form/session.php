<?php
// session_name('Rony');//set session name
//session_name another way to set and start session
session_start( ['name' => 'Rony',
    'cookie_lifetime'      => 10,

] );

//set data in array
/*
$array= [
"name"    => "shaidul",
"age"     => 30,
"country" => "Bangladesh",

];
$array["city"]= "Dhaka"; //set new value in array
print_r($array);
 */
print_r($_SESSION);
//session practice

// var_dump( $_SESSION );
// $_SESSION["name"] = "shaidul";
// var_dump( $_SESSION );

//session get
// echo $_SESSION["name"];

//session destroy

// session_destroy();
// session_unset();