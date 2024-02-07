<?php
require_once "Product.php";
$Product1=new product();
$Product1->name = "dell inspiron 15";
$Product1->price = 1000;
$Product1->vat = 20;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?= $product1->name ?></h1>
    <p>Price: <?=$product1->price ?> €</p>
</body>
</html>
