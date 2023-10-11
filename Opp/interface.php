<?php

// interface Mammal {
//     public function makeSound();
//     public function sleep();
// }

// class Dog implements Mammal{
//     public function makeSound(){}
//     public function sleep(){}
// } 

// class Cat implements Mammal{
//     public function makeSound(){}
//     public function sleep(){}
// }

/*

interface Mammal {
    public function makeSound();
    public function sleep();
}

abstract class Animal implements Mammal {
    public $color;

    public function makeSound() {
        echo "Meow";
    }

    public function sleep() {
        echo "I'm sleeping";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow";
    }
}

$puppy = new Dog(1,2);// Added 1 and 2 to as argument
echo $puppy->makeSound() . "\n";
echo $puppy->sleep() . "\n"; // Added "\n" to separate the output lines

$cat = new Cat();
echo $cat->makeSound() . "\n";
*/


interface BaseAnimal{
    public function isAlive();
    public function  canEat($pream1, $pream2);
    public function  breed();
}

//access interface BaseAnimal to implement Animal class
class Animal implements BaseAnimal{
    public function isAlive(){}
    public function  canEat($pream1, $pream2){}
    public function  breed(){}
}

//access interface er modde abr interface call

interface BaseHuman extends BaseAnimal{
    public function canTalk();
}

class Human implements BaseHuman{
    public function isAlive(){}
    public function  canEat($pream1, $pream2){}
    public function  breed(){}
    public function canTalk(){}
}

//instanceof diye check kora jay kon object
$human= new Human();
echo $human instanceof BaseHuman;