<?php
$user=["first_name"=>"justin","last_name"=>"temildan","email"=>"temil.gyz@gmail.com"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<H1>ASSOSIATIVE ARRAY</H1>
<h2><?=$user["first_name"] ?></h2>
<h3>information</h3>
<ul>
    <li>first_name:<?=$user["first_name"] ?></li>
    <li>last_name:<?=$user["last_name"] ?></li>
    <li>email:<?=$user["email"] ?></li>
</ul>
</body>
</html>