<html>
<head>
	<title>Cab Details</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		
		a{
			color:black;
		}
		footer{
			valign:bottom;
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
#dd{
	padding-left:800px;
	
}

	</style>
</head>
<body>
	<div>
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
				<a href="room_details.html">Room Details</a>
				</div>
			</li>
			<li style="float:right"><a class="active" href="main.html">Logout</a></li>
		</ul> 
</div>
	<h1>THE ROYAL HOTEL</h1>
	<table class="data-table">
		<caption class="title">CAB Details</caption>
<form action="" method="get">
		<div>
		<thead>
			<tr>
				<th>BOOKED BY</th>
				<th>DATE</th>
				<th>DESTINATION</th>
				<th>CONTACT NO.</th>
				<th>TIME</th>
				<th>TOTAL COST</th>
			</tr>
		</thead>
		<tbody>
		<?php
		
		$dbhost = 'localhost' ;
	$username = 'root' ;
	$password = '' ;
	$db = 'hotel' ;
	$connection = mysql_connect("localhost","root") or die("Error " . mysql_error($connection));
	mysql_select_db($db);
 
$result = mysql_query("SELECT * FROM pickup");
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['date'] . "</td>";
  echo "<td>" . $row['destination'] . "</td>";
  echo "<td>" . $row['mobilenumber'] . "</td>";
  echo "<td>" . $row['time'] . "</td>";
  echo "<td>" . $row['cost'] . "</td>";
  echo "</tr>";
  }?>
  </tbody>
  
		<tfoot>
			<tr>
				<th colspan="11"></th>
			</tr>
		</tfoot>
	</table><br>
	</form>	
	<br>
	<br>
</body>
</html>