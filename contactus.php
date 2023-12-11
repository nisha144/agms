<?php
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Art Website </title>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->
  <!-- font-awesome icons -->
  <link href="css/fontawesome-all.min.css" rel="stylesheet" type="text/css" media="all">
  <!-- //font-awesome icons -->
  <!-- For Clients slider -->
  <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
  <!--flexs slider-->
  <link href="css/JiSlider.css" rel="stylesheet">
  <!--Shoping cart-->
  <link rel="stylesheet" href="css/shop.css" type="text/css" />
  <!--//Shoping cart-->
  <!--stylesheets-->
  <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
  <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Sunflower:500,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
  <script src="https://kit.fontawesome.com/44f1fd7011.js" crossorigin="anonymous"></script>



</head>

<body>
  <?php include('includes/header.php'); ?>

  <!----Form-->

  <div class="contactUs" style="height:fit-content">
    <div class="box">

      <div class="contact form" style="height: fit-content;">
    <h2>Get in Touch</h2>
<hr>
        <h3>Send a Message</h3>
        <form action="https://formsubmit.co/omframehouse@gmail.com" method="POST">
          <div class="formBox">
            <div class="row50">
              <div class="inputBox">
                <span> First Name</span>
                <input class="text" id="firstname" name="fisrtname" required>
              </div>
              <div class="inputBox">
                <span> Last Name</span>
                <input class="text" id="lastname" name="lastname" required>
              </div>
            </div>

            <div class="row50">
              <div class="inputBox">
                <span>Email </span>
                <input class="email" id="email" name="email" required placeholder="">
              </div>


              <div class="inputBox">
                <span>Mobile</span>
                <input type="text" id="mobile" name="mobile" required placeholder="">
              </div>
            </div>


            <div class="row100">
              <div class="inputBox">
                <span>Message</span>
                <textarea placeholder=""></textarea>
              </div>
            </div>
            <div class="row100">
              <div class="inputBox">
                <input type="submit" value="Submit">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="contact-info">
        <h3>Contact Info</h3>
        <div class="infoBox">
          <div>
            <span><ion-icon name="location-outline"></ion-icon></span>
            <p>Lazimpat, Ranibari-26, Kathmandu</p>
          </div>

          <div>
            <span><ion-icon name="mail-outline"></ion-icon></span>
            <a href="mailto:omframehouse@gmail.com">omframehouse@gmail.com</a>
          </div>

          <div>
            <span><ion-icon name="call-outline"></ion-icon></span>
            <a href="tel:9851227768">9851227768</a>
          </div>


          <!---Social-->
          <div class="sci">
            <li><a href="#"><ion-icon name="logo-facebook"></ion-icon></a></li>
            <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
          </div>


          <!---Time-->
          <div class="time">
            <h3>Opening time:</h3>
            <p>Sunday - Friday : 8:00 am - 8:00 pm <br>
              Saturday : 1:00pm - 7:00 pm </p>
          </div>



          <!------Map---->

          <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.6632441950906!2d85.3210036!3d27.727682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1948692f1c27%3A0x73d02d9f3dcc85ce!2sOm%20Frame%20House%20%26%20Art%20Gallery!5e0!3m2!1sen!2snp!4v1694759409266!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>

        </div>
      </div>
    </div>
  </div>
      <!---Info-box-->

   

      <!-- Footer ---->


      <script src="https://smtpjs.com/v3/smtp.js"></script>
      <script>
        const form = document.querySelector(".contact_form"),
          name = document.querySelector(".name"),
          email = document.querySelector(".email"),
          msg = document.querySelector(".msg");
      </script>
      <script>
        AOS.init({
          offset: 300,
          duration: 1000
        });
      </script>
      <?php include_once('includes/footer.php'); ?>
</body>

</html>