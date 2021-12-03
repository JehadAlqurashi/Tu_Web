<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["cv"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); 
    if($imageFileType =="jpg" || $imageFileType == "pdf"){
        move_uploaded_file($_FILES["cv"]["tmp_name"],getcwd() . "/upload/"  . $_FILES["cv"]["name"]);
        $success =  "Upload Success";
    }else{
        $success =  "Exit Allow : jpg,pdf";
    }
}


?>
<html>
    <head>
        <title>Resto</title>
        <link rel="stylesheet" href="css/index.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    </head>
    <body>
    <header>
    <div class="wrapper">
      <h1 class="logo">Resto</h1>
      <nav>
        <h2>Main Navigation</h2>
        <ul>
          <li><a href="index.php?file=home.php">Home</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- Start homepage content -->

  <div id="main-banner">
    <img src="https://image.ibb.co/hiVAvv/banner.jpg" alt="Welcome to Resto">
  </div>

  <div class="wrapper">

      <center>
      <h2 class="job">Job Application</h2>
      </center>
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">
        <label for="formFile" class="form-label mt-4">Upload CV</label>
        <input class="form-control" name="cv" type="file" id="formFile"><br>
        <?php
            if(isset($success)){
                echo $success. "<br>";
            }
        ?>
        <button class="btn btn-light">Upload</button>
        </div>
      </form>
  </div>


  <!-- End homepage content -->

  <footer>
    <div class="wrapper">
      <ul>
        <li>New York Restaurant</li>
        <li>3926 Anmoore Road</li>
        <li>New York, NY 10014</li>
        <li>718-749-1714</li>
      </ul>
      <ul>
        <li>France Restaurant</li>
        <li>68, rue de le Couronne</li>
        <li>75002 PARIS</li>
        <li>02.94.23.69.56</li>
      </ul>
      <ul>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul>
        <li><img src="https://image.ibb.co/iivzoF/logo_footer.png" alt="logo"></li>
        <li>&copy; All Rights Reserved 2017</li>
      </ul>
    </div>
  </footer>
    </body>

</html>