
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
            require_once 'RESTful.php';
            $jokes = array("joke1","banana splits","joke3","joke4","joke5","joke6","joke7");

            $rand_joke = array_rand($jokes, 2);
          /*   echo $jokes[$rand_joke[0]] . "\n"; */
/*             echo $jokes[$rand_joke[1]] . "\n";
            echo $jokes[$rand_joke[2]] . "\n"; */
            return $rand_joke;


            foreach ($jokes as $joke=>$value) {
                $url = 'http://api.serri.codefactory.live/' . $joke.$value;
                $result = curl_get($url);
                $smile = json_decode($result);
                $jocke = $smile->joke;
                //it turns the json into an object
               ; //convert fahrenheit into celsius
                echo "
                    <div class='card text-center text-white bg-primary' style='width: 18rem; font-size: 1.2rem'>
                        <p class='card-title'> Joke </p>
                        <div class='card-body'>
                            <p class='card-text'>{$jocke}</p>
                        </div>
                    </div>";
            }
            ?>
        </div>
    </div>
</body>

</html>