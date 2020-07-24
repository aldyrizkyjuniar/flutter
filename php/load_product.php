<?php
error_reporting(0);
include_once ("connect.php");
$name = $_POST['name'];
$type = $_POST['type'];
$prid = $_POST['prid'];

if (isset($type)){
    if ($type == "Recent"){
        $sql = "SELECT * FROM PRODUCT ORDER BY DATE DESC lIMIT 20";    
    }else{
        $sql = "SELECT * FROM PRODUCT WHERE TYPE = '$type'";    
    }
}else{
    $sql = "SELECT * FROM PRODUCT ORDER BY DATE DESC lIMIT 20";    
}
if (isset($name)){
   $sql = "SELECT * FROM PRODUCT WHERE NAME LIKE  '%$name%'";
}

if (isset($prid)){
   $sql = "SELECT * FROM PRODUCT WHERE ID = '$prid'";
}

$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    $response["products"] = array();
    while ($row = $result->fetch_assoc())
    {
        $productlist = array();
        $productlist["id"] = $row["ID"];
        $productlist["name"] = $row["NAME"];
        $productlist["price"] = $row["PRICE"];
        $productlist["quantity"] = $row["QUANTITY"];
        $productlist["sold"] = $row["SOLD"];
        $productlist["weigth"] = $row["WEIGHT"];
        $productlist["type"] = $row["TYPE"];
        array_push($response["products"], $productlist);
    }
    echo json_encode($response);
}
else
{
    echo "nodata";
}
?>