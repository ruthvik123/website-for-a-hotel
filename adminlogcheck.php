<?php
session_start();
$con = mysql_connect("localhost","root","");
mysql_select_db("hotel",$con);
$username=$_POST['username'];
$password=$_POST['password'];
//First lets get the username and password from the user
$result = mysql_query("SELECT * FROM admin");
while($row=mysql_fetch_array($result))
{
$user=$row['username']; 
$pass=$row['password'];
}
$num=mysql_num_rows($result); 
for($i=1;$i<=$num; $i++){

if($username == $user && $password==$pass)
{
	
	$_SESSION['uname']=$user;
header("Location: adminmain.html");
}
else if($password != $pass ||$username != $user )
{
echo("Please Enter Correct Username and Password ...");
header("Location: adminlog.html");
}
}

?>