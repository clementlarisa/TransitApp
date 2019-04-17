<?php

//$con = mysqli_connect("localhost","root","","bazadate");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "transport";

$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
?>