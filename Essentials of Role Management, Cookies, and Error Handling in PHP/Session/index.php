<?php
/*
header("Content-Type: application/json");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $stringData= file_get_contents("php://input");
    $phpAssosArray=json_decode($stringData, true);

    session_start();
    //set session
    $_SESSION["user"]= $phpAssosArray["username"];
    // $_SESSION["pass"]= $phpAssosArray["password"];
    echo "Save Session Success";

}

    // post method diye je data pathalam ta get korar jonno

    if($_SERVER["REQUEST_METHOD"]=="GET"){
        session_start();
        echo $_SESSION["user"];
    }

    //Destroy session

    if($_SERVER["REQUEST_METHOD"]=="DELETE"){
        session_start();
        session_destroy();
        echo"Delete Session Success";
    }
*/

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $stringData= file_get_contents("php://input");
    $convartAssociativeArray=json_decode($stringData,true);
    session_start();
    $_SESSION["fName"]=$convartAssociativeArray["firstName"];
    $_SESSION["lName"]=$convartAssociativeArray["lastName"];
    echo "Save Session Success";
}

if($_SERVER["REQUEST_METHOD"]=="GET"){
    session_start();
    echo $_SESSION["fName"] . " ". $_SESSION["lName"] ;
}


if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    session_start();
    session_destroy();
    echo"Delete Session Success";
}

    //1.8