<?php
session_start();
error_reporting(0);
require '../database.php';
if(!isset($_SESSION['id'])){
    header("location:login.php");
    die("Not Allowed");
}
if(!isset($_GET['id']) || !$_GET['id']){
    die("Invalid");
}
$id = mysqli_real_escape_string($connect,htmlspecialchars($_GET['id']));
$user = $connect->query("select * from users2 where id='$id'")->fetch_assoc();

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username =$_POST['username'];
    $check = $connect->query("select * from users2 where username='$username'");
    if(!$check->num_rows) {
        $connect->query("update users2 set username='$username' where id='$id'");
        header("location:dashboard.php?id=" . $id);
    }
}
?>
<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>

    <!--TITLE-->
    <title>لوحة المستخدم</title>

    <!--ICON-->
    <link rel="shortcut icon" href="/DevanagariBrahmi/logo.png">
    <link rel="stylesheet" href="css/dashboard.css">
    <!--META TAGS-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta charset="UTF-8">

    <!--EXTERNAL CSS-->
    <link rel="stylesheet" href="css/dash.css">



    <!--PLUGIN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&family=Oswald:wght@300;400&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
<body>


<div class="container">
    <table>
        <tr>
            <a href="logout.php"><button  class="btn" style="background-color:white;width:200px;font-size: 20px">تسجيل خروج</button></a>
            <td>

                <section>
                    <img style="background-color: white" src="photo/picLogo.png" id="blah" alt="Avatar">
                </section>
                <h1><?php echo $user['username']; ?></h1>
            </td>
            <td>
                <form action="" method="post">
                <ul>
                    <li><b>اسم المستخدم :</b> <input type="text" name="username" id="fname" maxlength="100" value="<?php echo $user['username']; ?>" required /> <i style="float: left" class="fa fa-edit" id="edit1" onclick="document.getElementById('fname').style.pointerEvents='auto';document.getElementById('fname').focus();this.style.display='none'; document.getElementById('check1').style.display='inline-block';"></i> <i   class="fa fa-check" style="display:none;float:left;" id="check1" onclick="document.getElementById('edit1').style.display='inline-block';this.style.display='none';document.getElementById('fname').style.pointerEvents='none';"></i></li>
                    <li><b>البريد الألكتروني :</b> <input type="email" id="email" maxlength="150" value="<?php echo $user['email']; ?>" required /></li>
                    <input type="hidden" value="<?php $_GET['id']; ?>">
                    <button class="btn" style="width:100px;font-size: 20px">تعديل</button>
                </ul>
                </form>
            </td>
        </tr>

    </table>
</div>


<!--JAVASCRIPT-->
<script src="js/custom.js"></script>
<script>
    function editdetails2(){
    }

    var close = document.getElementsByClassName("closebtn");
    var i;

    for (i = 0; i < close.length; i++) {
        close[i].onclick = function(){
            var div = this.parentElement;
            div.style.opacity = "0";
            setTimeout(function(){ div.style.display = "none"; }, 600);
        }
    }
</script>
</body>
</html>