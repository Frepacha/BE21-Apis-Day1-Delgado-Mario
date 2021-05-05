<?php
    require_once 'RESTful.php';
    require_once 'conn.php';

    if(isset($_GET["id"])){
        $id = ($_GET["id"] == "all") ? "" : " WHERE car_id= " .$_GET["id"];
    }else {
        $id = "";
    }
    $sql = "SELECT * FROM car $id";

    $url = 'http://localhost/week12/Day2/BE21-Apis-Day1-Delgado-Mario/Exercise_2/restFulCars/webservice.php';
    $result = curl_get($url);
    $carsJ = json_decode($result); //it turns the json into an object
    #var_dump ($carsJ);
    $cars = $carsJ->data;
    // echo $cars;
    $tbody ="";
    foreach ($cars as $data) {
        $tbody .="
            <div class='m-2 card text-center text-white bg-primary' style='width: 18rem; font-size: 1.2rem'>
                <img src='../pictures/".$data->image."' class='card-img-top img-thumbnail'>
                <p class='card-title'>".$data->name."</p>
                <div class='card-body'>
                    <p class='card-text'>Price: ".$data->price."</p>
                </div>
            </div>
        ";
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CHALLENGE API</title>
        <style>
            .marg {
                margin-top: 5%;
                background-color: coral;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <div class="container marg">
            <div class="row">
                <p><?php var_dump($carsJ); ?></p>
            </div>
            <div class="row justify-content-center marg">
                <?=$tbody;?>
            </div>
        </div>
    </body>
</html>