<?php
$games = [
    ["name" => "GTA V", "minimumAge" => 18],
    ["name" => "New Super Mario", "minimumAge" => 3],
    ["name" => "Morrowind", "minimumAge" => 13],
];

function checkGameAge(int $gameAge, int $userAge): bool
{
    if ($userAge >= $gameAge) {
        return true;
    } else {
        return false;
    }
}

$age = 19;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop4</title>
</head>

<body>
    <h1>Workshop4</h1>
    <h2>Part 1</h2>
    <?php

    $resultForGTA = checkGameAge($games[0]["minimumAge"], $age);
    if ($resultForGTA === true) {
        echo "You are allowed to play " . $games[0]["name"];
    } else {
        echo "You are not allowed to play " . $games[0]["name"];
    }
    ?>
    <h2>Part 2</h2>
    <h3>You are allowed to play the following games:</h3>
    <ul>
        <?php foreach ($games as $game) {
            $result = checkGameAge($game["minimumAge"], $age);
        ?>
            <?php if ($result) { ?>
                <li><?= $game["name"] ?></li>
            <?php } ?>
        <?php } ?>
    </ul>

</body>

</html>