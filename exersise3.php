<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
  <?php
$user_name=" temil";
$age=30;
if ($age<18) { ?>
<h2>warning:</h2>
   <p> our game in not possible for payers under the age of 18 </P>
<?php }
 else  {?>
 <h2>
    allowed!
 </h2>
 </P>welcome to our website user <?=$user_name ?> </p>
 <?php
   
} ?>




</body>
</html> 