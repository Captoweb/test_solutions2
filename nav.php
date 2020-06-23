<? $user = new User;
     $users = Database::getInstance()->query("SELECT * FROM users"); ?>
<!doctype html>
<html lang="ru">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    <title>news</title>
    </head>
    
    <nav class="navbar navbar-dark navbar-expand-md" style="background-color: #0c0c0c;">
    <div class="container">
      <a class="navbar-brand" href="index.php">News Feed</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation"> 
        <span class="navbar-toggler-icon"></span> 
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
        </ul>

        <ul class="navbar-nav justify-content-end">
        <? if ($user->isLoggedIn()): ?>
              <li class="nav-item"><a class="nav-link active" href="admin/index.php">Admin</a></li>
              <li class="nav-item"><a class="nav-link active" href="logout.php">Logout</a></li>
                    
          <? else: ?>
            <li class="nav-item"><a class="nav-link active" href="login.php">Login</a></li>
            <li class="nav-item"><a class="nav-link active" href="register.php">Register</a></li>

          <? endif; ?>
      </ul>




      </div>
      </div>
  </nav>

