<?php 
require_once "pdo.php";



$query = $pdo->prepare("SELECT post.id as post_id, post.content as post_content, post.date as post_date,
user.id as user_id, user.first_name as user_first_name, user.last_name as user_last_name
FROM post JOIN user ON user.id = post.user_id;" );

$query->execute();
$posts = $query->fetchALL(PDO::FETCH_ASSOC);
?>

<?php require_once"templates/header.php" ?>



<div class="container">
    <h1>latest posts</h1>
</div>
<div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php foreach ($posts as $post){?>
        <div class="col">
          <div class="card shadow-sm">
<img src="assets/images/default-article.webp" alt="default-article">            <div class="card-body">
              <p class="card-text"><?=substr($post["post_content"],0,200)."...";?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="post_detail.php?id=<?=$post["post_id"]?>" type="button" class="btn btn-sm btn-outline-secondary">read more</a>
                  <a href="user.php?id=<?=$post["user_id"]?>" type="button" class="btn btn-sm btn-outline-secondary">posted by <?=$post["user_first_name"] ?></a>
                </div>
                <small class="text-body-secondary"><?=$post["post_date"] ?></small>
              </div>
            </div>
          </div>
        </div>
        <?php }?>
      </div>
    </div>
  
<?php require_once"templates/footer.php" ?>
