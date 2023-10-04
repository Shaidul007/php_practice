<?php

// $name  = "Shaidul";
// $name1 = 'Rony';
// echo "Hello {$name1}s";


// heredoc

// $firstName= "Shaidul";
// $lastName= "Islam";
// $age = 20;
// $country = "Bangladesh";

// $longText= <<<ABCD

// First Name: $firstName
// Last Name: $lastName
// Age: $age
// Country: $country
// ABCD;

// echo $longText;


// // nowdoc

// $firstName= "Shaidul";
// $lastName= "Islam";
// $age = 20;
// $country = "Bangladesh";

// $longText= <<<'ABCD'

// First Name: $firstName
// Last Name: $lastName
// Age: $age
// Country: $country
// ABCD;

// echo $longText;

// string concatenation

// $firstName= "Shaidul";
// $lastName= "Islam";

// echo $firstName . " ". $lastName;

// Access any specific word

// $string= "Shaidul Islam";

// echo $string[8];


// strlen()

$string= "Shaidul Islam";

$length= strlen($string);
// echo $length;

for($i=0; $i<$length; $i++){
    echo $string[$i];
}

