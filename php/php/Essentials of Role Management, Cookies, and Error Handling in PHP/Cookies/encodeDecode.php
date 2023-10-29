<?php
function encryptCookieData($data) {
    $key="123-XYZ";
    $iv = random_bytes(openssl_cipher_iv_length('aes-256-cbc'));
    $encrypted = openssl_encrypt($data, 'aes-256-cbc', $key, 0, $iv);
    return base64_encode($iv . $encrypted);
}


function decryptCookieData($encrypted_data) {
    $key="123-XYZ";
    $encrypted_data = base64_decode($encrypted_data);
    $iv_length = openssl_cipher_iv_length('aes-256-cbc');
    $iv = substr($encrypted_data, 0, $iv_length);
    $cipher_text = substr($encrypted_data, $iv_length);
    return openssl_decrypt($cipher_text, 'aes-256-cbc', $key, 0, $iv);
}

//set cookie

// Take Data From Client & Set Cookie
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $StringData = file_get_contents("php://input");
    $PHPAsocArray = json_decode($StringData, true);  


   $value=  encryptCookieData($PHPAsocArray['username']);    


    setcookie("username", $value, [
         "expires" => time() + 3600,
         "path" => "/",
         "domain" => "localhost",
         "secure" => true,
         "httponly" => true,
         "samesite" => "Lax" 
     ]);

    echo "Cookie Set Success";
}

//read cookie

if ($_SERVER["REQUEST_METHOD"] == "GET") {

    echo  decryptCookieData($_COOKIE["username"]);

}

//destroy cookie

if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    setcookie("username", "", time() - 3600, "/");
    echo "Cookie Destroy Success";
}
//1.54