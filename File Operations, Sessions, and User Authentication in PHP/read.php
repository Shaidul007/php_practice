<?php

//file pointer
// $fp= fopen("./data.txt", "r");
// while ($line = fgets($fp)) {
//     echo nl2br($line);
// }

$fp= fopen("./data.txt", "r");
$data= fgets($fp, 6); //read 6 bytes mane 6 ta shonka porte cahi
echo nl2br($data);