<?php
error_reporting(0);
include_once("connect.php");
$email = $_POST['email'];
$password = sha1($_POST['password']);

$sqlquantity = "SELECT * FROM CART WHERE EMAIL = '$email'";

$resultq = $conn->query($sqlquantity);
$quantity = 0;
if ($resultq->num_rows > 0) {
    while ($rowq = $resultq ->fetch_assoc()){
        $quantity = $rowq["CQUANTITY"] + $quantity;
    }
}

$sql = "SELECT * FROM tbuser WHERE EMAIL = '$email' AND PASSWORD = '$password'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result ->fetch_assoc()){
        echo $userdata = "success,".$row["NAMA"].",".$row["EMAIL"].",".$row["PHONE"].",".$row["CREDIT"].",".$quantity;
    }
}else{
    echo "failed";
}