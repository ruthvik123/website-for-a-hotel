<?php
session_start();
include 'hoteldbc.php' ;
?>
<html>
<?php

$cookie = $_COOKIE['listofrooms'];
$cookie = stripslashes($cookie);
$rooms = json_decode($cookie, true);  // array of rooms selected

$user = $_SESSION['uname'] ;
$from = $_COOKIE['fromdate'];
$to = $_COOKIE['todate'] ;

 

for($i=0 ; $i<$_COOKIE['numrooms'] ; $i++){
		
$q = "update rooms set availability='no',bookedby='$user' , fromdate='$from', todate='$to' where roomnumber='".$rooms[$i]."'  "	;
$result = $connection->query($q);
	
}

echo "you have succesfully booked your stay ".$user ;


?>

<br>
<br>
<a href="hotelafterlogin.php"><button>another booking  </button></a>

<br>
<br>
<form method="POST"  action="logout.php">
<input type="submit" name="logout" value="Log out" ></input> 
</form>



</html>