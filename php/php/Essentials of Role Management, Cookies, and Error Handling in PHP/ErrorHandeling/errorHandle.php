<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    function RendomErrorFunction(){
        if(rand(0,3)==0){
            throw new Exception("Find a Errrrrror !\n");
        }
        return "ALl is fine";
    }
    try{
        echo RendomErrorFunction();
    }catch(Exception $error){
        error_log($error->getMessage(),3,"error.log");
        echo $error->getMessage();
    }
}