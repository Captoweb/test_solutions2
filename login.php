<?php require_once('init.php'); 

if(Input::exists()) {
 

      $validate = new Validate();

      $validate->check($_POST, [
          'email' => ['required'=>true, 'email'=>true],
          'password' => ['required'=>true]
      ]);

      if($validate->passed()) {

          $user = new User;
          $login = $user->login(Input::get('email'), Input::get('password'));

          if($login) {
            header('Location: admin/index.php');
          } else {
              echo 'login failed';
          }
      } else {
          foreach ($validate->errors() as $error) {
            echo "<div class='validate'>" . $error . "</div>";
          }
      }
  
}

?>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<div class="container">
<?php echo Session::flash('success'); ?>

      <div class="form">
    <h1>Login</h1>
    
      <form action="" method="post">

          <div class="form-group">
            <label for="ex">Email address</label>
            <input type="email" class="form-control" id="ex" aria-describedby="emailHelp"name="email" value="<?php echo Input::get('email');?>">
          </div>

          <div class="form-group">
            <label for="ex">Password</label>
            <input type="password" class="form-control" id="ex" name="password">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div>
