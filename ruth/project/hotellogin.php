<?php
session_start();
?>
<?php

include 'hoteldbc.php' ;

$user = $_POST['uname'];
$password = $_POST['pwd'];

$query = "select password from signup where username='$user' " ;
$result = $connection->query($query) ; // returns an object
$xyz = $result->fetch_assoc(); //returns one row from $result object as an associative array
$data = $xyz['password'] ;

if(empty($user) || empty($password)){
	header('Location: hotelinput.php?error=empty');
	
}
else{
if($password == $data){
	
	$_SESSION['uname'] = $user ;
	
	
	header('Location: hotelafterlogin.php') ;
	
}
else{
	header('Location: hotelinput.php?error=invalidcredentials') ;
	
}
}
