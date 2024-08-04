<?php

include("functions/include.php");

if(isset($_SESSION["username"])){

        header("location:index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- title -->
  <title>Vegmart - Login</title>
  <?php
    include("functions/head.php");
  ?>
    <link rel="stylesheet" href="assets/css/login/styles.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
  
  <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
  
  <!-- header -->
  <div class="top-header-area" id="sticker">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
          <div class="main-menu-wrap">
            <!-- logo -->
            <div class="site-logo">
              <a href="index.php">
                <img src="assets/img/logo.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header -->

  <!-- hero area -->
    <div class="hero-area hero-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                        <div class="wrapper">
                        <form method="POST" action="verify.php">
                          <h1>Login</h1>
                          <div class="input-box">
                                <div class="small-4 columns">
                                  <label for="right-label" class="right inline">Email</label>
                                </div>
                                <div class="small-8 columns">
                                  <input type="email" id="right-label" placeholder="nayantronix@gmail.com" name="username">
                                </div>
                              </div>
                              <div class="input-box">
                                <div class="small-4 columns">
                                  <label for="right-label" class="right inline">Password</label>
                                </div>
                                <div class="small-8 columns">
                                  <input type="password" id="right-label" name="pwd">
                                </div>
                              </div>

                              <div class="remember-forgot">
                                    <label><input type="checkbox">Remember Me</label>
                                    <a href="pwd-reset.php">Forgot Password?</a>
                                </div>
                                <button type="submit" class="btn" value="Login">Login</button>
                                <div class="register-link">
                                    <p>Dont have an account? <a href="signup.php">Register</a></p>
                                </div>
                            </div>
                          </div>
                        </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <!-- footer -->
  <?php
    include("functions/footer.php");
  ?>
  <!-- end footer -->
  
  <!-- js files -->
  <?php
    include("functions/js.php");
  ?>
  <!-- end js files -->
  
</body>
</html>