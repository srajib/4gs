<?php error_reporting(E_ERROR);	session_start(); include('admin/lib/connect.php');
    if(!isset($_SESSION['username'])){
    } 	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">  
<title>Register | Genius Technology Ltd</title>
<?php include('somelinks.php'); ?>	
	

<script type="text/javascript">
$(document).ready(function()//When the dom is ready 
{
$("#email").change(function() 
{ //if theres a change in the email textbox

var email = $("#email").val();//Get the value in the email textbox
if(email.length > 3)//if the lenght greater than 3 characters
{
$("#availability_status_email").html('<img src="loader.gif" align="absmiddle">&nbsp;Checking availability...');
//Add a loading image in the span id="availability_status_email"

$.ajax({  //Make the Ajax Request
    type: "POST",  
    url: "ajax_check_email.php",  //file name
    data: "email="+ email,  //data
    success: function(server_response){  
   
   $("#availability_status_email").ajaxComplete(function(event, request){ 

	if(server_response == '0')//if ajax_check_email.php return value "0"
	{ 
	$("#availability_status_email").html('<img src="available.png" align="absmiddle"> <font color="Green"> Available </font>  ');
	//add this image to the span with id "availability_status_email"
	}  
	else  if(server_response == '1')//if it returns "1"
	{  
	 $("#availability_status_email").html('<img src="not_available.png" align="absmiddle"> <font color="red">Not Available </font>');
	}  
   
   });
   } 
   
  }); 

}
else
{

$("#availability_status_email").html('<font color="#cc0000">Email too short</font>');
//if in case the email is less than or equal 3 characters only 
}

return false;
});

});
</script>


<script type="text/javascript">
$(document).ready(function()//When the dom is ready 
{
$("#username").change(function() 
{ //if theres a change in the username textbox

var username = $("#username").val();//Get the value in the username textbox
if(username.length > 2)//if the lenght greater than 3 characters
{
$("#availability_status").html('<img src="images/loader.gif" align="absmiddle">&nbsp;Checking availability...');
//Add a loading image in the span id="availability_status"

$.ajax({  //Make the Ajax Request
    type: "POST",  
    url: "ajax_check_username.php",  //file name
    data: "username="+ username,  //data
    success: function(server_response){  
   
   $("#availability_status").ajaxComplete(function(event, request){ 

	if(server_response == '0')//if ajax_check_username.php return value "0"
	{ 
	$("#availability_status").html('<img src="images/available.png" align="absmiddle"> <font color="Green"> Available </font>  ');
	//add this image to the span with id "availability_status"
	}  
	else  if(server_response == '1')//if it returns "1"
	{  
	 $("#availability_status").html('<img src="images/not_available.png" align="absmiddle"> <font color="red">Not Available </font>');
	}  
   
   });
   } 
   
  }); 

}
else
{
$("#availability_status").html('<font color="#cc0000">Username too short</font>');
//if in case the username is less than or equal 3 characters only 
}
return false;
});
});
</script>





<script>
function validate(){
    if(!document.getElementById("password").value==document.getElementById("confirm_password").value)alert("Passwords do no match");
    return document.getElementById("password").value==document.getElementById("confirm_password").value;
	return false;
}
</script>



<script>
var testresults
function checkemail(){
var str=document.validation.email.value
var filter=/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i
if (filter.test(str))
testresults=true
else{
alert("Please input a valid email address!")
testresults=false
}
return (testresults)
}
</script>

<script>
function checkbae(){
if (document.layers||document.getElementById||document.all)
return checkemail()
else
return true
}
</script>

	
</head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>

<div id="rightcontent2">

<div class="leftcat1list1">Register or <a href="main_login.php">Login</a>

</div>

<form onSubmit="return validate()" action="register-2.php" method="post" name="validation">
<table style="width:400px; margin:30px 70px">
<tr>
	<td>First Name:</td><td><input type="text" name="fname"></td>
</tr>
<tr>
	<td>Last Name:</td><td><input type="text" name="lname"></td>
</tr>
<tr>
	<td>Email:</td><td><input type="text" id="email" name="email"><span id="availability_status_email"></span></td>
</tr>
<tr>
	<td>Phone / Mobile:</td><td><input type="text" name="phone"></td>
</tr>
<tr>
	<td>Address:</td><td><input type="text" name="address"></td>
</tr>
<tr>
	<td>bKash:</td><td><input type="text" name="bkash"></td>
</tr>
<tr>
	<td>Other:</td><td><input type="text" name="other"></td>
</tr>
<tr>
	<td>User Name:</td><td><input type="text" id="username" name="username"><span id="availability_status"></span></td>
</tr>
<tr>
	<td>Password:</td><td><input type="password" id="password" name="password"></td>
</tr>
<tr>
	<td>Retype Password:</td><td><input type="password" id="confirm_password" name="confirm_password"></td>
</tr>
<tr>
	<td></td><td><input type="Submit" value="Submit" name="Submit"></td>
</tr>

</table>
</form>

<!-- dynamism will be here -->

</div><!-- rightcontent2 end -->      
</div><!-- maincontent end -->  	

</div>

</body>
</html>