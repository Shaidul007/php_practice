<?php

// $students = array('Rahim', 'Karim', 'Hasan', 'Hassan', 'Mahmud');

// $students =['Rahim', 'Karim', 'Hasan', 'Hassan', 'Mahmud'];

// echo $students[4];

// $students =['Rahim', 'Karim', 'Hasan', 'Hassan', 'Mahmud'];

// // $num= count($students);
// // for($i=0; $i<$num; $i++){
// //     echo $students[$i] . "<br>";
// // }

// foreach($students as $output){
//     echo "$output <br>";
// }

// Associative aray

// $students = ["name"=>"Shaidul", "age"=>23, "city"=> "Ramgonj"];

// // print_r($students);

// // echo $students["name"];

// foreach ($students as $key=>$value){
//     echo "$key: $value <br>";
// }

// Associative array

// $person =['name'=> 'Shaidul', 'age' => 22, 'city'=> 'Ramgonj'];

// foreach($person as $key=>$value){
//     echo "$key: $value <br>";
// }

// Multidimensional array

// $multidimensionalArray =[
//     ['rony','reme','ruhi'],
//     ['mehereen','sadia','prince'],
//     [1,2,3]
// ];

// echo $multidimensionalArray[1][1];

// $multidimensionalArray=[
//     ['Name'=>'Rony', 'Age'=>23, 'city'=>'Ramgonj'],
//     ['Name'=>'Rahim', 'Age'=>33, 'city'=>'Ramgonj'],
//     ['Name'=>'Rana', 'Age'=>73, 'city'=>'Ramgonj']
// ];

// echo $multidimensionalArray[2]['Age'];

// foreach loop

// foreach($multidimensionalArray  as $child){
//     foreach($child as $key=>$value){
//         echo "$key: $value <br>";
//     }
// }

// array_values()

// $name= ['Name'=>'Rony', 'Age'=>23, 'city'=>'Ramgonj'];

// $values=array_values($name);
// print_r($values);

// array_keys

// $name= ['Name'=>'Rony', 'Age'=>23, 'city'=>'Ramgonj'];

// $key=array_keys($name);
// print_r($key);

// array_combine()

// $person=['name','age','city'];
// $info=['shaidul',23,'Ramgonj'];

// $combine=array_combine($person , $info);
// print_r($combine);

// array_fill()

/* $filled= array_fill(0,50,"Rony");
print_r($filled); */

// array_push()

/*$name= ['Rahim','Karim','Hasan','Hassan','Mahmud'];
array_push($name,'Shakil','Hridoy');
print_r($name);*/

// array_pop()
/*
$name= ['Rahim','Karim','Hasan','Hassan','Mahmud','Shakil','Hridoy'];
array_pop($name);
print_r($name);*/

// array_shift()

/* $name= ['Rahim','Karim','Hasan','Hassan','Mahmud'];
array_shift($name);
print_r($name);*/

// array_unshift()

/*$name= ['Rahim','Karim','Hasan','Hassan','Mahmud'];
array_unshift($name, 'Rony','Shaidul');
print_r($name);*/

// array_slice()

/* $name= ['Rahim','Karim','Hasan','Hassan','Mahmud'];
$portion= array_slice($name, 0 , 2);
print_r($portion);*/

// array_splice()

/* $name= ['Rahim','Karim','Hasan','Hassan','Mahmud'];
array_splice($name, 3,4, ['Shaidul', 'Rony']);
print_r($name);*/

// array count
// $name= ['Rahim','Karim','Hasan','Hassan','Mahmud'];
// echo count($name);

// array_sum()

// $number=[1,2,3,4];
// $sum= array_sum($number);
// echo $sum;

// array_product()

// $number=[1,2,3,4];
// $product = array_product($number);
// echo $product;

// in_array()

//  $name= ['Rahim','Karim','Hasan','Hassan','Mahmud'];
// //  $number=[1,2,3,4];
// $check= in_array('Karim',$name);

// echo $check;

// is_array()

// $name= ['Rahim','Karim','Hasan','Hassan','Mahmud'];

// $check = is_array($name);
// echo $check;

// array_key_exists()

// $name= ['Name'=>'Rony', 'Age'=>23, 'city'=>'Ramgonj'];
//  $check = array_key_exists('Name', $name);
// // $check = array_search('Karim', $name);
//  echo $check;

// //  array_search()

// $name= ['Rahim','Karim','Hasan','Hassan','Mahmud'];

// $check = array_search('Karim', $name);
//  echo $check;

// copy by value
//deep copy

// $person = ["fname"=>"Shaidul", "lname"=>"Islam", "age"=>"23"];
// $copyPerson= $person;
// $copyPerson["lname"]= "Rony";
// print_r($person);
// print_r($copyPerson);

// copy by reference
// shallow copy

// akhane person r copyPerson same thakbe

// $person = ["fname"=>"Shaidul", "lname"=>"Islam", "age"=>"23"];
// $copyPerson= &$person;
// $copyPerson["lname"]= "Rony";
// print_r($person);
// print_r($copyPerson);

// isset()
// $name = 0;
// if (isset($name)) {
//     echo "Name is set";
// } else {
//     echo "Name is not set";
// }

// echo "\n";

// if (empty($name)) {
//     echo "Name is empty";
// } else {
//     echo "Name is not empty";
// }

// echo "\n";

// if (isset($name) && (is_numeric($name) || $name != '')) {
//     echo "Name is set not empty";
// } else {
//     echo "Name is not set not empty";}


// $string= "Shaidul isalm rony";
// $shuffled= str_shuffle($string);
// $encodeString= base64_encode($shuffled);
// echo "string: $encodeString";
// echo "\n";
// $string= "aXJudWFtZGx5b2lTcmhzYWw=";
// echo base64_decode($string);

$fruits= array("apple", "banana", "cherry", "kiwi", "bangi");
$fruits1=["mango", "orange", "grapes", "watermelon", "papaya", "pineapple"];

$newFruits1= array_slice($fruits,0,1);
$newFruits2= array_slice($fruits1, 2,null, true);

// $marge= array_merge($newFruits1, $newFruits2);
// print_r($newFruits1);
// print_r($newFruits2);
// print_r($marge);

$newFruitsPlus= $newFruits1 + $newFruits2;
print_r($newFruitsPlus);