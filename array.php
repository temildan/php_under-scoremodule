<?php
$fruits=["banana","apple","pinapple"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php foreach($fruits as $fruits){
    ?>
    <p><?=$fruits?></p>
<?php }
echo $fruits[1];

?>

</body>
</html>