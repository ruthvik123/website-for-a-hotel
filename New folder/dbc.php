<?php

$connection = mysqli_connect('localhost','root','','hotel');

if(!$connection){
	
	die("error occured due to ".mysqli_connect_error());
	
} 


?>