<?php require_once('init.php'); ?>
<?php include_once('nav.php'); ?>
<?php
$id = $_GET['id'];

$article = Database::getInstance()->get('article', ['id', '=', $id]); // выводим  id

?>




<div class="container one_news_container">
    <div class="row">
        <div class="col-md-12">
            <div class="one_news">
                <h2><?= $article->first()->title;?></h2>
                <p><?= $article->first()->time;?></p>
                <div><img class="one_img" src="<?= $article->first()->images;?>" alt="picture"></div>
                <p><?= $article->first()->full_text;?></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>