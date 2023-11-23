<?php
$france=["name"=>"france","capital"=>"paris","population"=>"67"];
var_dump($france);
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
<h2><?=$france["name"] ?></h2>
<h3>information</h3>
<ul>
    <li>capital:<?=$france["capital"] ?></li>
    <li>population:<?=$france["population"] ?></li>
</ul>
</body>
</html>
