<?php

require_once "pdo.php";

$user_id = $_GET['id'];

$query = $pdo->prepare("SELECT * FROM user WHERE id = :id");
$query->bindValue(':id', $user_id, PDO::PARAM_INT);
$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);

$query = $pdo->prepare("SELECT * FROM post WHERE user_id = :id");
$query->bindValue(':id', $user_id, PDO::PARAM_INT);
$query->execute();
$posts = $query->fetchALL(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>User information:</h1>
    <p>First name: <?=$user['first_name']; ?></p>
    <p>Last name: <?=$user['last_name']; ?></p>
    <p>Email: <?=$user['email']; ?></p>

    <section>
        <h2>posts:</h2>
        <?php foreach($posts as $post){?>
            <article>
<p><?=$post["content"];?>  </p>
<p><?=$post["date"];?>-posted by <?=$user["first_name"];?>  </p>
</article>
        <?php } ?>
       
</section>
</body>
</html>