<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ROSA- Restaurant</title>
    <link rel="stylesheet" href="css/index.css">

    <meta name="description" content="ROSA is an enchanting Parallax Restaurant WordPress Theme that allows you to tell your story in an enjoyable way, perfect for restaurants or coffee shops.">
    <meta name="viewport" content="width = device-width, initial-scale = 1, shrink-to-fit = no">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988515/rosa-favicon.png">

    <!--Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro" rel="stylesheet">
    <!--Fonts-->

    <!--FontAwesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <!--FontAwesome-->

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/main.min.css">
</head>

<body class="stop-scroll">

  <!--[if lte IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

  <!--Start loader-->
  <div class="loader-wrap">
      <div class="loader">
          <span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span><span class="loader-item"></span>
      </div>
  </div>
  <!--End loader-->

  <!--Start Dots-->
  <div class="dots">
      <div class="active one" data-x="header"></div>
      <div class="two" data-x=".recipes"></div>
      <div class="three" data-x=".fixed-image"></div>
  </div>
  <!--End Dots-->

 <!--Start Header-->
  <header>
      <nav>
          <div class="logo">
              <a href="index.html"><img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988515/logo-rosa-white.png" alt="Rosa Logo"></a>
          </div>
          <div class="toggle">
              <span class="first"></span>
              <span class="middle"></span>
              <span class="last"></span>
          </div>
          <div class="navigation-bar" style="position:absolute;left:200px">
              <ul>
                  <li class="active"><a href="index.html">Home<span class="underline"></span></a></li>
                  <li class="active"><a href="index.html">Contact<span class="underline"></span></a></li>
              </ul>
          </div>
          <div class="navigation-bar" style="position:absolute;left:1500px">
          <?php
                if(isset($_SESSION['id'])){
                    ?>
                    <ul>
                    <li class="active"><a href="dashboard.php?id=<?php echo $_SESSION['id']; ?>">Dashboard<span class="underline"></span></a></li>
                </ul>
                <?php
                }else{
                    ?>
                <ul>
                    <li class="active"><a href="login.php">Login<span class="underline"></span></a></li>
                </ul>
                <?php

                }
          ?>

          </div>
      </nav>
      <div class="text">
          <h2>Welcome</h2>
          <h1>THE ROSA</h1>
          <div class="arrow">
              <span class="left"></span>
              <i class="fas fa-asterisk"></i>
              <span class="right"></span>
          </div>
          <span>Ready To Be Opened</span>
          <div class="button"><button>Explore</button></div>
      </div>
      <svg class="svg-down" width="192" height="61" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve"><path fill="currentColor" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path></svg>
      <div class="arrow-down">
      </div>
  </header>
  <!--End Header-->

  <!--start About Us-->
  <div class="about-us">
      <div class="text">
          <h2>Discover</h2>
          <h3>Our Story</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>Rosa is a restaurant, bar and coffee roastery located on a busy corner site in Farringdon’s Exmouth Market. With glazed frontage on two sides of the building, overlooking the market and a bustling London intersection.</p>
          <div><a class="a-CTA" href="#">About Us</a></div>
      </div>
      <div class="image-container">
          <div class="image image1">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988527/vertical-photo-1.jpg" alt="Food Photo">
          </div>
          <div class="image image2">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988532/vertical-photo-2.jpg" alt="Food Photo">
          </div>
      </div>
  </div>
  <!--End About Us-->

  <!--start Recipes-->
  <div class="recipes">
      <div class="image"></div>
      <div class="text">
          <h2>Tasteful</h2>
          <h3>Recipes</h3>
      </div>
  </div>
  <!--End Recipes-->

  <!--start Menu-->
  <div class="menu">
      <div class="box-model">
          <i class="fas fa-times fa-2x close"></i>
          <div class="arrow">
              <div class="arrow arrow-right"></div>
              <div class="arrow arrow-left"></div>
          </div>
          <div class="box-image-container">
              <div class="box-image">
                  <img src=""  alt="Food Photo">
              </div>
          </div>
      </div>
      <div class="menu-image-container">
          <div class="image active">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988517/big-menu-thumb-1.jpg" alt="Food Photo">
          </div>
          <div class="image">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988526/big-menu-thumb-2.jpg" alt="Food Photo">
          </div>
          <div class="image">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988525/big-menu-thumb-4.jpg" alt="Food Photo">
          </div>
          <div class="image">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988524/big-menu-thumb-6.jpg" alt="Food Photo">
          </div>
      </div>
      <div class="text">
          <h2>Discover</h2>
          <h3>Menu</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>For those with pure food indulgence in mind, come next door and sate your desires with our ever changing internationally and seasonally inspired small plates.  We love food, lots of different food, just like you.</p>
          <div><a class="a-CTA" href="#">View The Full Menu</a></div>
      </div>
  </div>
  <!--End Menu-->

  <!--Start fixed-image-->
  <div class="fixed-image">
      <div class="text">
          <h2>The Perfect</h2>
          <h3>Blend</h3>
      </div>
  </div>
  <!--End fixed-image-->

  <!--start About Us-->
  <div class="reservation">
      <div class="text">
          <h2>Culinary</h2>
          <h3>Delight</h3>
          <div><i class="fas fa-asterisk"></i></div>
          <p>We promise an intimate and relaxed dining experience that offers something different to local and foreign patrons and ensures you enjoy a memorable food experience every time.</p>
          <div><a class="a-CTA" href="#">Make a Reservation</a></div>
      </div>
      <div class="image-container">
          <div class="image image1">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988518/bacon-1.jpg" alt="Food Photo">
          </div>
          <div class="image image2">
              <img src="https://res.cloudinary.com/abdel-rahman-ali/image/upload/v1535988518/bacon-2.jpg" alt="Food Photo">
          </div>
      </div>
  </div>
  <!--End About Us-->

  <!--Start Footer-->
  <footer>
      <div class="text">
          <h2>ABOUT ROSA</h2>
          <div><i class="fas fa-asterisk"></i></div>
          <p>ROSA is an enchanting and easy-to-use parallax Restaurant WordPress theme that allows you to tell your story in a dynamic, narrative and enjoyable way, making it perfect for restaurants, bakeries, bars or coffee shops.</p>
      </div>
      <div class="contact-container">
        <div class="social-media">
            <h3>Follow Along</h3>
            <div class="links">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
          <div class="newsletter">
            <h3>NewsLetter</h3>
              <form method="post">
                  <input type="email" name="email" placeholder="Type Your Email">
                  <i class="fas fa-envelope"></i>
              </form>
          </div>
      </div>
  </footer>
<!--End Footer-->

<!--Start Copy-Right-->
  <div class="copyright">
      <svg class="svg-up" width="192" height="61" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve"><path fill="#262526" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path></svg>
      <i class="fas fa-angle-double-up arrow-up"></i>
      <ul class="info">
          <li>&copy; ROSA 2017</li>
          <li>13 Hanway Square, London</li>
          <li>Tel: 71494563</li>
          <li>Handcrafted with love by <a href="#">Pixelgrade</a> Team</li>
      </ul>
      <ul class="CTA">
          <li><a href="#">PERMISSIONS AND COPYRIGHT</a></li>
          <li><a href="#">CONTACT THE TEAM</a></li>
      </ul>
  </div>
  <!--End Copy-Right-->

  <!-- Add your site or application content here -->
  <script src="js/main.js"></script>
  <script src="js/main.min.js"></script>
</body>

</html>
<script src="js/index.js"></script>