<?php

// encryption();

// $normalText = "Hello world";
// $newText    = "";
// for ( $i = 0; $i < strlen( $normalText ); $i++ ) {
//     $lette    = $normalText[$i];
//     $ascii    = ord( $lette );
//     $newAscii = $ascii + 1;

//     $newLetter = chr( $newAscii );
//     $newText .= $newLetter;
// }

// echo $newText . "\n";

// // decryption();
// $normalText = "Uryy|-`unvq�y";
// $newText    = "";

// // $stingLen = strlen( $normalText );

// for ( $i = 0; $i < strlen( $normalText ); $i++ ) {
//     $letter   = $normalText[$i];
//     $ascii    = ord( $letter );
//     $newAscii = $ascii - 1;

//     $newLetter = chr( $newAscii );
//     $newText .= $newLetter;
// }

// echo $newText;

// for ( $j = 0; $j <= 20; $j++ ) {
//     $newText = "";
//     for ( $i = 0; $i < strlen( $normalText ); $i++ ) {
//         $letter   = $normalText[$i];
//         $ascii    = ord( $letter );
//         $newAscii = $ascii - $j;

//         $newLetter = chr( $newAscii );
//         $newText .= $newLetter;
//     }
//     echo "$j / $newText . \n";
// }

// echo ord($normalText[0])- ord($newText[0]); //ecnryption theke decryption - kore o ber kora jay

// shuffle()

// $string= "Shaidul";
// $shuffleString= str_shuffle($string);
// echo $shuffleString;

// encryption

// $string = "Hello world";
// $key    = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789 ";
// // $shuffleString= str_shuffle($key);
// $newKey = "fwdth3x4AKFTg GkRz9CYayZWpLqS7muEcJIlijnDQV5vMNU1o2Xsb60e8HBrPO ";
// // echo $key;

// $encryptionText = "";
// for ( $i = 0; $i <= strlen( $string ); $i++ ) {
//    $c
// }

// echo $encryptionText;

$string = "Hello world";

$key = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789 ";
// $newKey= str_shuffle($key);
$newKey="BJReh7DxLfX4KOaIq5EdQi62THvMncAZlY1wyP80C3okmUpsrjStgFGV bWuz9N";
// echo $newKey;

$encryotedText = "";

for($i=0; $i<strlen($string); $i++){
    $currentLetter= $string[$i];
    // echo $currentLetter;
    $currentPosition= strpos($key, $currentLetter);
    $replacement= $newKey[$currentPosition];
    $encryotedText .= $replacement;
}

echo $encryotedText;


// drcrypted

$text="Yh44aN6a54e";
$decryptedText= "";

for($i= 0; $i<strlen($text); $i++){
    $currentLetter= $text[$i];
    $currentPosition= strpos($newKey, $currentLetter);
    $replacement= $key[$currentPosition];
    $decryptedText .= $replacement;
}

echo $decryptedText;

// 38