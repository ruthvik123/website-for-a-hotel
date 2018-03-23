<?php
session_start();
include 'hoteldbc.php' ;
?>
<html>

<script>
function checkempty(){
var valueDate1 = document.getElementById('Date1').value;
var valueDate2 = document.getElementById('Date2').value;
var numrooms = document.getElementById('nro').value;

if(!Date.parse(valueDate1)  ){
  alert('FROM DATE cannot be empty');
  return false ;
}
if(!Date.parse(valueDate2)){
  alert('TO DATE cannot be empty');
  return false ;
}

if(numrooms.length==0){
	
	alert('number of rooms should be filled');
       return false ;
}

}
</script>
<style>
*{
	margin:0px;
}
body{
	background-image: url(falaknuma.jpg);
	background-size:100%;
	z-index:2;

}
#heading{
	width:100%;
	height:60px;
	
}
h1{
	text-align:center;
	color:white;
	padding-top:15px;
}
#d1{
	margin-top:20px;
	color:white;
	
	font-size:20px;
	
}
#form1{
	margin-left:350px;
	margin-right:300px;
	padding-left:200px;
	border:2px solid white;
	border-top-left-radius:35px;
	border-bottom-right-radius:35px;
}
.input1{
	width:170px;
	border: 2px solid #800000;
	border-radius: 5px;
	height:30px;
	text-align:center;
}
p{
	padding-left:500px;
	color:white;
}
#log{
	margin-left:550px;
	text-decoration:none;
	color:white;
	background-color:green;
	border-radius:5px;
	border-radius:5px;
	border:none;
	width:150px;
	height:40px;
	cursor: pointer;
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,1);
}
#log:hover{
		background-color:white;
	color:green;
	
}
#hello{
	text-decoration:none;
	border:none;
	color:green;
	
    width:150px;
	height:40px;
	cursor: pointer;
	background-color:white;
		border-radius:5px;
	border-radius:5px;	
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,1);
}
#hello:hover{
	background-color:green;
	color:white;
	
}
#p1{
	color:white;
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
</style>
<div style="height:35px;width:100%;">
		<ul>
			<li><a href="usermain.html">HOME</a></li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">BOOKING</a>
				<div class="dropdown-content">
				<a href="hotelafterlogin.php">ROOM BOOKING</a>
				<a href="hall.html">HALL BOOKING</a>
				<a href="vehicles.php">CAB BOOKING</a>
				</div>
			</li>
			
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">FEEDBACK</a>
				<div class="dropdown-content">
				<a href="feedback.html">Give Feedback</a>
				
				</div>
			</li>
			
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">DETAILS</a>
				<div class="dropdown-content">
				<a href="tariff.php">TARIFF DETAILS</a>
				<a href="roomdetails.html">ROOM DETAILS</a>
				</div>
			</li>
			
			<li style="float:right"><a class="active" href="main.html">Logout</a></li>
		</ul> 
</div>

<?php
echo "<div id='heading'><h1>HOTEL TAASH </h1></div>" ;
echo "<div id ='d1'><b>WELCOME TO OUR HOTEL ".$_SESSION['uname']."</b></div>" ;
echo "<br>" ;
echo "<br>" ;
echo " <span id='p1'>Book your stay by filling the form below</div>";
echo "<br>" ;
echo "<br>" ;
?>
<b><p> Any room can accomodate a minimum of 3 people</p> </b>
<form  id="form1" name="book" method="POST" action="hoteldisplayrooms.php" onsubmit="return checkempty()">
<br>

<br>
<br>
<label style="color:white; font-size:20px">FROM DATE<br></label>  <input class="input1" type="date" name="from" id="Date1"></input><br><br>
<label style="color:white; font-size:20px">TO DATE <br></label> <input  class="input1" type="date" name="to" id="Date2"></input><br><br>
<label style="color:white; font-size:20px">NUMBER OF ROOMS <br> </label><input class="input1" type="number" name="numofrooms" id="nro" min="1" max="5"></input><br>
<br>
<br>
<input id="hello" type='submit' name="check" value="Check Availability"></input>

<?php
echo "<br>" ;
echo "<br>" ;
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 

 if(strpos($url,"error=numberofrooms")){
	echo "select the correct number of rooms required by you. Please enter the details again in case you change your mind.  " ;
}


else if(strpos($url,"error=fromdate")){
	echo "cannot enter before todays date in FROM DATE " ;
}
else if(strpos($url,"error=todate")){
	echo "cannot enter before todays date in TO DATE " ;
}
else if(strpos($url,"error=invalidtodate")){
	echo "TO DATE cannot be lesser than FROM DATE " ;
}


?>

</form>



<br>
<form method="POST"  action="logout.php">
<input id="log" type="submit" name="logout" value="Log out" ></input> 
</form>


</html>