<?php

// setcookie('username', 'shaidul', time() + 3600);
// setcookie('password', '1234', time() + 3600);

/*

if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
$getdata       = file_get_contents( "php://input" );
$jsonAssoArray = json_decode( $getdata, true );

setcookie( "IamCookie", $jsonAssoArray["password"], [
"expires"  => time() + 3600,
"path"     => "/",
"domain"   => "localhost",
"secure"   => true,
"httponly" => true,
"samesite" => "strict",
] );
echo "cookie set successfully";
}
 */
//get cookie

/*
if ( $_SERVER["REQUEST_METHOD"] == "GET" ) {
if ( isset( $_COOKIE['IamCookie'] ) ) {
echo $_COOKIE['IamCookie'];
} else {
echo "cookie not set";
}
}

 */
//delete cookie
/*

if($_SERVER["REQUEST_METHOD"]== "DELETE"){
setcookie("IamCookie", "",[
"expires" => time() - 3600,
"path" => "/",
"domain" => "localhost",
]);
}
 */

//set cookie in browser

// setcookie('username', 'shaidul', time() + 10);

$data = [
    'username' => 'shaidul',
    'password' => '1234',
];
// setcookie('data', json_encode($data), time() + 10);
// echo "cookie set notsuccessfully";
//print cookie
print_r( json_decode( $_COOKIE['data'], true ) );
