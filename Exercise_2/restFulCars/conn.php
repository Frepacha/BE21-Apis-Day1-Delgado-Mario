<?php
// DB connection parameters
$servername = "173.212.235.205";//shared IP Adresse localhost
$username = "hartlebc_yoshi";//root
$password = "Mariosan2021";//""
$dbname = "hartlebc_cars";//cars

// Create the DB connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the DB connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else {
//    echo 'conección realizada'; 
}
