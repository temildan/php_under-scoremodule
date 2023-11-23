<?php
$users =
    [
        ["first_name" => "john", "last_name" => "doe", "age" => "35"],
        ["first_name" => "jani", "last_name" => "doe", "age" => "35"],
        ["first_name" => "khalid", "last_name" => "doe", "age" => "35"],
        
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
    <ul> <?php
foreach($users as $users){?>
<li><?=$users["first_name"];?></li>
   
  <?php }?> 
</ul>
   
</body>
</html>