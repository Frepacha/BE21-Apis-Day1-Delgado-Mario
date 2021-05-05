<?php

// Require conn.php (DB connection) file
require_once("conn.php");

// This query will check do we have car_id in the table car
// for the provided $id
if(isset($_GET["id"])){
    $id = ($_GET["id"] == "all") ? "" : " WHERE car_id= " .$_GET["id"];
}else {
    $id = "";
}
$sql = "SELECT * FROM car $id";


// $sql = "SELECT * FROM car WHERE price > 20000";


//nur wenn wir mit der ID arbeiten
// $sql = "SELECT * FROM car WHERE car_id=$id";

// Perform a query on the DB
$result = mysqli_query($conn, $sql);



    // put all results in the rows array
    if(mysqli_num_rows($result) == 1){
        $rows = mysqli_fetch_assoc($result);
    }else {
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
    


// // Fetch the query into $row
// $row = mysqli_fetch_assoc($result);

// // Store values into the variables
// $name = $row['name'];
// $price = $row['price'];
// $image = $row['image'];

// Close the DB connection
mysqli_close($conn);
