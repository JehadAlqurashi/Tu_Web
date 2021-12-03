<?php 

require '../database.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = mysqli_real_escape_string($connect,htmlspecialchars($_POST['email']));
    $pass = mysqli_real_escape_string($connect,htmlspecialchars($_POST['password']));
    $check = $connect->query("select * from users2 where email='$email' and password='$pass'");
    if($check->num_rows){
        $check = $check->fetch_assoc();
        $_SESSION['id'] = $check['id'];
        header("location:index.php");
    }else{
        $notValid = "البريد الألكتروني او كلمة المرور غير صحيحة";
    }
}
?>
<link rel="stylesheet" href="css/login.css">
<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 col-sm-12">	
				<div class="form">
			
					<form action="" method="post">

						<h1>Welcome back!</h1>

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
								<button>
									LOGIN
								</button>							
							</div>
						</div>
						<div class="forgot">
							<a href="register.php">Don't have account?</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

<script src="js/login.js"></script>