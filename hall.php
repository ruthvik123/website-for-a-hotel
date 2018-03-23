<?php
session_start();
	$dbhost = 'localhost' ;
	$username = 'root' ;
	$password = '' ;
	$db = 'hotel' ;

$connection = mysql_connect("localhost","root") or die("Error " . mysql_error($connection));
	mysql_select_db($db);
	$name=$_SESSION['uname'];
	$person= $_POST['noofperson'];
	$date= $_POST['functionDate'];
	$number= $_POST['number'];
	
if (isset($_POST['starter'])) {
    $starter = implode(" ", $_POST['starter']);// converts $_POST interests into a string
}
if (isset($_POST['maincourse'])) {
    $maincourse = implode(" ", $_POST['maincourse']);// converts $_POST interests into a string
}
if (isset($_POST['desert'])) {
    $desert = implode(" ", $_POST['desert']);// converts $_POST interests into a string
}




    $sql = "INSERT INTO hall
		       VALUES ('$name','$person','$number','$date','$starter','$maincourse','$desert')";
   
    $result = mysql_query($sql) or die("Error in Selecting " . mysql_error($connection));

   header("location:hall.html");
   mysql_close($connection);
?>