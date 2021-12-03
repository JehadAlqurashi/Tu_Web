<?php
require '../database.php';
// require_once 'conn/config.php';
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $error = [];
    $username = $_POST['username'];
    echo $username;
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(empty($username)){
        array_push($error,"<span style='color:red'>يجب ادخال اسم مستخدم</span>");
    }
    if(empty($email)){
        array_push($error,"<span style='color:red'>يجب ادخال البريد الألكتروني</span>");
    }
    if(empty($password)){
        array_push($error,"<span style='color:red''>يجب ادخال كلمة المرور</span>");
    }
    $checkUsername = $connect->query("select username from users2 where username='$username'");
    if($checkUsername->num_rows){
        array_push($error,"<span style='color:red'>اسم المستخدم غير متاح</span>");
    }
    $checkEmail = $connect->query("select email from users2 where email='$email'");
    if($checkEmail->num_rows){
        array_push($error,"<span style='color:red'>البريد الألكتروني مسجل من قبل</span>");
    }
        if(!count($error)) {
            $connect->query("insert into users2(username,email,password) values('$username','$email','$password')");
            echo "<p class='color:red'><center>تم التسجيل بنجاح</center></p>";
            echo "<script>setTimeout(() => {
            location.href='login.php';
    },10000000)</script>";
        }
}
?>

<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<div class="container" style="width:550px">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-12">
                <?php
            if(isset($error)){
                foreach($error as $er){
                    echo "<center>" . $er . "</center><br>";
                }

            } 
            ?>
				<div class="form">
					<form action="" method="post">
						<h1>Register</h1>
                        <div class="input-group col-md-8 col-md-offset-2">
							<input type="text" name="username" class="input email">
							<label>Username</label>
						</div>
						<div class="input-group col-md-8 col-md-offset-2">
							<input type="email" name="email" class="input email" autocomplete="off">
							<label>E-Mail Address</label>
						</div>
					
						<div class="input-group col-md-8 col-md-offset-2">
							<input type="password" name="password" class="input password">
							<label>Password</label>
						</div>
				
						<div class="input-group">
							<div class="col-md-4 col-md-offset-4">
								<button >
									Register
								</button>							
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<script src="js/login.js"></script>