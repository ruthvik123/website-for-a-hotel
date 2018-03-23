
<?php


$connection = mysqli_connect('localhost','root','','hotel');
if(!$connection){
	
	die("error occoured due to ".mysqli_connect_error());
}
