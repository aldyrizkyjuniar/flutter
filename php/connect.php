<?php
$servername = "localhost";
$username   = "id12919807_book";
$password   = "loedewa04";
$dbname     = "id12919807_dbsocbook";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>