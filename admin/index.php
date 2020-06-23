<?php require_once('../init.php'); ?>
<?php include_once('admin_nav.php'); ?>

<?php

$article = Database::getInstance()->query("SELECT * FROM article ORDER BY id DESC");

?>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">
<body>

<section class="admin">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h2>Админ панель</h2>
                <a href="create_news.php" class="btn btn-success create">Добавить новость</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Дата</th>
                        <th>Фото</th>
                        <th>Заголовок</th>
                        <th>Анонс</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <?php foreach($article->results() as $art):?>
                        <tbody>
                        <tr>
                            <td><?= $art->id;?></td>
                            <td><?= $art->time;?></td>
                            <td class="mini_img"><img src="../<?= $art->images;?>" alt="picture"></td>
                            <td><?= $art->title;?></td>
                            <td><?= $art->preview;?></td>
                            <td>
                                <a href="show_news.php?id=<?= $art->id;?>" class="btn btn-info">show</a>
                                <a href="edit_news.php?id=<?= $art->id;?>" class="btn btn-warning">edit</a>
                                <a href="delete_news.php?id=<?= $art->id;?>" class="btn btn-danger" onclick="return confirm('Вы уверены?');">del</a>
                            </td>
                        </tr>
                        </tbody>
                    <?php endforeach;?>
                </table>
            </div>
        </div>
    </div>

</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
