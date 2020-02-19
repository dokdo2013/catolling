<?php

include "./template/main_template1.php";

$date_s = date("s");
$date_i = date("i");
$date_u = date("u");
$date_r = round(microtime(true) * 1000);
$random_date = (int)$date_s + (int)$date_i + (int)$date_u + (int)$date_r;
$id = $_GET['id'];
 ?>

 <main style="padding-top:3.5rem!important">


  <?
  $random = $random_date % 10;
  if($id != ''){
    if($id % 5 == 0)
      echo '<img src="./random/0.jpg" class="img-fluid" alt="type 1">';
    else if($id % 5 == 1)
      echo '<img src="./random/1.jpg" class="img-fluid" alt="type 2">';
    else if($id % 5 == 2)
      echo '<img src="./random/2.jpg" class="img-fluid" alt="type 3">';
    else if($id % 5 == 3)
      echo '<img src="./random/3.jpg" class="img-fluid" alt="type 4">';
    else if($id % 5 == 4)
      echo '<img src="./random/4.jpg" class="img-fluid" alt="type 5">';
  }
  else if($random % 5 == 0)
    echo '<img src="./random/0.jpg" class="img-fluid" alt="type 1">';
  else if($random % 5 == 1)
    echo '<img src="./random/1.jpg" class="img-fluid" alt="type 2">';
  else if($random % 5 == 2)
    echo '<img src="./random/2.jpg" class="img-fluid" alt="type 3">';
  else if($random % 5 == 3)
    echo '<img src="./random/3.jpg" class="img-fluid" alt="type 4">';
  else if($random % 5 == 4)
    echo '<img src="./random/4.jpg" class="img-fluid" alt="type 5">';

?>
