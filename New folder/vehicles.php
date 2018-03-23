<html>


<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>MAIN PAGE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
*{
margin:0px;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;

}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
	}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

body{
	background-image:url("");
	background-repeat:no-repeat;
	background-attachment:fixed;
	background-size:1550px 750px;
	}
	
.mySlides {display:none;}

.w3-content w3-section{
	width:80%;
	height:600px;
}

.myslides{
	width:70%;
	height:520px;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change the link color to #111 (black) on hover */
li a:hover {
    background-color: #111;
	}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
#d1
{
	background: rgba(0,0,255,0.1);
}
</style>


<script>

function validate(){
	
	var M = document.forms["cab"]["mobno"].value ;
	
	if(M.length == 0 || !M.match(/^[0-9]{10}$/){
		alert("not a valid mobile number") ;
		return false ;
	}
}


</script>
</head>

<body>
	<div>
		<div style="height:35px;width:100%;">
		<ul>
			<li><a href="usermain.html">Home</a></li>
<!--			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">INSERTION</a>
				<div class="dropdown-content">
				<a href="">Employee</a>
				<a href="">Room Details</a>
				</div>
			</li>
-->			
			<li><a href="hall2.html">BANQUET HALL</a></li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">ROOM BOOKING</a>
				<div class="dropdown-content">
				<a href="booking.html">BOOKING</a>
				<a href="room_details.html">ROOM DETAILS</a>
				
				</div>
			</li>
			
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">FEEDBACK</a>
				<div class="dropdown-content">
				<a href="feedback.html">Give Feedback</a>
				
				</div>
			</li>
			
			<li style="float:right"><a class="active" href="main.html">Logout</a></li>
		</ul> 
</div>
<br>
<div>
<h1 align="center">BOOK A CAB</h1>
<table border="5" align="center" width="40%" height="300px">
<tr><td><b>DESTINATION</b></td><td><b>PRICE</b></td></tr>
<tr><td>Airport</td><td>*FREE*</td></tr>
<tr><td>Railway Station</td><td>250</td></tr>
<tr><td>Hawa Mahal</td><td>750</td></tr>
<tr><td>The Fort</td><td>1200</td></tr>
</table>

<br><br> <br><br>

<form method="POST" action="cabbook.php" name="cab" onsubmit="return validate()">
<table style="padding-left:200px;"><tr><td>DATE</td><td>
 <input  class="input1" type="date" name="date" id="Date"></input>
</td>
<td>DESTINATION</td><td>
<select value="destination" id="dest" name="dest">
<option>Airport</option>
<option>Railway Station</option>
<option>Hawa Mahal</option>
<option>The Fort</option>
</select>
</td><td><br>MOBILE NO</td><td><br><input type="int" name="mobno"></td>
<td>TIME</td><td><br><input type="time" name="time"></td>
<td><button type="submit" name="submit" style="">BOOK</button></td>
</tr>

</table>


<?php

$url = $_SERVER['REQUEST_URI'];
if(strpos($url,"book=success")){
	echo "<br>" ;
	echo "booked a cab successfull" ;
}
else if(strpos($url,"error=date")){
	echo "<br>" ;
	echo "enter a valid date" ;
	
}

?>



</form>


</body>
</html>