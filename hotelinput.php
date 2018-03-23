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
*{
	margin:0px;
}
body{
	background-image:url("falaknuma.jpg");
	background-size:100%;
}
#d1 {
	border-top-left-radius: 35px;
	border-bottom-right-radius:35px;
		border-top-right-radius: 5px;
	border-bottom-left-radius:5px;
	border:2px solid green;
    padding: 20px;
	text-align:center;
	margin-left:300px;
	margin-right:300px;
	background-color: #b3b6b7;
	opacity:0.85;
	z-index:1;
}

#d2 {
	border-top-right-radius: 35px;
	border-bottom-left-radius:35px;
	border-top-left-radius:5px;
	border-bottom-right-radius:5px;
    border:2px solid green;
    padding: 20px;
	text-align:center;
		margin-left:300px;
	margin-right:300px;
		background-color: #b3b6b7;
	opacity:0.85;
	
}



#s1{
	color:white;
	margin-top:30px;
	 text-align: center;
	 margin-bottom:15px;
	 font-size:20px;
	 
}
#bt{
	width:80px;
	height:35px;
	border:none;
	text-decoration:none;
	color:white;
	background-color:green;
	border-radius:5px;
	box-shadow: 0px 10px 10px 3px #000;
	cursor:pointer;
}
#bt:hover{
	background-color:white;
	color:green;
	box-shadow:none;
	border-radius:5px;
	font-size:14px;
	
}
#tt{
	width:175px;
	height:25px;
	padding:7px;
}
</style>
<p id="s1">SIGN UP</p
<br>
<br>
<form id="d1" method="POST" action="hotelsignup.php" name="online" onsubmit="return validate()">

<input id="tt" type="text" name="firstname" placeholder = "first name "></input><br><br>

<input  id="tt" type="text" name="lastname" placeholder = "last name "></input><br><br>



<input id="tt" type="text" name="username" placeholder = "user name "></input><br><br>

<input id="tt" type="password" name="password" placeholder = "password "></input><br><br>

<input id="tt" type="text" name="mobileno" placeholder = "Mobile number "></input><br><br>

<input id="tt" type="email" name="email" placeholder = "email "></input><br><br>

<button  id="bt" type = "submit" name = "signup"> Sign up </button>



<?php
echo "<br>" ;
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
if(strpos($url,"error=redundancy")){
	echo "username already exists " ;
}
?>

</form>

<br>

<p id="s1">LOG IN</p>
<form id="d2" method ="POST" action="hotellogin.php">
<br>
<input id="tt" type="text" name="uname" placeholder = "username "></input><br><br>
<input id="tt" type="password" name="pwd" placeholder = "password "></input><br><br>
<button id="bt" type = "submit" name="login"> Log In </button>
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

