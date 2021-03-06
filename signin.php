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
            <img src="img/core-img/login.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <a href="index.php"><img src="img/core-img/logo.png" alt="logo" class="logo"></a>
              </div>
              <p class="login-card-description">Sign into your account</p>

                <?php
                                if (isset($_POST['send'])){
                                    $email = escape_string($_POST['email']);
                                    $password = escape_string(sha1($_POST['password']));
                                    $sql = " SELECT * FROM register WHERE email='$email' AND password ='$password' LIMIT 1 ";
                                    $result = query($sql);
                                    $user = fetch_array($result);
                                    if ($user !== null){
                                      $_SESSION['logged'] = true;
                                      $_SESSION['nom'] = $user['username'] ;
                                      $_SESSION['user_id'] = $user['id'] ;
                                      redirect ("index.php");
                                    }else{
                                      echo' <div class="alert alert-danger mt-4">Email ou mot de passe est incorrect.</div>';
                                    }

                                }
                              ?>

              <form  action="signin.php" method="post">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="email" required name="email" id="email" class="form-control" placeholder="Email address">
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" required name="password" id="password" class="form-control" placeholder="***********">
                  </div>
                  <input name="send" id="login" class="btn btn-block login-btn" type="submit" value="Login">
                </form>
                <a href="#!" class="forgot-password-link">Forgot password?</a>
                <p class="login-card-footer-text">Don't have an account? <a href="signup.php" class="text-reset">Register here</a></p>
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
