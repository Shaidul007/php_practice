<?php

// $fp= fopen("./data.txt", "w");
// for($i=0; $i<10; $i++){

//     fwrite($fp, "Hello i'm text data ecxhanged {$i} \n");
// }
// //add new line data
// fwrite($fp , "Hello i'm text data ecxhanged 10 \n");

//jodi chai agher data o thakbe pore new add korle seta agher datar por theke asbhe tail a+
$fp= fopen("./data.txt", "a+");
for($i=0; $i<10; $i++){
fwrite($fp, "Hello 1 \n");}