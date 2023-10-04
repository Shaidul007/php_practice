<?php

// class Human{
//     public $name;

//     function __construct($newName)
//     {
//         $this->name=$newName;
//     }

//     function sayHi(){
//         echo "Hi I am sayHi \n";
//         $this->sayName();
//     }

//     function sayName(){
//         echo "My name is {$this->name} \n";
//     }

// }

// $hi1= new Human("Shaidul");
// $hi1->name= "Mohammad";
// $hi1->sayHi();
// $hi1->sayName();

// class Fund {
//     public $fund;

//     public function __construct($inTotal=0) {
//         $this->fund = $inTotal;
//     }

//     public function addFund( $amount ) {
//         $this->fund += $amount;
//     }

//     public function deductFund( $amount ) {
//         $this->fund -= $amount;
//     }

//     public function getTotal() {
//         echo "Total fund is {$this->fund}";
//     }
// }

// $addfunds = new Fund( 100 );
// $addfunds->getTotal();
// $addfunds->addFund( 50 );
// $addfunds-> deductFund(30);
// $addfunds->getTotal();

// RGB COLOR CODE

// class RGB {
//     private $color;
//     private $red;
//     private $green;
//     private $blue;

//     function __construct( $colorCode = '' ) {
//         $this->color = ltrim( $colorCode, "#" );
//         $this->parseColor();
//     }
//     function getColor() {
//         return $this->color;
//     }
//     function getRgbColor() {
//         return array($this->red, $this->green, $this->blue);
//     }
//     function readRgbColor() {
//        echo "Rad = {$this->red}\nGreen= {$this->green}\nBlue= {$this->blue}\n";
//     }
//     function setColor( $colorCode ) {
//         $this->color = ltrim( $colorCode, "#" );
//         $this->parseColor();
//     }
//     private function parseColor() {
//         if ( $this->color ) {
//             list( $this->red, $this->green, $this->blue ) = sscanf( $this->color, "%02x%02x%02x" );
//             // echo "{$this->red} {$this->green} {$this->blue}";
//         } else {
//             // $this->red=0;
//             // $this->green=0; // 2 babe likhha jay
//             // $this->blue=0;
//             list( $this->red, $this->green, $this->blue ) = array( 0, 0, 0 );
//         }
//     }
//     function getRed(){
//         return $this->red;
//     }
//     function getGreen(){
//         return $this->green;
//     }
//     function getblue(){
//         return $this->blue;
//     }
// }

// $myColor = new RGB( "ffef27" );

// $myColor->readRgbColor();

// class Sum{
//     public $name="Shaidul";
//     public function addToNumber($num1,$num2){
//         echo $num1+$num2;
//     }

//     public function demo(){
//         echo $this->name;
//     }
// }

// $obj= new Sum();
// $obj->addToNumber(10,20);
// echo $obj->name;

// $demoObj= new Sum();
// $demoObj->demo();

// class Demos{
//     public $name="Rony";

//     public function sayName(){
//         echo $this->name;
//     }
// }

// $newobj= new Demos();
// $newobj->sayName();

// constructor

// class Demo {
//     public function __construct( $n1, $n2 ) {
//         echo $n1 + $n2;
//     }
// }

// $obj = new Demo( 20, 100 );

// class Mycar {
//     public $name;
//     public $color;
//     public $model;

//     public function __construct( $nameValu, $colorValu, $modelValu ) {
//         $this->name  = $nameValu;
//         $this->color = $colorValu;
//         $this->model = $modelValu;
//     }

//     public function car(){
//         echo "My car name is {$this->name} color is {$this->color} model is {$this->model} \n";
//     }

// }

// $obj= new Mycar( "BMW", "Black", "X5" );
// $obj->car();


// class Mycar{
//     function myCar($name, $color, $model){
//         echo "My car name is {$name} color is {$color} model is {$model}\n";
//     }
// }

// $carObj= new Mycar();
// $carObj->myCar("BMW", "Black", "X5"); 





// inheritance

// class Father{
//     public function print100(){
//         for($i=0;$i<=100;$i++){
//             echo "$i \n";
//         }
//     }
// }

// class Son extends Father{

// }

// $obj= new Son();
// $obj->print100();


// parent calss ke jokhon chaild change kore taile take bole Overwriting/override



// override()

// class Father{
//     public function print100(){
//         for($i=0;$i<=100;$i++){
//             echo "$i \n";
//         }
//     }
// }

// class Son extends Father{
    // public function print100(){
    //     for($i=0;$i<=80;$i++){
    //         echo "$i \n";
    //     }
    // }
// }

// $obj= new Son();
// $obj->print100();

//final

// class Father{
//     final public function print100(){
//         for($i=0;$i<=100;$i++){
//             echo "$i \n";
//         }
//     }
// }

// class Son extends Father{
// //    final kore dile chaild class parent class er kono kichu change korte parbhe na
// }

// $obj= new Son();
// $obj->print100();


// parent class jodi final kore deay taile nicher kono class extends ba use korte parbhe na

// final class Father{
//      final function print100(){
//         for($i=0;$i<=100;$i++){
//             echo "$i \n";
//         }
//     }
// }

// class Son extends Father{
//     public function print100(){
//         for($i=0;$i<=80;$i++){   //aghula kaj korbhe na
//             echo "$i \n";
//         }
//     }
// }

// $obj= new Son();
// $obj->print100();


// abstract

// abstract je class er samne likhbo setake bilupto class bola hobe tar kono object create kora jabe na

// abstract class Father{
//      public function print100(){
//         for($i=0;$i<=100;$i++){
//             echo "$i \n";
//         }
//     }
// }

// class Son extends Father{
//     public function print100(){
//         for($i=0;$i<=80;$i++){   
//             echo "$i \n";
//         }
//     }
// }

// $obj= new Son();
// $obj->print100();



// constuct in inheritance


// parent class er contstruct and child class er contstruct jodi same thake taile chaild class er object create kole chaild class er output dekhabe jodi chaild class er construct na thake taile se father er construct dore tan dibe and father er consturct er output dekhabe

// class Father{
//     public function __construct(){
//         echo "Father \n";
//     }
// }

// class Son extends Father{
//     public function __construct(){
//         parent::__construct(); //parent classer construct call kora jabe
//         echo "Son \n";
//     }
// }

// new Son();


// parent keyword


// class Father{
//    public function mainParent(){
//     echo "Father \n";
//    }
// }

// class Son extends Father{
//     public function chaild(){
//         parent::mainParent();
//     }
// }

// $obj=new Son();
// $obj->chaild();


// static property
// ati object er sathe relation bad diye class er sathe relation make kore
// class er sathe function er direct kono relation thake na realtion hoy object er maddome
// amra jodi chai object er maddome class ke call na kore direct class call korte chai taile static keyword use kora hoy

// class MyCalss{
//     public static function name(){
//         echo "MyClass \n";
//     }
// }
// MyCalss::name();

// $newobj= new MyCalss(); //static diye 2 babe call kora jay function ke 1, object er make kore r 2, scioeresikution er maddome
// $newobj->name();



// static kono property ke amra class er bitore call korte chaile sobike static hote hobe

// class MyCalss{
//     public static $name= "MyClass";
//     public static function sayName(){
//        echo self::$name; //self diye call kora jabe tokhon this-> er dorakar hobe na
//     }
// }
// $newobj= new MyCalss();
// $newobj->sayName();


// Access Modifiers

// public-> sob class use korte parbhe
// private-> sudu je class er bortor thakbe se class use korte parbhe onno keu parbhe na
// protected->


class Name{
    public $name;
    public $age;

    public function __construct($nameValue, $ageValue){
        $this->name=$nameValue;
        $this->age=$ageValue;
    }
}

$obj= new Name("Son","dsfa");
echo $obj->name;
echo $obj->age;
