<?php

//$fp= fopen("./storage/student.txt", "r"); //ata sudu matro mac / linux a kaj korche
// $fp= fopen(".".DIRECTORY_SEPARATOR."storage".DIRECTORY_SEPARATOR."student.txt", "r"); 
// while ($line= fgets($fp)) {
//     echo nl2br($line);
// }

//file check korar jonno 

// echo file_exists("./data.txt"); // ata ki 1ta file kina ta check korar jonno
echo is_dir("./storage"); // ata ki 1ta folder kina ta check korar jonno