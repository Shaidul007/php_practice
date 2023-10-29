<?php
header('Content-Type:application/json');
//json niye mehod a kaj or request method (get,post,put,delete) niye kaj korar jonno if($_SERVER['REQUEST_METHOD']=='POST') likha laghe
//post method & json Decode
// if($_SERVER["REQUEST_METHOD"]=="POST"){
//     $stringData=file_get_contents("php://input");
//     $phpassoArray=json_decode($stringData,true); //decode korle string hoye jabe associative array
//     print_r($phpassoArray);
// }


if($_SERVER["REQUEST_METHOD"]=="POST"){
    $stringData=file_get_contents("php://input");
    $json= json_decode($stringData, true);
    print_r($json);
}
//decode json ke arryte neeay
// encode  ke json array a neay

//post method & json Encode

// if($_SERVER['REQUEST_METHOD']=='GET'){
//     $stringData=file_get_contents("php://input");
//     $phpassoArray=json_decode($stringData, true);
//     $json= json_encode($phpassoArray, true);
//     echo $json;
    
// }

if($_SERVER['REQUEST_METHOD']=='GET'){
    $stringData=file_get_contents("php://input");
    $jsonA= json_decode($stringData, true);
    $encode= json_encode($jsonA, true);
    echo $encode;
}


//decode method diye kono string pathano hole seta associative array hoye jave
//associative array ke json_encode() kori tahole seta json hoye jabe