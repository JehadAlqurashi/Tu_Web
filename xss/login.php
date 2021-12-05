<?php 
require '../database.php';
require '../config.php';
session_start();
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $email = mysqli_real_escape_string($connect,htmlspecialchars($_POST['email']));
    $pass = mysqli_real_escape_string($connect,htmlspecialchars($_POST['password']));
    $check = $connect->query("select * from users2 where email='$email' and password='$pass'");
    if($check->num_rows){
        $check = $check->fetch_assoc();
        $_SESSION['id'] = $check['id'];
		$_SESSION['role'] = $check['role'];
		if($check['role'] == "admin"){
			header("location:" . $config['admin']);
			die();
		}
        header("location:index.php");
    }else{
        $notValid = "Wrong Email or Password";
    }
}
?>
<link rel="stylesheet" href="css/login.css">
<div class="container">
<?php
 if(isset($notValid)){
	 echo "<p style='color:red;position:relative;left:150px'>" . $notValid ."</p>";
 }
?>
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