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


<body>


<?php

$checked_arr = $_POST['checkbox'];  // checking the number of checkboxes checked
$count = count($checked_arr);


if($count != $_COOKIE['numrooms']){
	
		header('Location: hotelafterlogin.php?error=numberofrooms');
	
}
else{
	
	
	
	// display the rooms selected by the user .
	

	
	
echo "<b>PLEASE CONFIRM YOUR BOOKING  ".$_SESSION['uname']."</b>" ;
echo "<br>" ;

	
$start = strtotime($_COOKIE['fromdate']);   // calculating number of days
$end = strtotime($_COOKIE['todate']);    // generates a time stamp : refer W3 schools

$numofdays = ceil(abs($end - $start) / 86400);



$total = 0 ; // for total cost .

	
	
	$selectedrooms = $_POST['checkbox'];  // this variable is an array containing the list of selected room numbers from the checkbox
	
//	
$json = json_encode($selectedrooms);   // method to store an array in cookies as cookie can only store numbers or strings
$cookie_name2 = "listofrooms";
$cookie_value2 = $json ;
setcookie($cookie_name2, $cookie_value2, time() + (86400 * 30), "/");

// 	
	
	echo "<table  id='t2'><th>Room number</th> <th>Suit type</th><th>from date</th><th>to date</th><th>cost per night</th><th>cost</th>";
	
	for($i=0 ; $i<$_COOKIE['numrooms'] ; $i++){
		
		$sql = "select roomnumber,suittype,costpernight from rooms where roomnumber='".$selectedrooms[$i]."' " ;
		$result = $connection->query($sql);
		$data = $result->fetch_assoc();
		
		echo "<tr><td>".$data['roomnumber']."</td><td>".$data['suittype']."</td><td>".$_COOKIE['fromdate']."</td><td>".$_COOKIE['todate']."</td><td>".$data['costpernight']."</td><td>".$data['costpernight']*$numofdays."</td></tr>";
		
		$total = $total + ($data['costpernight']*$numofdays) ;
		
		
	}
	
	
	
}

echo "<br>" ;
echo "<br>" ;
echo "<u>your total cost for the stay is  <b>Rs:".$total."</b></u>" ;
echo "<br>" ;
echo "<br>" ;







 
?>

<form method = "POST" action="final.php">

<input type="submit" value="confirm booking" class="button" ></input>
<br>
<br>
<b> Details : </b>
<br>
<br>

</form>





</body>
</html>