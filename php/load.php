<?php
error_reporting(0);
include_once ("connect.php");
$id = $_GET['id'];
$name = $_GET['name'];
$price = $_GET['price'];
$quantity = ($_GET['quantity']);
$weight = ($_GET['weight']);
$type = ($_GET['type']);

$sqlinsert = "INSERT INTO PRODUCT (ID,NAME,PRICE,QUANTITY,WEIGHT,TYPE) VALUES ('$id','$name','$price','$quantity','$weight','$type')";

if ($conn->query($sqlinsert) === true)
{
    echo "success";
  
}
else
{
    echo "failed";
}
//https://socbookweb.000webhostapp.com/register_user.php?name=aldy&email=asdasdasa@gmail.com&phone=1111111&password=222
?>