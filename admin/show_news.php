<?php require_once('../init.php'); ?>
<?php include_once('admin_nav.php'); ?>

<?php
$id = $_GET['id'];

$article = Database::getInstance()->get('article', ['id', '=', $id]); // выводим  id

?>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="one_news">
                <h2><?= $article->first()->title;?></h2>
                <p><?= $article->first()->time;?></p>
                <div><img src="../<?= $article->first()->images;?>" alt="picture"></div>
                <p><?= $article->first()->full_text;?></p>
            </div>
        </div>
    </div>
</div>

</body>
</html