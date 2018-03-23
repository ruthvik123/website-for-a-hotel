  <!DOCTYPE html>
<html>
<head>
<style>


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

table {
   margin-left:400px;
    width: 50%;
}

th, td {
    text-align: left;
    padding: 8px;
}
td{
 box-shadow:  0px 10px 10px 0px #888888;
	border:1px solid  white;
	font-family: Elephant;
}



th {
   padding-left:200px;
    color: black;
	text-align:left;
	font-family:  Broadway;
	background-color:gold;
	border:2px solid grey;
	 box-shadow:  0px 10px 10px 0px #888888;
}
.bn{
display:block;
  background-color:#4CAF50;
  color:white;
  width:170px;
  height:40px;
  text-decoration:none;
  color:white;
  text-align:center;
  border:none;
  border-radius:5px;
  padding-top:6px;
  box-shadow:  0px 10px 10px 0px #888888;
  margin-left:600px;
  margin-top:30px;
  }
  h1{
    font-style: italic;
   float:right;
  }
  
  h2{
    font-style: italic;
     text-align:center;
	 font-size:30px;
	  
  }
 
   
</style>
</head>
<body>
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

<h2> Tariff and Plan</h2>
<div id="trf">
<table>
  <tr>
    <th> KING</th>
     
  </tr>
  <tr>
    <td> Bed type </td>
    <td>  King-size or twin beds available
	 </td>
     
  </tr>
  <tr>
    <td> Cost</td>
    <td>  
   <?php
session_start();   
    $username = 'localhost' ;
	$password = '' ;
	$db = 'hotel' ;
	
   
   
$con  = mysql_connect("localhost","root","")  ;
   if(! $con ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "SELECT costpernight FROM rooms WHERE suittype='king'";
   mysql_select_db($db);
  $result = mysql_query($sql) or die('Error in Selecting '. mysql_error($con ));
 
   
   if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }
   
   $row = mysql_fetch_array($result, MYSQL_ASSOC) ; 
      echo $row['costpernight']   ;
     
   
    
   
   mysql_close($con);
    ?>

</td>
 
  </tr>
  
  
   <tr>
  
    <th> QUEEN</th>
     
  </tr>
  <tr>
    <td>  Bed type </td>
    <td>  Queen-size or twin beds available </td>
    
  </tr>
  <tr>
    <td>Cost </td>
    <td>    <?php
   
    $username = 'localhost' ;
	$password = '' ;
	$db = 'hotel' ;
	
   
   
$con  = mysql_connect("localhost","root","")  ;
   if(! $con ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "SELECT costpernight FROM rooms WHERE suittype='queen'";
   mysql_select_db($db);
  $result = mysql_query($sql) or die('Error in Selecting '. mysql_error($con ));
 
   
   if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }
   
   $row = mysql_fetch_array($result, MYSQL_ASSOC) ; 
      echo $row['costpernight']   ;
     
   
    
   
   mysql_close($con);
    ?> </td>
 
  </tr>
  
 
  <tr>
    <th> JACK AC</th>
     
  </tr>
  <tr>
    <td> Bed type  </td>
    <td> Located on 5h floor with spectacular city views  </td>
    
  </tr>
  <tr>
    <td> Cost</td>
    <td>	
	    <?php
   
    $username = 'localhost' ;
	$password = '' ;
	$db = 'hotel' ;
	
   
   
$con  = mysql_connect("localhost","root","")  ;
   if(! $con ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "SELECT costpernight FROM rooms WHERE suittype='jack ac'";
   mysql_select_db($db);
  $result = mysql_query($sql) or die('Error in Selecting '. mysql_error($con ));
 
   
   if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }
   
   $row = mysql_fetch_array($result, MYSQL_ASSOC) ; 
      echo $row['costpernight']   ;
     
   
    
   
   mysql_close($con);
    ?>
    </td>
 
  </tr>
     
 
  <tr>
    <th> JACK N/A </th>
   
     
  </tr>
  <tr>
    <td>  Bed type </td>
    <td> Simple double bed non ac room </td>
    
  </tr>
  <tr>
    <td>Cost </td>
    <td>     <?php
   
    $username = 'localhost' ;
	$password = '' ;
	$db = 'hotel' ;
	
   
   
$con  = mysql_connect("localhost","root","")  ;
   if(! $con ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = "SELECT costpernight FROM rooms WHERE suittype='jack non ac'";
   mysql_select_db($db);
  $result = mysql_query($sql) or die('Error in Selecting '. mysql_error($con ));
 
   
   if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }
   
   $row = mysql_fetch_array($result, MYSQL_ASSOC) ; 
      echo $row['costpernight']   ;
     
   
    
   
   mysql_close($con);
    ?> </td>
 
  </tr>
   

 
</table>
 <a id class="bn " href="hotelafterlogin.php"> Book now </a>
</div>
</body>
</html>


