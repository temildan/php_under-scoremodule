<?php

require_once "pdo.php";
$query = $pdo->prepare("SELECT * FROM user");
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);

$query = $pdo->prepare("SELECT * FROM post JOIN user ON user.id = post.user_id" );

$query->execute();
$posts = $query->fetchALL(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
foreach($users as $user){ ?>
<p><?=$user["first_name"]."".$user["last_name"]?> <a href="detail.php?id=<?=$user["id"]?>">details</a></p>
<?php }


    ?>
     <section>
        <h2>posts:</h2>
        <?php foreach($posts as $post){?>
            <article>
<p><?=$post["content"];?>  </p>
<p><?=$post["date"];?>-posted by <?=$postx["first_name"];?>  </p>
</article>
        <?php } ?>
       
</section>
</body>
</html>