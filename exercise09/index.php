<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


if (isset($_GET["name"])) {
    echo $_GET["name"]."xxx is the best name in the world";
} else {
    echo "there is best name in the world";
}
    ?>
</body>
</html>