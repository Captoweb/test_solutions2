<?php require_once('../init.php'); ?>
<?php include_once('admin_nav.php'); ?>

<?php



    $validate = new Validate();
  
    $validation = $validate->check($_POST, [
        'title_name' => [
            'required' => true
        ],
        'preview_name' => [
            'required' => true,
            'min'    =>  '20'
        ],
        'full_text_name' => [
            'required' => true,
            'min'    =>  '20'
        ]
    ]);

if(Input::exists()) {


    if($validation->passed()) {

        Database::getInstance()->insert('article',  [

            "title" => Input::get('title_name'),
            "preview" => Input::get('preview_name'),
            "full_text" => Input::get('full_text_name'),
            "images" => "images/".$_FILES['image']['name'],
            
        
        ]);
        header("Location: /test-solutions/admin/index.php");
       
    } else {
        foreach($validation->errors() as $error) {
            echo "<div class='validate'>" . $error . "</div>";
    }
    }
}



if(isset($_FILES['image'])){

    move_uploaded_file($_FILES["image"]["tmp_name"], '../images/'.$_FILES["image"]["name"]);
    

}


?>

<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/style.css">

<div class="container create_container">
    <div class="row">
        <div class="col-md-12">
            <h2>Добавить новость</h2>

            <form action="" class="form1" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="title">Заголовок</label>
                    <input type="text" id="title" name="title_name" class="form-control" value="">
                </div>

                <div class="form-group">
                    <label for="pr_name">Анонс</label>
                    <textarea name="preview_name" id="pr_name" class="form-control" rows="3" ></textarea>
                </div>

                <div class="form-group">
                    <label for="full_text">Полный текст</label>
                    <textarea name="full_text_name" id="full_text" class="form-control" rows="6" ></textarea>
                </div>


                    <div class="form-group">
                        <label for="example">Upload a picture</label>
                        <input type="file" name="image" class="form-control-file" id="example">
                    </div>


                <div class="form-group">
                    <button class="btn btn-warning" type="submit">Добавить</button>
                </div>
            </form>

        </div>
    </div>
</div>

