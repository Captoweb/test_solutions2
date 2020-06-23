<?php require_once('../init.php'); ?>
<?php include_once('admin_nav.php'); ?>

<?php
 $id = $_GET['id'];
 

if(Input::exists()) {
   
    Database::getInstance()->update('article', $id, [
        "time" => Input::get('time_name'),
        "title" => Input::get('title_name'),
        "preview" => Input::get('preview_name'),
        "full_text" => Input::get('full_text_name'),
  
    ]);
header("Location: /test-solutions/admin/index.php");
}


?>



<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">

<div class="container edit_container">
    <div class="row">
        <div class="col-md-12">
            <h2>Обновить новость</h2>

            <form action="" class="form1" method="post">

                <?php $article = Database::getInstance()->get('article', ['id', '=', $id]);  ?>
                <div class="form-group">
                    <label for="status">Дата</label>
                    <input type="text" id="status" name="time_name" class="form-control" value="<?= $article->first()
                        ->time;?>">
                </div>

                <div class="form-group">
                    <label for="username">Заголовок</label>
                    <input type="text" id="username" name="title_name" class="form-control" value="<?= $article->first()
                        ->title;?>">
                </div>

                <div class="form-group">
                    <label for="status">Анонс</label>
                    <textarea name="preview_name" id="status" class="form-control" rows="3" ><?= $article->first()
                            ->preview;?></textarea>
                </div>

                <div class="form-group">
                    <label for="status">Полный текст</label>
                    <textarea name="full_text_name" id="status" class="form-control" rows="6" ><?= $article->first()
                            ->full_text;?></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-warning" type="submit">Обновить</button>
                </div>

            </form>
            <?php //header('Location: admin?index.php'); ?>

        </div>
    </div>
</div>
</body>
</html>