<?php

$fp= fopen("./storage/datadir.txt", "r");
while ($line = fgets($fp)) {
    echo $line . "<br>";
}