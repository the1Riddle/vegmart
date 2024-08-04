<!-- header -->
    <div class="top-header-area" id="sticker">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-sm-12 text-center">
          <div class="main-menu-wrap">
            <!-- logo -->
            <div class="site-logo">
              <a href="index.php">
                <b><span class="orange-text">Vegmart</span></b>
                <!--img src="assets/img/logo.png" alt=""-->
              </a>
            </div>
            <!-- logo -->

            <!-- menu start -->
            <nav class="main-menu">
              <ul>
                <li class="current-list-item"><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php 
                           if (isset($_SESSION["type"])) {
                              if ($_SESSION["type"] == "admin") {
                                  echo '<li><a href="receipt.php">Orders</a></li>';
                                  echo '<li><a href="profile.php">Edit Products</a></li>';
                              }
                               echo '<li><a href="functions/logout.php">Logout</a></li>';
                           }
                    else{
                      echo '<li><a href="login.php">Login</a></li>';
                    }
                    ?>
                <?php
                  if (isset($_SESSION["type"])) {
                    if ($_SESSION["type"] == "user") {
                      echo '<li><a href="shop.php">Shop</a>';
                      echo '<ul class="sub-menu">';
                      echo '<li><a href="shop.php">Shop</a></li>';
                      echo '<li><a href="cart.php">Cart</a></li>';
                      echo '<li><a href="checkout.php">Check Out</a></li>';
                      echo '</ul>';
                      echo '</li>';
                      echo '<li>';
                      echo '<div class="header-icons">';
                      echo '<a class="shopping-cart" href="cart.php"><i class="fas fa-shopping-cart"> </i></a>';
                      echo '<a href="profile.php"><i class="fas fa-user"></i> Profile</a>';
                      echo '</div>';
                      echo '</li>';
                    }
                  }
                ?>
              </ul>
            </nav>
            <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
            <div class="mobile-menu"></div>
            <!-- menu end -->
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- end header -->