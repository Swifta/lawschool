<?php
//error_reporting(0);
session_start();
$alert = "";

if(isset($_REQUEST['logout'])){
    unset($_SESSION['user_id']);
    unset($_SESSION['password']);
}

if(isset($_POST['title']) || isset($_SESSION['user_id'])){
	$username = @$_POST['username'];
	$password = @$_POST['password'];
        if(isset($_SESSION['user_id'])){
            
            $username = $_SESSION['user_id'];
            $password = $_SESSION['password'];

        }

        require_once '../common/db_connect.php';

	$sql = "SELECT * FROM admin_login WHERE Username='".$username."' AND Password='".$password."'";
	$result = mysql_query($sql) or $err = "Error Found";
	if(mysql_num_rows($result) == 1){
		//login is okay
            $_SESSION['user_id'] = $username;
            $_SESSION['password'] = $password;
            
            echo "<script>";
            echo "location.href='home.php';";
            echo "</script>";
	}
	else{
		$alert = "<p>Invalid Credentials</p>";
	}
}

?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin login</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>
      <div style="margin:2px auto -40px auto; text-align: center;">
<img src="../images/logo1.jpg"/>
    </div>
    <div class="wrapper">             
	<div class="container">
		<h1>Admin Panel</h1>
		
		<?php echo $alert; ?>
		<form class="form" action="" method="post">
			<input type="text" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<input type="hidden" name="title" value="okay"/>
			<button type="submit" id="login-button">Login</button>

		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>
