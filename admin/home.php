<?php
session_start();
$alert = "";

$display_pin = "hidden";
$task = "generate";
$btn_title = "Reset Student's Password";
$pin_generated = "";
$student_email = "";


require_once '../common/db_connect.php';

if(isset($_SESSION['user_id'])){
	$username = $_SESSION['user_id'];
	$password = $_SESSION['password'];



	$sql = "SELECT * FROM admin_login WHERE Username='".$username."' AND Password='".$password."'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result) == 0){
		//login is okay
            echo "<script>";
            echo "location.href='index.php';";
            echo "</script>";
	}
	else{
		//go ahead and display page
	}
}
else{
	echo "<script>";
	echo "location.href='index.php';";
	echo "</script>";
}


if(isset($_REQUEST['task'])){
    $task = $_REQUEST['task'];
    if($task == "generate"){
        $pin_generated = "";
        $task = "send_email";
        $btn_title = "Send PIN via Email";
        $student_email = $_REQUEST['email'];
        $emailErr = false;
        if (!filter_var($student_email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = true; 
        }
        if($student_email != "" || !$emailErr){
            //echo date('Y-m-d H:i:s');
            $alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
            //echo ($alphabet);
            $pin_generated = date("i").$alphabet[rand(0, sizeof($alphabet)-1)].date("s").$alphabet[rand(0, sizeof($alphabet)-1)];
            $display_pin = "visible";
            $sql = "INSERT INTO students (email, pin) VALUES ('".$student_email."', '".$pin_generated."') 
                ON DUPLICATE KEY UPDATE pin='".$pin_generated."', done=0";
            mysql_query($sql) or die(mysql_error());
        }
        else{
            $alert = "<p style='color:red'>Invalid Student Email Provided</p>";
            $task = "generate";
            $$display_pin = "hidden";
            $btn_title = "Reset Student's Password";
        }
    }
    else{
        //send the pin generated to the person's email
        
        $student_email = $_REQUEST['email'];
        $pin_generated = $_REQUEST['pin_generated'];
        //do every other thing you wwant to do after here
		//include 'class.phpmailer.php';
//		require 'PHPMailerAutoload.php';
//			
//		$mail = new PHPMailer;
//		$mail->isSMTP();                                      // Set mailer to use SMTP
//		$mail->Host = 'smtp.mandrillapp.com';  // Specify main and backup SMTP servers
//		$mail->SMTPAuth = true;                               // Enable SMTP authentication
//		$mail->Username = 'fope.ojo@gmail.com';                 // SMTP username
//		$mail->Password = 'TNhUtOVbBFXJGpTqKk5WWA';                           // SMTP password
//		//$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//		$mail->Port = 587;
//			
//		$mail->From = 'noreply@lawschoollagos.org';
//		$mail->FromName = 'Law School Lagos';
//		$mail->addAddress($email, $student_email);     // Add a recipient
//									   // Set email format to HTML
//
//		$mail->Subject = "YOUR REGISTRATION LOGIN PIN";
//		$mail->Body    = $pin_generated;
//		//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
//
//		$resp = $mail->send();
		//var_dump($resp);
                $headers = 'From: noreply@lawschoollagos.org' . "\r\n" .
                    'Reply-To: noreply@lawschoollagos.org' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();
                $email_content=<<<end
Hello, 
Below is your registration access PASSWORD. You can login into the registration portal with this PASSWORD by clicking on the link below. 

PASSWORD : $pin_generated
                        
REGISTRATION LINK : http://lawschoollagos.org/registration/
                       
end;
                mail($student_email, "YOUR REGISTRATION LOGIN PIN", $email_content, $headers);
        
        
        //dont touch the codes below
        $alert = "<p style='color:green'>Email Sent Successfully, Students should check their SPAM box also</p>";
        $student_email = "";
        $task = "generate";
        $display_pin = "hidden";
        $btn_title = "Generate Another Pin";
    }
}
?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Student Pin Management</title>
    
    
    
    
        <link rel="stylesheet" href="css/style.css">

        <style>
            a, a:hover, a:visited, a:active{
                color:red;
                text-decoration: none;
                margin-top: 20px;
            }
        </style>
    
    
  </head>

  <body>

    <div class="wrapper">
	<div class="container">
		<h1>Pin Reset Panel</h1>
		
		<?php echo $alert; ?>
		<form class="form" action="" method="post">
			<input type="email" name="email" placeholder="Enter Student Email" 
                               value="<?php echo $student_email; ?>">
			<!---<input type="password" name="password" placeholder="Pin">-->
                        
                        <div class="pin_display" style="display:<?php echo $display_pin; ?>; margin:30px auto;">
                            <h2><strong><?php echo $pin_generated; ?></strong></h2>
                            <input type="hidden" name="pin_generated" value="<?php echo $pin_generated; ?>" />
                        </div>
                        
			<button type="submit" name="task" value="<?php echo $task; ?>" id="login-button"><?php echo $btn_title; ?></button>
                        <br /><br />

                
                <div style="border:2px solid blue; margin:7px auto;padding:9px;">
                    <h3>Generate And Print Out Access PIN</h3>
                    <p>Use the button below to generate ACCESS PIN for student's registration. <br />
                        <strong>NOTE :</strong> PIN generated needs to be printed. The page generates Another Set of PIN's              
                    on page refresh. Use Ctrl 'P' to PRINT the new Tab Opened</p>
                    <a href='pin.php' target='_blank'>Click here to Generate &amp; Print</a>
                </div>
              <a href="index.php?logout=yes"><strong>Logout Here</strong></a>
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
