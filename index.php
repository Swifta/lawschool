<?php
session_start();
$next_tab = 0;
$experience = "";
$done = 0;
$users_student_affairs_data = array();
$id_card_passport_data = "";
$id_card_passport_type = "";
$yearbook_passport_data = "";
$yearbook_passport_type = "";

include 'common/head.php';
if(isset($_REQUEST['logout'])){
    unset($_SESSION['user']);
    unset($_SESSION['pin']);
}

?>

<?php 
if(isset($_SESSION['user']) && isset($_SESSION['pin'])){
    //attempt to validate
    require_once 'common/db_connect.php';
    $sql = "SELECT * FROM students WHERE email='".$_SESSION['user']."' AND pin='".$_SESSION['pin']."'";
    $result = mysql_query($sql) or die(mysql_error());
    if(mysql_num_rows($result) == 1){
        $next_tab = mysql_result($result, 0, "flag");
        $experience = mysql_result($result, 0, "experience");
        $done = intval(mysql_result($result, 0, "done"));
        $id_card_passport_data = mysql_result($result, 0, "id_card_passport");
        $id_card_passport_type = mysql_result($result, 0, "id_card_passport_type");
        $yearbook_passport_data = mysql_result($result, 0, "yearbook_passport");
        $yearbook_passport_type = mysql_result($result, 0, "yearbook_passport_type");
        //before displaying home.php. if flag is greater then zero. fetch data from Google App
        include 'home.php';
    }
    else{
        echo "<script>";
        echo "location.href='?logout=yes';";
        echo "</script>";
    }
}
else{
    if(isset($_REQUEST['nav'])){
        include 'begin.php';
    }
    else{
        include 'login.php';
    }
}

?>

<?php include 'common/foot.php';?>
