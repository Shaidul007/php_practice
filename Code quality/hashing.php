<?php

// $userName= "Shaidul";
// $password= "sfahdkasd";

// if($userName == "Shaidul" && $password == "sfahdkasd"){
//     echo "Login success";
// }else{
//     echo "Login failed";
// }

// md5() -> password ke orginal babe na dekhai jodi special character kora jay . jemon a,b,c,d aghula muloto number er maddome creatre hoiche. ar ader number ber korar jonno md5 function use kora hoy 

// password_hash()

// $userName= "Shaidul";
// // $password= "sfahdkasd";
// // $passwordHashing= md5($password);
// $passwordHashing= "9a2defef23757274e1e3f21c26e2d577";

// echo $passwordHashing;


// $fromUserName= "Shaidul";
// $fromPassword= "sfahdkasd";

// if($fromUserName == "$userName" && md5($fromPassword) == $passwordHashing){
//     echo "Login success";
// }else{
//     echo "Login failed";
// }



// if($userName == "Shaidul" && $password == "sfahdkasd"){
//     echo "Login success";
// }else{
//     echo "Login failed";
// }


// file er hashing

// $contentFile= file_get_contents("./abcd.txt");
// echo $contentFile;

// $contentFileHashing= md5($contentFile);
// echo $contentFileHashing;   



// sha1() atio o hashing er moto same kaj kore ata 40 bit hoy

$string= "Hello World";
echo sha1($string). "\n";
echo md5($string);


// 1.16