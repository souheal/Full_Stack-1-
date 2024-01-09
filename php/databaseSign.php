<?php
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "signin/up";
$conn = mysqli_connect($hostName , $dbUser , $dbPassword , $dbName);
if (!$conn) {
    die("something went wrong");
}
?>