<?php 
$conn = mysqli_connect('10.0.10.250', 'cron', '1234','asterisk');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "";
?>