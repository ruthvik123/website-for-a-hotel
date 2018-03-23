<?php
session_start();
include 'hoteldbc.php' ;
?>
<html>

<style>

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}

</style>

<?php

$x = $_POST['from'];
$y = $_POST['to'];
$t = date("Y-m-d") ;
$cookie_name = "numrooms";
$cookie_value = $_POST['numofrooms'];
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

$cookie_name1 = "fromdate";
$cookie_value1 = $_POST['from'];
setcookie($cookie_name1, $cookie_value1, time() + (86400 * 30), "/");

$cookie_name2 = "todate";
$cookie_value2 = $_POST['to'];
setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");



if($x < $t  ){
	header('Location: hotelafterlogin.php?error=fromdate');
	
}
else if ($y <= $t){
	header('Location: hotelafterlogin.php?error=todate');
}
else if ($y < $x){
	header('Location: hotelafterlogin.php?error=invalidtodate');
}


else{
	
	// display the rooms that are available for the user to choose . 
	
echo "<b>HERE ARE THE AVAILABLE ROOMS FOR YOU  ".$_SESSION['uname']."</b>" ;
echo "<br>" ;
echo "<br>" ;
	
	$numroom = $_POST['numofrooms'];
	$q = "select roomnumber,suittype,costpernight from rooms where availability='yes'" ;
	$result = $connection->query($q);
	$checkcount = mysqli_num_rows($result);
	
	if($checkcount>=$numroom){
	
	echo "<form method='POST' action='ap2.php' >";
	
    	echo "<table border='2'><th>Room number</th> <th>Suit type</th><th>cost per night</th><th>choose</th>";
		while($data = $result->fetch_assoc() ){
	
	echo "<tr><td>".$data['roomnumber']."</td><td>".$data['suittype']."</td><td>".$data['costpernight']."</td><td><input type='checkbox' name='checkbox[]' value=".$data['roomnumber']."  ></input></td></tr>";
}
echo "</table>" ;
echo "<br>" ;

echo "<input type='submit' name='proceed' value='proceed'></input> ";


echo "<br>" ;
echo "<br>" ;
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
if(strpos($url,"error=numofroomserror")){
	echo "select the number of rooms you have entered " ;
}



echo "</form>";

}

else{
		echo "sorry no rooms available";
	}			
	
	} // isset
	
?>

</html>