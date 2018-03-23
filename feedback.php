<?php
session_start();
	$dbhost = 'localhost' ;
	$username = 'root' ;
	$password = '' ;
	$db = 'hotel' ;
	
$name=$_SESSION['uname'];
$roomtype=$_GET['roomtype'];
//$frontofficestaff=$_GET['front_office_staff'];
$restaurant=$_GET['restaurant'];
$staff=$_GET['staff'];
$housekeeping=$_GET['housekeeping'];	
$cleanliness=$_GET['cleanliness'];
$overallrating=$_GET['overallrating'];
$mobileno=$_GET['mobileno'];
$remarks=$_GET['remarks'];

$connection = mysql_connect("localhost","root") or die("Error " . mysql_error($connection));
	mysql_select_db($db);
    $sql = "INSERT INTO feedback
		       VALUES ('$name','$roomtype','$restaurant','$staff','$housekeeping','$cleanliness','$overallrating','$mobileno','$remarks')";
   
    $result = mysql_query($sql) or die("Error in Selecting " . mysql_error($connection));

header("location:usermain.html"); 
mysql_close($connection);
?>
