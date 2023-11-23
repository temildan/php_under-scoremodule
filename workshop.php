<?php
$countries = [
    ["name" => "France", "population" => 66.9],
    ["name" => "Japan", "population" => 125],
    ["name" => "Ethiopia", "population" => 123],
    ["name" => "Sri Lanka", "population" => 22.8],

];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Workshop</h1>
    <h2>Countries list</h2>
    <ul>
        <?php 
            $biggerCountry = null;
        ?>
        <?php foreach ($countries as $country) {  
            if ($biggerCountry === null || $country['population'] < $biggerCountry['population']) {
                $biggerCountry = $country;
            }
            ?>
            <li><?=$country["name"]; ?>, population: <?=$country["population"]; ?></li>
        <?php } ?>
    </ul>

    <h2>Biggest country:</h2>
    <p><?=$biggerCountry["name"] ?> with a popultion of <?=$biggerCountry["population"] ?>M</p>


</body>

</html>