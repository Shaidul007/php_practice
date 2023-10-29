<?php

// $shaid=20;
// $rony=40;

// if($shaid == $rony){
//     echo "This is same amount";
// }else if($shaid != $rony){
//     echo"The number is not equal";
// }else if($shaid > $rony){
//     echo "shaid is gretter than rony";
// }
// else if($shaid < $rony){
//     echo "shaid is less than rony";
// }else if($shaid >= $rony){
//     echo "Anything";
// }


// $year=2016;


// if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
//     echo "{$year} is leap year";
// }
// else if($year % 4 == 0 && $year % 100 == 0){
//     echo "{$year} is not leap year";
// }
// else if($year %4 == 0){
//     echo "{$year} is leap year";
// }

// else{
//     echo "{$year} is not leap year";
// }

// echo "<br>";

// if($year %4 ==0 &&($year %100 != 0 || $year % 400 == 0)){
//     echo "{$year} is leap year";
// }

// else {
//     echo "{$year} is not leap year";
// }


// $condition1= true;
// $condition2=true;
// $condition3=false;

// if($condition1){
//     if($condition2){
//         if($condition3){
//             echo "Hello";
//         }else{
//             echo "NO 1";
//         }
//     }else{
//         echo "NO 2";
//     }
// }else{
//     echo "NO 3";
// }

//array

$person=[
    [
        "name"=>"shaid","age"=>20,"city"=>"dhaka"],
    [
        'a'=>1,'b'=>2,'c'=>3,'d'=>4],
    [
        "name"=>"rony","age"=>40,"city"=>"dhaka"]
];

$changeDvalue= array_splice($person,1,1,['a'=>5,'b'=>6,'c'=>7,'d'=>8]);

$changeDvalue= array_splice($person,1,2,["name"=>"Moon", "age"=>23,"city"=>"dhaka"]);
print_r($person);
// print_r($changeDvalue);
// $splic=array_slice($person,0,1); //arrary slice
// print_r($person[1]['d']);
// echo $person[1]['d'];

// $arr= array('name','age','city');
// print_r($arr);