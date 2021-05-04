

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jokes</title>

</head>
<body>
<?php
    $result = file_get_contents("http://api.serri.codefactory.live/random/");
    var_dump($result);

    $info = json_decode($result);
    #var_dump($info);
$jocke = $info->joke;
/*     echo $jocke; */
/*     echo "<br>";
    echo $info->id_joke; */

echo
"<div><h1 style='color: red;'>{$jocke}</h1>

</div>"
?>   

</body>
</html>