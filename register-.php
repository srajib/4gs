<?php error_reporting(E_ERROR);	session_start(); 
	include('admin/lib/connect.php');
    if(!isset($_SESSION['Username'])){
    } 
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Register | Genius Technology Ltd</title>
	<?php include('somelinks.php'); ?>	
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<?php include('slider.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>

<div id="rightcontent2">

<div class="leftcat1list1">Register or <a href="main_login.php">Login</a>

</div>

<form action="register-2.php" method="post" name="form3">
<table style="width:400px; margin:30px 70px">
<tr>
	<td>First Name:</td><td><input type="text" name="fname"></td>
</tr>
<tr>
	<td>Last Name:</td><td><input type="text" name="lname"></td>
</tr>
<tr>
	<td>Email:</td><td><input type="text" name="email"></td>
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
	<td>User Name:</td><td><input type="text" name="username"></td>
</tr>
<tr>
	<td>Password:</td><td><input type="password" name="password"></td>
</tr>
<tr>
	<td>Retype Password:</td><td><input type="password" name="retypepass"></td>
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