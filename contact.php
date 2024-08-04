<?php 

    include("functions/include.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- title -->
  <title>Vegmart | Contact</title>

  <?php
    include("functions/head.php");
  ?>

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
  <?php
    include("functions/navbar.php");
  ?>
  <!-- end header -->
  
  <!-- breadcrumb-section -->
  <div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
          <div class="breadcrumb-text">
            <p>Get 24/7 Support</p>
            <h1>Contact us</h1>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end breadcrumb section -->

  <!-- contact form -->
  <div class="contact-from-section mt-150 mb-150">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
          <div class="form-title">
            <h2>Have you any question?</h2>
            <p>Feel free to contact us for any inquiry or if you encounter any problem with our services.</p>
          </div>
          <div id="form_status"></div>
          <div class="contact-form">
            <form method="POST" id="Vegmart-contact" action="mailto.php">
                <p>
                    <input type="text" placeholder="Name" name="name" id="name" required>
                    <input type="email" placeholder="Email" name="email" id="email" required>
                </p>
                <p>
                    <input type="tel" placeholder="Phone" name="phone" id="phone" required>
                    <input type="text" placeholder="Subject" name="subject" id="subject" required>
                </p>
                <p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message" required></textarea></p>
                <input type="hidden" name="token" value="FsWga4&@f6aw" />
                <p><input type="submit" value="Submit"></p>
            </form>
          </div>

        </div>
        <div class="col-lg-4">
          <div class="contact-form-wrap">
            <div class="contact-form-box">
              <h4><i class="fas fa-map"></i> Shop Address</h4>
              <p>34/8, Nairobi West <br> Nairobi. <br> kenya</p>
            </div>
            <div class="contact-form-box">
              <h4><i class="far fa-clock"></i> Shop Hours</h4>
              <p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p>
            </div>
            <div class="contact-form-box">
              <h4><i class="fas fa-address-book"></i> Contact</h4>
              <p>Phone: +254 797 258 173 <br> Email: botanicaltales@veggiekart.com</p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
  <!-- end contact form -->

  <!-- find our location -->
  <div class="find-location blue-bg">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p> <i class="fas fa-map-marker-alt"></i> Find Our Location</p>
        </div>
      </div>
    </div>
  </div>
  <!-- end find our location -->

  <!-- google map section -->
  <div class="embed-responsive embed-responsive-21by9">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d127640.44503854097!2d36.7919104!3d-1.3172735999999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1712608465529!5m2!1sen!2ske" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <!-- end google map section -->


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