<?php

include 'hoteldbc.php' ;


$col1 = $_POST['firstname'];
$col2 = $_POST['lastname'];
$col3 = $_POST['username'];
$col4 = $_POST['password'];
$col5 = $_POST['mobileno'];
$col6 = $_POST['email'];

$checkquery = "select username from signup where username='$col3' ";
$checkresult = $connection->query($checkquery); //(result object)
$checkcount = mysqli_num_rows($checkresult); // takes result object as parameter | returns number of rows selected

if($checkcount > 0){
	header('Location: hotelinput.php?error=redundancy');
	exit();
	
}

else{
$query = "insert into signup(firstname,lastname,username,password,mobile,email) values('$col1','$col2','$col3','$col4','$col5','$col6')" ;
$result = $connection->query($query);
header('Location: hotelinput.php?signup=success');
}