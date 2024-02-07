<?php
$first_name="janitha";
$last_name="chathuranka";
function displayfullname(string $first_name,string $last_name){
    return $first_name . " " . $last_name;

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ecsercise06</h1>
    <p><?=displayfullname($first_name,$last_name);?></p>
</body>
</html>
