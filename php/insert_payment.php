<?php
error_reporting(0);
include_once ("connect.php");
$orderid = $_GET['orderid'];
$billid = $_GET['billid'];
$total = $_GET['total'];
$userid = ($_GET['userid']);
$date = ($_GET['date']);


$sqlinsert = "INSERT INTO PAYMENT (ORDERID,BILLID,TOTAL,USERID,DATE) VALUES ('$orderid','$billid','$total','$userid','$date')";

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