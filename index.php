<?php require_once('init.php'); ?>
<?php include_once('nav.php'); ?>


<?php

$article = Database::getInstance()->query("SELECT * FROM article ORDER BY id DESC"); 

?>


<div class="header">
    <h1>Лента новостей</h1>
</div>
<div class="container main_news_container">
    <div class="row">

        <?php foreach($article->results() as $art):?>
        <div class="col-md-6">
            <div class="news">
                <a href="one_news.php?id=<?= $art->id;?>"><h2><?= $art->title;?></h2></a>
                <p><?= $art->time;?></p>
                <div><img src="<?= $art->images;?>" alt="picture"></div>
                <p class="preview"><?= $art->preview;?></p>
            </div>
        </div>
        <?php endforeach;?>

    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>


