<?php
//error_reporting(0);
$email = $_POST['email'];
$encoded_string = $_POST["encoded_string"];
$decoded_string = base64_decode($encoded_string);

$path = 'https://socbookweb.000webhostapp.com/images/'.$email.'.jpg';
echo"$path";
if (file_put_contents($path, $decoded_string)){
    echo 'success';
}else{
    echo 'failed';
}

?>