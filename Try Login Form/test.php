<?php

$data = [
    "name"    => "shaidul",
    "age"     => 30,
    "country" => "Bangladesh",
];
// var_dump($data);

//serialize
// $serialized = serialize( $data );
// print_r($serialized);
// echo gettype($serialized); // gettype diye kon formet a ache ta check kora jay jemon string,int,float,boolean,object,array

//unserialize
/*
$unserialized= unserialize( $serialized );
print_r($unserialized);
*/


// Encode decode

$encode= json_encode($data);
$decode= json_decode($encode, true);
print_r($decode["country"]);