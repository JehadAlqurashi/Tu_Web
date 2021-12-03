<?php
require '../database.php';
if(isset($_GET['user'])){
    $user = $_GET['user'];
    $check = $connect->query("select * from users where username='$user'");
    if($check->num_rows){
        $success = "Found !";
    }
    else{
        $success = "Not Found !";
    }
}


?>

<link rel="stylesheet" href="css/index.css">
<center>
    <h2>Users Search:</h2>
</center>
<form class="form-wrapper" action="" method="get">
    <input type="text" name="user" id="search" placeholder="Username..." required>
    <input type="submit" value="go" id="submit">
</form>
<?php
 if(isset($success)){
     echo "<h3>". $success ."</h3>";
 }

?>