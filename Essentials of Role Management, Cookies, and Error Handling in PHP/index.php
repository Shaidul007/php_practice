<?php

header('Content-Type:application/json');
//amra jokhon Single associative array ke json_encode() kori tahole pabo json object
/*$associativeArray= ["name"=>"ali","age"=>22,"city"=>"tehran"];
$json= json_encode($associativeArray);
echo $json;*/

//amra jokhon MultiDiamonsional associative array ke json_encode() kori tahole pabo json Array

// $multiDiamonsionalArray= [
//     ["name"=>"ali","age"=>22,"city"=>"tehran"],
//     ["name"=>"reza","age"=>22,"city"=>"tehran"],
//     ["name"=>"mohammad","age"=>22,"city"=>"tehran"]
// ];

// $json= json_encode($multiDiamonsionalArray);
// echo $json;


$multiDiamonsionalArray= [
    ["name"=>"ali","age"=>22,"city"=>"tehran"],
    ["name"=>"reza","age"=>22,"city"=>"tehran"],
    ["name"=>"mohammad","age"=>22,"city"=>"tehran"]
];
$json= json_encode($multiDiamonsionalArray);
echo $json;