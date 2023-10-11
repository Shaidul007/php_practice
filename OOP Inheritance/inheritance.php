<?php

// Example 01

// class Shape{

// }

// class Shaps {
//     private $shapes;

//     public function __construct() {
//         $this->shapes= array();
//     }

//     public function addShape(Shape $shape){
//         array_push($this->shapes, $shape);
//     }
//     public function totalShapes(){
//         return count($this->shapes);
//     }
// }

// class Ractangle extends Shape{

// }

// class Triangle extends Shape{


// }

// class Student{

// }

// $shapeObj= new Shaps();
// $shapeObj->addShape(new Ractangle());
// $shapeObj->addShape(new Triangle());
// // $shapeObj->addShape(new Student());

// echo $shapeObj->totalShapes();


// Example 02
/*
class CommerceOnly{

}

class SciecneOnly{

}

class CommerceStudents{
    private $students;
    public function __construct(){
        $this->students=[];
    }

    public function addStudents(CommerceOnly $Student){
        array_push($this->students, new $Student());
    }

    public function addScienceStudents(SciecneOnly $Student){
        array_push($this->students, new $Student());
    }
    public function totalStudents(){
        return count($this->students);
    }
}

class ScienceStudents extends SciecneOnly{

}

class HemunaticsStudents {

}

class CommcceNewStudents extends CommerceOnly{

}

$objcms= new CommerceStudents();
$objcms->addScienceStudents(new SciecneOnly());
// $objcms->addStudents(new HemunaticsStudents());
$objcms->addStudents(new CommcceNewStudents());
echo $objcms->totalStudents();

*/


