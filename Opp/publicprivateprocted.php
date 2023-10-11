<?php

// public => atake je kono jagay theke access kora joy
/*class Filereader{
    public $data= "Reading data";
}

$myFile = new Filereader();
echo $myFile->data;
*/

// protected =>ata ke jodi access korte chai taile function er maddome kora laghbe . atar kono object create kora jabe na
/*class Filereader{
    protected $data= "Reading data";

    public function readProtected(){
        echo $this->data;
    }
}

$myFile = new Filereader();
$myFile->readProtected();

*/

//Private=> 


class Filereader{
    private $data= "Reading data";

    public function readProtected(){
        echo $this->data;
    }
}

$myFile = new Filereader();
$myFile->readProtected();


//1.45