

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jokes</title>
<!--  here bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<?php
    $result = file_get_contents("http://api.serri.codefactory.live/random/");
/*     var_dump($result); */

    $info = json_decode($result);
    #var_dump($info);
$jocke = $info->joke;
/*     echo $jocke; */
/*     echo "<br>";
    echo $info->id_joke; */


echo "
<div class='card text-center text-white bg-primary' style='width: 18rem; font-size: 1.2rem'>
    <p class='card-title'> Joke the day</p>
    <div class='card-body'>
        <p class='card-text'>{$jocke}</p>
    </div>
</div>
<a href='api.php'><button class='btn btn-danger btn-sm' type='button'>Another Joke</button></a>
";
?>   

</body>
</html>