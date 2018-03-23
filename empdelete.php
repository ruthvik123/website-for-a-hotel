<?php

	$dbhost = 'localhost' ;
	$username = 'root' ;
	$password = '' ;
	$db = 'hotel' ;
    //open connection to mysql db
	$connection = mysql_connect("localhost","root") or die("Error " . mysql_error($connection));
	mysql_select_db($db);
/*
echo "<script>
var eadd=prompt(\"Please enter your email address\");
$.ajax(
{
    type: \"POST\",
    url: \"/empdelete.php\",
    data: eadd,
    success: function(data, textStatus, jqXHR)
    {
        console.log(data);
    }
});
</script>";
*/	
	
$id = $_GET['delete']; 	
 
$checked_arr = $_GET['delete'];  // checking the number of checkboxes checked
$count = count($checked_arr);

 for($i=0 ; $i<$count ; $i++){
$query = "delete from employee where id='".$id[$i]."' "  ;	 
$result = mysql_query($query) or die("Error in Selecting " . mysql_error($connection));
	 
 }
 

			 header("location:emptable.php");
?>
