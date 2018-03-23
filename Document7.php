     
  <?php

	$username = 'localhost' ;
	$password = '' ;
	$db = 'hotel' ;
	
$room1=$_POST['nw'];
$roomtype=$_COOKIE['user'];
 

$con  = mysql_connect("localhost","root","") or die("Error " . mysql_error($con ));
	mysql_select_db($db);
    $sql = "UPDATE rooms SET costpernight='$room1' WHERE  suittype='$roomtype' ";
   
    $result = mysql_query($sql) or die("Error in Selecting " . mysql_error($con ));
 
mysql_close($con);
header("Location: adminmain.html");   
?>
 