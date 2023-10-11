<?php

class NumberCount {
    private static int $count = 0;

    private string $objId;

    public function __set( $name, $value ) {
        $this->$name = $value;
    }

    public function __get( $name ) {
        return $this->$name;
    }

    public function __construct() {
        self::$count++;
    }

    public function __destruct() {
        self::$count--;
    }

    public function getCount() {
        return self::$count;
    }
}

$obj1        = new NumberCount();
$obj1->objId = '123' . PHP_EOL;
print $obj1->objId;

// $obj1=new NumnerCount();
// $obj2=new NumnerCount();
// unset($obj2);
// echo $obj1->getCount();

// class NumnerCount{
//     private static int $count=0;

//     public function __construct()
//     {
//          self::$count++;
//     }

//     public function __destruct(){
//         self::$count--;
//     }

//     public function getCount(){
//         return self::$count;
//     }
// }

// $obj1=new NumnerCount();
// $obj2=new NumnerCount();
// unset($obj2);
// echo $obj1->getCount();


// 7.51