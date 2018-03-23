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

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
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
<div>
<h1> ROYAL HOTEL</h1>

<ul>
  <li><a  href="#home">Home</a></li>
  <li><a href="#news">login</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
    <li><a class="active" href="#about">Tariff</a></li>
       
     
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


