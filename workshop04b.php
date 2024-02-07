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



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop4</title>
</head>

<body>

<h2>workshop04b
</h2>


       
<form action="" method="post">
    <p> <label for="age">please enter your age:</label>
        <input type="number" name="age" value="ok"></p>
        <input type="submit" value="ok">
    </form>
    <?php 
if(isset($_POST["age"])) {?>

    
    <h3>You are allowed to play the following games:</h3>
    <ul>
        <?php foreach ($games as $game) {
            $result = checkGameAge($game["minimumAge"], $_POST["age"]);
        ?>
            <?php if ($result) { ?>
                <li><?= $game["name"] ?></li>
            <?php } ?>
        <?php } ?>
    </ul>
<?php }?>
</body>

</html>