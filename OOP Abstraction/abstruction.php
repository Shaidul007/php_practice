<?php

// class Reservisation{
//     public $host= "Host class";
//     public $guest= "Guest class";


// public function cancel(){
//     $this->sendNotification();
//     $this->refoundGuest();
// }

// private function sendNotification(){
//     echo "Send cancel notification " . $this->host .PHP_EOL;
// }

// private function refoundGuest(){
//     echo "Refound guest " . $this->guest .PHP_EOL;
// }
// }

// $reservisation= new Reservisation();
// echo $reservisation->cancel();



abstract class Vehicle{


    abstract public function getBaseFare();
    abstract public function getPerKiloFare();


    public function getToatl($kilo){
        return $this->getBaseFare()+ ($this->getPerKiloFare() * $kilo);
    }



}


class Car extends Vehicle{

    public function getBaseFare(){
        return 100;
    }
    public function getPerKiloFare(){
        return 20;
    }
}

class Bike extends Vehicle{
    public function getBaseFare()
    {
        return 80;
    }

    public function getPerKiloFare(){
        return 10;
    }
}


$obj= new Bike();
echo $obj->getToatl(7);