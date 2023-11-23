<?php 
$movies=[
["title"=>"copera","year"=>"1998"],
["title"=>"avatar","year"=>"2010"],
["title"=>"fast&furies","year"=>"2022"],
["title"=>"leo","year"=>"1990"],

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
<ul>
<?php 
            $oldmovie = null;
        ?>
        <?php foreach ($movies as $movie) { 
              if ($oldmovie  === null || $movie['year'] < $oldmovie['year']) {
                $oldmovie = $movie;
            } ?>

            <li>
                <h2><?= $movie["title"]; ?></h2>
                <p>year: <?= $movie["year"]; ?></p>
              
            </li>
        <?php } ?>
    </ul>
    <h2>oldmovie:</h2>
    <p><?=$oldmovie["title"] ?> rileashed year of <?=$oldmovie["year"] ?></p>


</body>
</html>