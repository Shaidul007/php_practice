<?php

interface Mammal {
    public function makeSound();
    public function sleep();
}
abstract class Ainmal implements Mammal {
    public $color;

    public function makeSound() {
        echo "Meow";
    }
    public function sleep() {
        echo "Im sleeping";
    }
}

class Dog extends Ainmal {
    public function makeSound() {
        echo "Woof";
    }

}

class Cat extends Ainmal {
    public function makeSound() {
        echo "Meow";
    }
}

$puppy = new Dog();
echo $puppy->makeSound() . "\n";
echo $puppy->sleep();

$cat = new Cat();
echo $cat->makeSound() . "\n";