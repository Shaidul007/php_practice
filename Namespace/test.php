<?php

class Person{
    private $name , $age;

    public function __construct($name , $age){
        $this->name = $name;
        $this->age = $age;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }

}


class Student extends Person{
    private $grade, $school;

    public function __construct($name , $age , $grade , $school){
        parent::__construct($name , $age);
        $this->grade = $grade;
        $this->school = $school;
    }

    public function details(){
        echo "Name is " . $this->getName() . "\n";
        echo "Age is " . $this->getAge() . "\n";
        echo "Grade is $this->grade\n";
        echo "School is $this->school\n";
    }
}

$studentObject= new Student("Sabbir", 26, "A", "Uttara High school");
$studentObject->details();