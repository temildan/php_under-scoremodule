<?php

function getPriceWithVAT(float $price, float $vat)
{
    return $price * (1 + $vat/100);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 6</title>
</head>
<body>
    <h2>Exercise 6</h2>
    <h3>Dell Laptop</h3>
    <?php $productPrice = 1000; ?>
    <p>Price without VAT: <?=$productPrice?></p>
    <p>Price with VAT: <?=getPriceWithVAT($productPrice, 20); ?></p>

    <h3>Doliprane</h3>
    <?php $productPrice = 5; ?>
    <p>Price without VAT: <?=$productPrice?></p>
    <p>Price with VAT: <?=getPriceWithVAT($productPrice, 5.5); ?></p>
    
</body>
</html>