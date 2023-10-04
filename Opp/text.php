<?php

// class Father{
//     public function Print100(){
//         for($i=0; $i<=100; $i++){
//             echo "$i \n";
//         }
//     }
// }

// class Son extends Father{

// }

// $sonObj= new Son();
// $sonObj->Print100();



// override()

// class Father {
//     public function Print100() {
//         for ( $i = 0; $i <= 100; $i++ ) {
//             echo "$i \n";
//         }
//     }
// }

// class Son extends Father {
//     public function Print100() {
//         for ( $i = 0; $i <= 50; $i++ ) {
//             echo "$i \n";
//         }
//     }
// }

// $sonObj = new Son();
// $sonObj->Print100();



// final

// final class Father {
//     final public function Print100() {
//         for ( $i = 0; $i <= 100; $i++ ) {
//             echo "$i \n";
//         }
//     }
// }


// class Son extends Father {
//     // public function Print100() {
//     //     for ( $i = 0; $i <= 50; $i++ ) {
//     //         echo "$i \n";
//     //     }
//     // }
// }

// $sonObj= new Son();
// $sonObj->Print100();

// $fatherObj= new Father();
// $fatherObj->Print100();


// abstract

abstract class Father{
    public function Print100(){
        for($i=0;$i<=100;$i++){
            echo "$i \n";
        }
    }
}

class Son extends Father{
    public function Print100(){
        for($i=0;$i<=50;$i++){
            echo "$i \n";
        }
    }
}

// $sonObj= new Son();
// $sonObj->Print100();

$sonObj= new Father();
$sonObj->Print100();