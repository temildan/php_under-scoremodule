<?php
require_once('ticket.php');

$ticket1 = new ticket();
$ticket1->quantity = 10;
$ticket1->unit_price = 50;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><?= $ticket1->quantity ?></p>
    <p><?= $ticket1->unit_price ?></p>
    <p><?= $ticket1->getTotal() ?></p>
</body>

</html>