<?php

// ord()-> ati diye kono okkhor er number ber kora jay jemon a,b,c,d aghula muloto number er maddome creatre hoiche. ar ader number ber korar jonno ord function use kora hoy
 

// echo ord('b');

// chr() ata diye kono number theke tar letter ber kora jay 

// echo chr(97);

// ascii code
// mane kono text ke amra jodi nuumber or kono number ke amra jodi text diye convert kore pathate chai take ascii code bole

// find ascii code of each letter

$string= "Shaidul islam rony";
$stringLenght= strlen($string);
for($i=0; $i<$stringLenght; $i++){
    echo ord($string[$i]). "  ";
}

// amra jodi ascii code theke text ber korte chai taile array te number ghula nite hobe then chr()function diye convert korte hobe


$numbers=array(83,104,97,105,100,117,108,32,105,115,108,97,109,32,114,111,110,121);

foreach ($numbers as $number){
    echo chr($number);
}