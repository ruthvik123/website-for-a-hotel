<?php

	$dbhost = 'localhost' ;
	$username = 'root' ;
	$password = '' ;
	$db = 'hotel' ;

$name=$_GET['name'];
$id=$_GET['empid'];
$gender=$_GET['gender'];
$mobile=$_GET['no'];
$position=$_GET['position'];
$address=$_GET['address'];	
$department=$_GET['dept'];

$connection = mysql_connect("localhost","root") or die("Error " . mysql_error($connection));
	mysql_select_db($db);
    $sql = "INSERT INTO employee
		       VALUES ('$name','$id','$gender','$mobile','$position','$address','$department')";
   
    $result = mysql_query($sql) or die("Error in Selecting " . mysql_error($connection));

   header("location:emptable.php");
   mysql_close($connection);
?>
