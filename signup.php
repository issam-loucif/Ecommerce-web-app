<?php
include('includes/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Amado</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/login.css">
</head>
<body>
  <main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="img/core-img/login copy.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <a href="index.php"><img src="img/core-img/logo.png" alt="logo" class="logo"></a>
              </div>
              <p class="login-card-description">Sign up </p>
              <?php
              if(isset($_POST['send'])){
                $username = $_POST['username'];
                $email =  $_POST['email'];
                $password = sha1($_POST['password']);
                $cpassword = sha1($_POST['confirmpassword']);

                if($password === $cpassword)
                {
                    $sql = "INSERT INTO register (username,email,password) VALUES ('$username','$email','$password')";
                    $result = query($sql);

                    if($result)
                    {
                        //echo "Saved";
                        header('Location: index.php');
                    }
                    else
                    {
                        echo' <div class="alert alert-success mt-4">cette adresse email existe déjà veuillez réessayer.</div>';
                      
                    }
                }
                else
                {
                  echo ' <div class="alert alert-success mt-4">Le mot de passe et la confirmation du mot de passe ne ce correspondent pas.</div>';
                
                }
              }
              ?>
              <form action="signup.php" method="post">
              <div class="form-group">
                    <label for="username" class="sr-only">Nom</label>
                    <input type="text" name="username" id="name" class="form-control" placeholder="nom">
                  </div>
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <div class="form-group mb-4">
                    <label for="confirmpassword" class="sr-only">Password</label>
                    <input type="password" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="***********">
                  </div>
                  <input name="send" id="login" class="btn btn-block login-btn" type="submit" value="Sign Up">
                  <a href="signin.php" id="login" class="btn btn-block login-btn" >Sign In</a>
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <nav class="login-card-footer-nav">
                  <a href="#!">Terms of use.</a>
                  <a href="#!">Privacy policy</a>
                </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
