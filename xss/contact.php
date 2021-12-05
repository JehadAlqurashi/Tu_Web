<?php
require '../database.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user  = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $connect->query("insert into contact(name,email,subject)values('$user','$email','$message')");
    $success = "<span style='position:relative;left:30px;left:650px'>Thank You For Contacting ROSA</span>";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ROSA- Restaurant</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
                  <li class="active"><a href="index.php">Home<span class="underline"></span></a></li>
                  <li class="active"><a href="contact.php">Contact<span class="underline"></span></a></li>
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
          <h1 class="display-1">Contact Us</h1>
          <div class="arrow">
              <span class="left"></span>
              <i class="fas fa-asterisk"></i>
              <span class="right"></span>
          </div>
          <span>Ready To Be Opened</span>
      </div>
      <svg class="svg-down" width="192" height="61" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 160.7 61.5" enable-background="new 0 0 160.7 61.5" xml:space="preserve"><path fill="currentColor" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path></svg>
      <div class="arrow-down">
      </div>
  </header>
  <!--End Header-->

  <!--start About Us-->
  <div class="about-us">
     <!--Section: Contact v.2-->
<section class="mb-4">

<!--Section heading-->
<h2 style="position:relative;left:300px" class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
<!--Section description-->
<p style="position:relative;left:300px" class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
    a matter of hours to help you.</p>

<div class="row" style="position:relative;left:400px">

    <!--Grid column-->
    <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="" method="post">

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control">
                        <label for="name" class="">Your name</label>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="email" name="email" class="form-control">
                        <label for="email" class="">Your email</label>
                    </div>
                </div>
                <!--Grid column-->

            </div>

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-12">

                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                        <label for="message">Your message</label>
                    </div>

                </div>
            </div>
            <!--Grid row-->

        </form>

        <div class="text-center text-md-left">
            <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
        </div>
        <div class="status"></div>
    </div>

    <!--Grid column-->

    <!--Grid column-->
    <div class="col-md-3 text-center">
        <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>San Francisco, CA 94126, USA</p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <p>+ 01 234 567 89</p>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>contact@mdbootstrap.com</p>
            </li>
        </ul>
    </div>
    <!--Grid column-->

</div>
<?php
        if(isset($success)){
            echo $success;
        }

        ?>
</section>
<!--Section: Contact v.2-->
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

  <!--End Menu-->

  <!--Start fixed-image-->
  <!--End fixed-image-->

  <!--start About Us-->

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