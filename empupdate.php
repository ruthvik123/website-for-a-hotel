<?php

	$dbhost = 'localhost' ;
	$username = 'root' ;
	$password = '' ;
	$db = 'hotel' ;
    //open connection to mysql db
	
$name=$_GET['name'];
$id=$_GET['empid'];
$gender=$_GET['gender'];
$mobile=$_GET['mobileno'];
$position=$_GET['position'];
$address=$_GET['address'];	
$department=$_GET['department'];


$connection = mysql_connect("localhost","root") or die("Error " . mysql_error($connection));
	mysql_select_db($db);
  //fetch table rows from mysql db
								
$sql = "UPDATE employee SET gender='$gender',mobileno='$mobile',position='$position',address='$address',department='$department' WHERE id='$id' ";


    $result = mysql_query($sql) or die("Error in Selecting " . mysql_error($connection));
   header("location:emptable.php");
   mysql_close($connection);
?>
