<?php
require_once "pdo.php";

$post_id = $_GET["id"];

$query = $pdo->prepare("SELECT post.id as post_id, post.content as post_content, post.date as post_date,
user.id as user_id, user.first_name as user_first_name, user.last_name as user_last_name
FROM post JOIN user ON user.id = post.user_id
where post.id=:post_id;");
$query->bindValue(":post_id", $post_id, pdo::PARAM_INT);

$query->execute();
$post = $query->fetch(PDO::FETCH_ASSOC);




$query = $pdo->prepare("SELECT * FROM comment 
                        JOIN user ON user.id = comment.user_id
                        WHERE comment.post_id = :post_id");
$query->bindValue(':post_id', $post_id, PDO::PARAM_INT);
$query->execute();
$comments = $query->fetchAll(PDO::FETCH_ASSOC);


?>

<?php require_once "templates/header.php" ?>

<div class="container">

    <article class="blog-post">
        <p class="blog-post-meta">
            <?= $post["post_date"] ?> by <a href="user.php?id=<?= $post["user_id"] ?>">
                <?= $post["user_first_name"] ?>
            </a>
        </p>
        <p>
            <?= $post["post_content"] ?>
        </p>

        <section>
        <h2>Comments</h2>
        <?php foreach($comments as $comment) { ?>
            <article class="border p-2 my-2">
                <p>
                    <?=$comment["content"]; ?>
                </p>
                <p>
                Comment added by <?=$comment["first_name"]; ?> at <?=$comment["date"]; ?>
                </p>
            </article>
        <?php } ?>
    </section>

</div>
<?php require_once "templates/footer.php" ?>