<html>

<script>

function validate (){
var A = document.forms["online"]["firstname"].value;  
var B=document.forms["online"]["lastname"].value;
var C=document.forms["online"]["username"].value;
var D=document.forms["online"]["password"].value;
var a=document.forms["online"]["mobileno"].value;


var y = document.forms["online"]["email"].value;
var atpos = y.indexOf("@");
 var dotpos = y.indexOf(".");
 
 
if (A.length==0 || !A.match(/^[A-Za-z]*$/) ) {
        alert("enter a valid first name");
        return false;
}

if (B.length==0 || !B.match(/^[A-Za-z]*$/) ) {
        alert("enter a valid last name");
        return false;
}

if (C.length==0 ) {
        alert("enter a valid user name");
        return false;
}

if (D.length==0 ) {
        alert("enter a valid password");
        return false;
}

if(a.length==0 || !a.match(/^[0-9]{10}$/)){
         alert("Not a valid phone number");
        return false;
}



if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length) {
        alert("Not a valid e-mail address");
        return false;
    }


}

</script>

<body>
<style>
#d1 {
	border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

#d2 {
	 
	border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	
}

#d1,#d2 {
	 
}

#s1{
	 text-align: center;
	 background-color: red;
}

</style>
<div id="s1">SIGN UP</div>
<br>
<br>
<form id="d1" method="POST" action="hotelsignup.php" name="online" onsubmit="return validate()">

<input type="text" name="firstname" placeholder = "first name "></input><br><br>

<input type="text" name="lastname" placeholder = "last name "></input><br><br>



<input type="text" name="username" placeholder = "user name "></input><br><br>

<input type="password" name="password" placeholder = "password "></input><br><br>

<input type="text" name="mobileno" placeholder = "Mobile number "></input><br><br>

<input type="email" name="email" placeholder = "email "></input><br><br>

<button type = "submit" name = "signup"> sign up </button>



<?php
echo "<br>" ;
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
if(strpos($url,"error=redundancy")){
	echo "username already exists " ;
}
?>

</form>
<hr>
<br>

LOG IN
<form id="d2" method ="POST" action="hotellogin.php">
<br>
<input type="text" name="uname" placeholder = "username "></input><br><br>
<input type="password" name="pwd" placeholder = "password "></input><br><br>
<button type = "submit" name="login"> log in </button>
</form>
<?php
$url = $_SERVER['REQUEST_URI'];
if(strpos($url,"error=empty")){
	echo "<br>" ;
	echo "fill in all the details";
}

else if(strpos($url,"error=invalidcredentials")){
	echo "<br>" ;
	echo "invalid credentials";
}
?>


</body>

</html>

