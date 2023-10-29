<?php
/*
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $stringData= file_get_contents("php://input");
    $convartAssociativeArray=json_decode($stringData,true);

    setcookie("fName",$convartAssociativeArray["firstName"],[
        "expires"=>time()+3600,
        "path"=>"/",
        "domain"=>"localhost",
        "secure"=>true,
        "httponly"=>true,
        "samesite"=>"lax",
    ]);
    echo "Save Cookie Success";
}

//Read cookie

if($_SERVER["REQUEST_METHOD"]=="GET"){
    echo $_COOKIE["fName"];
}

//Delete cookie

if($_SERVER["REQUEST_METHOD"]=="DELETE"){
    setcookie("fName", "",[
        "expires"=>time()-3600,
        "path"=>"/",
        "domain"=>"localhost"
    ]);
    echo "Delete Cookie Success";
}
*/

//browser a cookie set korar jonno sudu get method kaj kore
/*
if($_SERVER["REQUEST_METHOD"]=="GET"){

    setcookie("fName","Shaidul",[
        "expires"=>time()+20,
        "path"=>"/",
        "domain"=>"localhost",
        "secure"=>true,
        "httponly"=>true,
        "samesite"=>"lax",
    ]);
    echo "Save Cookie Success";
}
*/


if($_SERVER["REQUEST_METHOD"]== "POST"){
    $stringData=file_get_contents("php://input");
    $convartAssociativeArray=json_decode($stringData, true);

    setcookie("Name", $convartAssociativeArray ["firstName"],[
        "expires"=>time()+3600,
        "path"=>"/",
        "domain"=>"localhost",
        "secure"=>true,
        "httponly"=>true,
        "samesite"=>"lax",
    ]);

    echo "Save Cookie Success";
}


//Read cookie

if($_SERVER["REQUEST_METHOD"]== "GET"){
    echo $_COOKIE["Name"];
}

//Delete cookie
if($_SERVER["REQUEST_METHOD"] == "DELETE"){
    setcookie("Name","",[
        "expires"=>time()-3600,
        "path"=>"/",
        "domain"=>"localhost",
    ]);
    echo "Delete Cookie Success";
}