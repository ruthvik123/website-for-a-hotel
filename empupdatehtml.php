<html>
<head>
<title>
Register New Employee
</title>

<script type="text/javascript" src="validate.js"></script>

	
</head>
<style>
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
div.div1
{
background-color:black;
height:80px;
border:transparent;
margin:0;
width:100%;
opacity:0.9;
position:absolute;
left:0px;
top:0px;
}
p.a
{
margin-left:120px;
float:left;
color:white;
font-size:35px;
font-family:verdena;
font-weight:bold;
margin-top: 15px;
}
p.p2
{
	float:left;
	margin-left:150px;
	margin-top:15px;
	color:white;
}
p.p3
{
	float:left;
margin-top:15px;
	color:white;
}
.i
{margin-top:10px;}
#nav
{
width:60px;
height:25px;
text-align:center;
float:left;
border:1px solid white;
color:white;
margin-top:28px;
margin-left:20px;	
padding:3px;
border-radius:14px;
}
#nav ul
{
	list-style-type:none;
padding:0px;
margin:0px;
text-align:center;
}
#nav li{
display:inline;
//vertical-align:middle;

}
#nav a{
text-decoration:none;
color:white;
vertical-align:middle;
padding: 0px;
}

a:hover{
background-color:#990033;
}
body
{
	background-color:#CCCCCC;
	background:url(background.jpeg);
	
}
div.div3
{
	margin-top:6%;
	height:500px;
}
img.im
{
	margin-left:4px;
	float:left;
	width:100px;
	height:100px;

}
h1 {

font: 50px bold Helvetica;

text-shadow:3px 3px 5px orange,
                       6px 6px 10px blue;

}

img.img
{
margin-left:100px;
width:80%;
height:220px;
background-color:blue;
//box-shadow: 15px 15px 15px 15px black;
box-shadow:30px 30px 30px black;}

h2
{
	font-size:23px;
	margin-left:30px;
}
h3
{
	font-size:23px;
}
div.div4
{	
	float:left;
	width:40%;
	font-family:purisa;
}
div.div5
{
	margin-top:20px;
	float:left;
	margin-left:40px;
}

#p4
{       margin-top:30px;
	font-weight:bold;
	font-size:30px;
	width:700px;
	font-family:purisa;
margin-bottom:10px;
}


#theform
{
background-color:metal;
color:black;
display:table;
padding:15px;
border-radius:5; 
width:400px;
height: 200px;
margin-left:50px;
}
.row{
display:table-row;
float:left;
border-radius: 25px;

}
.row label{
display: table-cell;
padding:10px;
text-align:right;
}

.row input{
padding:10px;
display:table-cell;
width:500px;
border-radius: 25px;
}

.row label{
display: table-cell;
padding:10px;
text-align:right;
}

.row input{
padding:10px;
display:table-cell;
width:500px;
}
input[type=submit]
{
display:inline;
float:left;
}
#submit 
{
text-decoration:none;
color:white;
vertical-align:middle;
padding: 0px;
background-color:green;
width: 200px;
height: 40px;
margin-left:400px;
border-radius: 25px;
}
input[type=reset]
{

display:inline;
float:left;
background-color:green;
width: 200px;
height: 40px;
color: white;
margin-left:400px;

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

body{
	background-image:url("zzzz.jpg");
}

</style>
<body>

<div style="height:35px;width:100%;">
		<ul>
			<li><a href="adminmain.html">HOME</a></li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">EMPLOYEE</a>
				<div class="dropdown-content">
				<a href="newemployee.html">ADD Employee</a>
				<a href="emptabledelete.php">DELETE EMPLOYEE</a>
				<a href="empupdatetable.php">UPDATE EMPLOYEE</a>
				<a href="emptable.php">VIEW EMPLOYEE</a>
				
				</div>
			</li>
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">BOOKING DETAILS</a>
				<div class="dropdown-content">
				<a href="cabdetails.php">Cab Bookings</a>
				<a href="roombookingdetail.php">Room Bookings</a>
				<a href="halltable.php">Hall Bookings</a>
				
				</div>
			</li>
			
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">FEEDBACK</a>
				<div class="dropdown-content">
				<a href="feedbackdata.php">Feedback From Guests</a>
				
				</div>
			</li>
			
						<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">TARIFF</a>
				<div class="dropdown-content">
				<a href="document5.html">UPDATE TARIFF</a>
				
				</div>
			</li>

			
			<li class="dropdown">
				<a href="javascript:void(0)" class="dropbtn">DETAILS</a>
				<div class="dropdown-content">
				<a href="userdetaildata.php">User Details</a>
				</div>
			</li>
			<li style="float:right"><a class="active" href="main.html">Logout</a></li>
		</ul> 
</div>


<br>
<div class="div5">
<p id="p4" align="center"></p><hr>
<?php
		
		$dbhost = 'localhost' ;
	$username = 'root' ;
	$password = '' ;
	$db = 'hotel' ;
	$connection = mysql_connect("localhost","root") or die("Error " . mysql_error($connection));
	mysql_select_db($db);
  //fetch table rows from mysql db
	$id = $_GET['update']; 	
	$result = mysql_query("SELECT * FROM employee where id='$id' ");
	$row = mysql_fetch_array($result);
	
	echo"<form action=\"empupdate.php\" method=\"get\">";

	echo"<p>";

	echo"<div class=\"row\">";
	echo"<label for=\"name\"><b>Name:</b></label>";
	echo"<input type=\"text\" name=\"name\" value=" .$row['name'] . " >";
	echo"</div>";
	echo"<br>";
	
	echo"<div class=\"row\">";
	echo"<label for=\"empid\"><b>Employee ID:</b></label>";
	echo"<input type='text' id='id' name='empid' value= ".$row['id'] .">";
	echo"</div>";
	echo"<br>";
	
	echo"<div class=\"row\">";
	echo"<label for=\"gender\"><b>GENDER:</b></label>";
	echo"<input type='text' id='id' name='gender' value= ".$row['gender'] .">";
	echo"</div>";
	echo"<br>";
	
	echo"<div class=\"row\">";
	echo"<label for=\"slot\"><b>Mobile No:</b></label>";
	echo"<input type=\"text\" name=\"mobileno\" value =" .$row['mobileno']. " >";
	echo"</div>";


	echo"<div class=\"row\">";
	echo"<label for=\"position\"><b>Position:</b></label>";
	echo"<input type=\"text\" name=\"position\" value=" .$row['position'] .">";
	echo"</div>";

	echo"<div class=\"row\">";
	echo"<label for=\"address\"><b>Address:</b></label>";
	echo"<input type=\"text\" name=\"address\" value=" .$row['address'] .">";
	echo"</div>";

	echo"<div class=\"row\">";
	echo"<label for=\"dept\"><b>Department:</b></label>";
	echo"<input type=\"text\" name=\"department\" value=" .$row['department'] .">";
	echo"</div>";

	echo"<br>";

	echo"<br>";
?>

<div class="row">
<label for="Register The Employee"></label>

<button type="Submit" id="submit" value="add" onclick=" validateForm()"> UPDATE</button> 
</div><br>


</p>
</div>
</div>
</form>
</body>
</html>

