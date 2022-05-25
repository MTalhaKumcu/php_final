<?php
$servername = "fdb34.awardspace.net";
$database = "4100781_project";
$username = "4100781_project";
$password = "151752060.a";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
} 
   
?>