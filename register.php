<?php

require_once('init.php');

if(Input::exists()) {
  $validate = new Validate();

  $validation = $validate->check($_POST, [
    'username' => [
       'required' => true,
       'min' => 2,
       'max' => 15,
       'unique' => 'users'
      ],
      'email' => [
        'required' => true,
        'unique' => 'users'
       ],
      'password' => [
        'required' => true,
        'min' => 3
     ],
    'password_again' => [
      'required' => true,
      'matches' => 'password'
     ]
  ]);



if($validation->passed()) {
 
    $user = new User;

    $user->create([
        "email" => Input::get('email'),
        "password" => password_hash(Input::get('password'),PASSWORD_DEFAULT),
        "username" => Input::get('username')
    ]);


    Session::flash('success', 'register success');
    header('Location: index.php');

}else {
    foreach($validation->errors() as $error) {
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
    <h1>Registry</h1>
    
      <form action="" method="post">

         <div class="form-group">
            <label for="ex">Username</label>
            <input type="text" class="form-control" id="ex" name="username" value="<?php echo Input::get('username');?>">
          </div>

          <div class="form-group">
            <label for="ex">Email address</label>
            <input type="email" class="form-control" id="ex" aria-describedby="emailHelp"name="email" value="<?php echo Input::get('email');?>">
          </div>

          <div class="form-group">
            <label for="ex">Password</label>
            <input type="password" class="form-control" id="ex" name="password">
          </div>

          <div class="form-group">
            <label for="ex">Password again</label>
            <input type="password" class="form-control" id="ex" name="password_again">
          </div>
          <br>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </div>
