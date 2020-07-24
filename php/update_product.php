<?php
error_reporting(0);
include_once("connect.php");
$prid = $_POST['prid'];
$prname  = ucwords($_POST['prname']);
$quantity  = $_POST['quantity'];
$price  = $_POST['price'];
$type  = $_POST['type'];
$weight  = $_POST['weight'];
$encoded_string = $_POST["encoded_string"];
$decoded_string = base64_decode($encoded_string);

$sqlupdate ="UPDATE PRODUCT SET NAME = '$prname', PRICE = '$price', QUANTITY='$quantity', TYPE='$type', WEIGHT='$weight' WHERE ID = '$prid'";

if ($conn->query($sqlupdate) === true)
{
    if(isset($encoded_string)){
        file_put_contents($pat)
    }
    echo "success";
}
else
{
    echo "failed";
}
    
$conn->close();
?>