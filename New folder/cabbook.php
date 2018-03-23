<?php

include 'dbc.php' ;

$col1 = $_POST['date'] ;
$col2 = $_POST['dest'] ;
$col3 = $_POST['mobno'] ;
$col4 = $_POST['time'] ;
$col5 ;

$t = date("Y-m-d");


if($col1 < $t){
	
	header('Location: vehicles.php?error=date');
}


else {


if($col2=="Airport"){
	
	$col5 = 0 ;
}
else if($col2=="Railway Station"){
	$col5 = 250 ;
	
}
else if($col2=="Hawa Mahal"){
	$col5 = 750 ;
	
}
else{
	$col5 = 1200 ;
}





$query = "insert into pickup(date,destination,mobilenumber,time,cost) values ('$col1','$col2','$col3','$col4','$col5')" ;
$result = $connection->query($query) ;
header('Location: vehicles.php?book=success');

}



?>