<?php
$newName= "Hlw";
file_put_contents("./data.txt", $newName ."\n", FILE_APPEND);
$date = file_get_contents("./data.txt");
echo nl2br($date);