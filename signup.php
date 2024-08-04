<?php
include("functions/include.php");
if (isset($_SESSION["username"])) {header ("location:index.php");}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- title -->
  <title>Vegmart - SignUp</title>
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
                            <form method="POST" action="insert.php">
                              <h1>Sign Up</h1>
                              <div class="two-columns">
                                <div class="column">
                                  <div class="input-box">
                                      <input type="text" id="right-label" placeholder="First Name" name="fname" required>
                                  </div>
                                  <div class="input-box">
                                      <input type="text" id="right-label" placeholder="Last Name" name="lname" required>
                                  </div>
                                  <div class="input-box">
                                      <input type="text" id="right-label" placeholder="Address" name="address" required>
                                  </div>
                                </div>
                                <div class="column">
                                  <div class="input-box">
                                      <input type="text" id="right-label" placeholder="City" name="city" required>
                                  </div>
                                  <div class="input-box">
                                      <input type="email" id="right-label" placeholder="youremail@email.com" name="email" required>
                                  </div>
                                  <div class="input-box">
                                      <input type="password" id="right-label" name="pwd" placeholder="P@ssw0rd" required>
                                  </div>
                                </div>
                              </div>
                                <button type="submit" class="btn" value="Signup">Sign Up</button>
                                <div class="register-link">
                                    <p>Have an account? <a href="login.php">Login</a></p>
                                </div>
                              </form>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <!-- end hero area -->

  <!-- footer -->
  <?php
    include("functions/footer.php");
  ?>
  <!-- end footer -->

  <!-- JS -->
  <?php
    include("functions/js.php");
  ?>
  <!-- JS -->


</body>
</html>