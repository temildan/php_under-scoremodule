<?php
require_once "pdo.php";

$post_id = $_GET["id"];

$query = $pdo->prepare("SELECT * FROM user WHERE id = :id");
$query->bindValue(":post_id", $post_id, pdo::PARAM_INT);

$query->execute();
$user = $query->fetch(PDO::FETCH_ASSOC);


?>

<?php require_once "templates/header.php" ?>

<div class="container">

    <article class="blog-post">

          <p>name: <?= $user["user_name"] ?> by <a href="user.php?=<?= $post["user_id"] ?>">
                <?= $user["user_first_name"] ?>
            </a>
        </p>
        <p>
            <?= $user["post_content"] ?>
        </p>

    </article>
</div>
<?php require_once "templates/footer.php" ?>