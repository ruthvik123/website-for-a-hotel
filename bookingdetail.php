<?php

	$dbhost = 'localhost' ;
	$username = 'root' ;
	$password = '' ;
	$db = 'hotel' ;
	
$name=$_GET['name'];
$address=$_GET['address'];
$phoneno=$_GET['phoneno'];
$classic=$_GET['x1'];
$classicview=$_GET['x2'];
$prestige=$_GET['x3'];	
$junior=$_GET['x4'];
$classicsuite=$_GET['x5'];
$prestigesuite=$_GET['x6'];
$terracesuite=$_GET['x7'];
$presidensial=$_GET['x8'];
$penthouse=$_GET['x9'];

$connection = mysql_connect("localhost","root") or die("Error " . mysql_error($connection));
	mysql_select_db($db);
    $sql = "INSERT INTO bookingdetails
		       VALUES ('$name','$address','$phoneno','$classic','$classicview','$prestige','$junior','$classicsuite','$prestigesuite','$terracesuite','$presidensial','$penthouse')";
   
    $result = mysql_query($sql) or die("Error in Selecting " . mysql_error($connection));

header("location:usermain.html");
   mysql_close($connection);
?>
