<?php
/*
//write korle old data delete hoye jay
$fp= fopen("data.txt", "w");// data aghe khola hobe
for($i=0; $i<10; $i++){
    fwrite($fp, "Hello Shaidul {$i} \n");
}
//jodi notun line a likthe chai 
fwrite($fp, "Hello Rony \n");
*/
$fp= fopen("data.txt", "a+");// data aghe khola hobe
for($i=0; $i<10; $i++){
    fwrite($fp, "Hello Rony {$i} \n");
}
//jodi notun line a likthe chai 
// fwrite($fp, "Hello Rony \n");