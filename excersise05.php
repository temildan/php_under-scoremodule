<?php
$game =
    [
        ["name" => "puhg", "type" => "sport", "editor" => "tencent"],
        ["name" => "cod", "type" => "fds", "editor" => "activision"],
        ["name" => "gta", "type" => "sport", "editor" => "activision"],


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
    <ul>
        <?php
        foreach ($game as $game) { ?>
            <li>
                <?= $game["name"]; ?>
                <?= $game["type"]; ?>
                <?= $game["editor"]; ?>
            </li>


        <?php } ?>
    </ul>
</body>

</html>