<?php

//file read korar jonno amra always ata use korbho
$myFiles= file_get_contents("./data.txt");//file read korar jonno likhe hobe file_get_contents(je data read korte chai tar location likthe hobe jemon: ./data.txt) use korte hobe
// $myFiles= file_get_contents("http://localhost:8080/hello.php");
// $newName= "Rony";//add new name
// file_put_contents("./data.txt",$newName ."\n", FILE_APPEND);//amra new kono data jodi add korte chai file_put_contents() er maddome taile je name add korbho je ta thakbe sudu agher data sob chole jabe ati likhe hoy file_put_contents(location, $variablr)
//But amra jodi chai agher data o thakbe and reload korle newName ta bar bar add hoite thakbe taile (FILE_APPEND) use korte hobe

// echo nl2br($myFiles);//nl2br holo \n ke <br> a convart kore Mane amra jokhon normal text likhe jai tokhon line ses a automatic \n add hoy ata browser a kaj kore na sudu <br>kaj kore tai nl2br use korte hobe
//28


$accessFile= file_get_contents('./data.txt');
echo nl2br($accessFile);
$new= "Rony";
file_put_contents('./data.txt', $new);
