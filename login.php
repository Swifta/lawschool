<?php
$alert = "";
$auth = false;

$login_div = "active";
$reg_div = "";

if(isset($_REQUEST['login'])){
    $email = strip_tags(addslashes($_REQUEST['email']));
    $pin = strip_tags(addslashes($_REQUEST['pin']));
    
    require_once 'common/db_connect.php';
    $sql = "SELECT * FROM students WHERE email='".$email."' AND pin='".$pin."'";
    $result = mysql_query($sql) or die(mysql_error());
    if(mysql_num_rows($result) == 1){
        $_SESSION['user'] = $email;
        $_SESSION['pin'] = $pin;
        
        echo "<script>";
        echo "location.href='index.php';";
        echo "</script>";
    }
    else{
        $alert = "<p class='alert alert-danger text-center'>Invalid Email or PIN</p>";
    }
}

if(isset($_REQUEST['begin'])){
    $student_email = strip_tags(addslashes($_REQUEST['email']));
    $pin = strip_tags(addslashes($_REQUEST['pin']));
    
$login_div = "";
$reg_div = "active";

    if($student_email == ""||$pin == ""){
        $alert = "<p class='alert alert-danger text-center'>Invalid Email or PIN</p>";
    }
    else{
        require_once 'common/db_connect.php';
        $sql = "SELECT * FROM pins WHERE pin='".$pin."'";
        $result = mysql_query($sql) or die(mysql_error());
        if(mysql_num_rows($result) > 0){
            $flag = mysql_result($result, 0, "flag");
            if($flag == 0){
                //used pin
                $alert = "<p class='alert alert-danger text-center'>This is a Used PIN</p>";
            }
            else{
                $alphabet = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');
                //echo ($alphabet);
                $pin_generated = date("i").$alphabet[rand(0, sizeof($alphabet)-1)].date("s").$alphabet[rand(0, sizeof($alphabet)-1)];
                $display_pin = "visible";
                $sql = "INSERT INTO students (email, pin) VALUES ('".$student_email."', '".$pin_generated."') 
                    ON DUPLICATE KEY UPDATE pin='".$pin_generated."', done=0";
                mysql_query($sql) or die(mysql_error());
                $auth = true;
                $password = $pin_generated;
                $_SESSION['user'] = $student_email;
                $_SESSION['pin'] = $password;
                //then disable the PIN
                $sql = "UPDATE pins SET flag=0 WHERE pin='".$pin."'";
                mysql_query($sql) or die(mysql_error());
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
                    
            }

        }
        else{
            $alert = "<p class='alert alert-danger text-center'>Invalid PIN Provided</p>";
        }
    }
}
?>

<script type="text/javascript">
$('#myTabs a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
})
</script>


<div class="container-fluid wrapper">
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
            <div class="form">
        	<div class="head">
		<img class="img-responsive center-block" src="images/logo1.jpg" alt=""/>
                </div>
           <div id="heading">
           	<h1>Student Registration</h1>
           </div>
       
                    <div>

                      <!-- Nav tabs -->
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="<?php echo $login_div; ?>"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Resume Registration</a></li>
                        <li role="presentation" class="<?php echo $reg_div; ?>"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Start Registration</a></li>
                      </ul>

                      <!-- Tab panes -->
                      <div class="tab-content">
                                <div role="tabpanel" class="tab-pane <?php echo $login_div; ?>" id="home">
                                            <div>
                                                <form method="post" action="" id = "log">
                                                    <?php echo $alert;  ?>

                                                  <div class="form-group">
                                                    <label for="Email1">Email address</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email address">
                                                  </div>
                                                  <div class="form-group">
                                                      <input type="hidden" name="login" value="yes" />
                                                    <label for="exampleInputPassword1">Password *<small><em>Check your mail box/spam for password
                                                                </em></small></label>
                                                    <input type="password" class="form-control" name="pin" id="pwd" placeholder="Enter password here">
                                                  </div>
                                                    <div class="col-md-offset-4">
                                                      <button type="submit" class="btn btn-default">Resume</button>
                                                    </div>
<!--                                                    <button type="submit" class="btn">Log in</button>-->
<!--                                                  <button class="btn2" id="begin_reg" onclick="location.href='?nav=reg';return false;">Begin Registration</button>-->
                                                </form>
                                        </div>
                                </div>
                                <div role="tabpanel" class="tab-pane <?php echo $reg_div; ?>" id="profile">
                            <?php
                            if(!$auth){
                            ?>
                                        <div class='alert alert-info'>
                                            <strong><i class="glyphicon glyphicon-warning-sign"></i></strong> Provide a valid Email as your permanent <strong>ACCESS PASSWORD</strong> will be displayed &amp; sent for you to LOGIN and Manage your Registration.
                                        </div>

                                            <div>
                                                <form method="post" action="" id = "log">
                                                    <?php echo $alert;  ?>

                                                  <div class="form-group">
                                                    <label for="Email1">Email address</label>
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Enter email address">
                                                  </div>
                                                  <div class="form-group">
                                                      <input type="hidden" name="begin" value="yes" />
                                                    <label for="exampleInputPassword1">PIN <small><em>*One Time Usage</em></small></label>
                                                    <input type="password" class="form-control" name="pin" id="pwd" placeholder="Enter pin here">
                                                  </div>
                                                    <div class="col-md-offset-4">
                                                      <button type="submit" class="btn btn-default">Start Registration</button>
                                                    </div>                                                    
<!--                                                  <button type="submit" class="btn btn-default">Start Registration</button>-->
<!--                                                  <button class="btn2" id="begin_reg" onclick="location.href='?';return false;">Login</button>-->
                                                </form>
                                        </div>
                            <?php
                            }
                            else{
                            ?>
                                        <div class='alert alert-warning text-center'>
                                            Find your permanent access <strong>PASSWORD</strong> below. Write it down for ACCESS LOGIN<br/>
                                            <em>A copy of your password has been sent to your email. Check your SPAM box also.</em>
                                        </div>

                                        <div class="well well-sm text-center">
                                            <strong><?php echo $password; ?></strong>
                                        </div>
                                        <div class='text-center'>
                                            <a href='' class='btn btn-success'>Okay</a>
                                        </div>
                            <?php
                            }
                            ?>
                                    </div>
                                  </div>
                    </div>
            </div>
    </div>
      
     <div class="col-md-4"></div>
     </div>
    </div>