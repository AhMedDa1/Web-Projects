<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "phpp";
$con = mysqli_connect($host,$user,$pass,$db) or die("aahmed eldaw mohammed");
if (mysqli_select_db($con,$db)) {
  //echo "connected";
}else {
  //echo "errrrrrrrrr";
}



 ?>
