<?php
require_once '../common/db_connect.php';
?>
<html >
  <head>
    <meta charset="UTF-8">
    <title>PINS</title>
  </head>
  <body style='text-align: center;width:99%;margin:2px auto;'>
<?php
function generatePin(){
    $alphabet = array('A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','T','U','V','W','X','Y','Z');
    //echo ($alphabet);
    $pin_generated = rand(1000, 9999).$alphabet[rand(0, sizeof($alphabet)-1)].rand(1000, 9999);
    return $pin_generated;
}
?>
      <table style='width:97%;margin:4px auto; text-align: center;border: 1px solid black;'>
          
              <?php
              $arr = array();
              $all = 0;
              $rows = 10;
              $count = 0;
              while($count<$rows){
                  $gen1 = generatePin();
                  $arr[$all] = $gen1;
                  $all++;
                  $gen2 = generatePin();
                  $arr[$all] = $gen2;
                  $all++;
                  $gen3 = generatePin();
                  $arr[$all] = $gen3;
                  $all++;
                  $gen4 = generatePin();
                  $arr[$all] = $gen4;
                  $all++;
                  $gen5 = generatePin();
                  $arr[$all] = $gen5;
                  $all++;
                  echo '<tr style="border: 1px solid black;">';
                  echo '<td style="border: 1px solid black;padding: 25px;">'.$gen1.'</td>';
                  echo '<td style="border: 1px solid black;padding: 25px;">'.$gen2.'</td>';
                  echo '<td style="border: 1px solid black;padding: 25px;">'.$gen3.'</td>';
                  echo '<td style="border: 1px solid black;padding: 25px;">'.$gen4.'</td>';
                  echo '<td style="border: 1px solid black;padding: 25px;">'.$gen5.'</td>';
                  echo '</tr>';
                  $count++;
              }
              //var_dump($arr);
              
              //construct sql
              $vals = "";
              foreach ($arr as $key=>$value) {
                  $vals.="('".$value."')";
                  if($key != (sizeof($arr)-1)){
                      $vals.=",";
                  }
              }
              
              $sql = "INSERT INTO pins (pin) VALUES ".$vals."";
              mysql_query($sql) or die(mysql_error());
              ?>

      </table>
  </body>
</html>