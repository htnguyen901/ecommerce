<?php

$servername = "localhost";
$username= "adminuser";
$password = "adminuser";
$database = "shoppingmall";


// Create connection
$con = mysqli_connect($servername,$username, $password,$database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
return $con;
?>
