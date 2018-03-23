    <?php
  
   $x = $_POST['room'];
   
 echo"<h2 style='font-style: oblique;'> New value to be added </h2>";
   echo "<br>";
   echo"<form method='POST' action=Document7.php>";
    
  
   echo "<label style='font-style:italic; color:grey; text-size=200px;'> The new value of $x  is Rupees: </label><input   style='width=20px;' type='number' name = 'nw'>";
   echo" <input type='submit' name='submit' value='submit'>";
   echo"</form>";
  $cookie_name = "user";
$cookie_value = $x;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

  ?>