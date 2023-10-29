<?php
//$fp= File pointer/ file reference
//$fp = fopen("data.txt", "w");// Jodi file write korthe chai
//$fp = fopen("data.txt", "r");// Jodi file read korthe chai
//$fp = fopen("data.txt", "r");// Jodi file Append korthe chai
$fp = fopen("./data.txt", "r");
while ($line = fgets($fp)) {
    echo $line . "<br>";
}

//fgets();->amra jodi kono file er olpo akktu porte chai jemon 1st er 5ta shonka tahole fgets($fp, 5-> mane mane 4 ta shonka porte parbhe);
// $fp= fopen("./data.txt", "r");
// echo fgets($fp, 5);
//34