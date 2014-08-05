<?php error_reporting(E_ERROR);	session_start(); 
	include('admin/lib/connect.php');
    if(!isset($_SESSION['Username'])){
    } 
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Login | Genius Technology Ltd</title>
	<?php include('somelinks.php'); ?>	
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<?php include('slider.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>

<div id="rightcontent2">

<div class="leftcat1list1">Login or <a href="register.php">Register</a>


</div>

<table style="width:400px; margin:30px 70px">
<tr>
	<td>User Name:</td><td><input type="text" name="username"></td>
</tr>
<tr>
	<td>Password:</td><td><input type="text" name="password"></td>
</tr>
<tr>
	<td></td><td><input type="Submit" value="Login" name="submit"></td>
</tr>
</table>

<!-- dynamism will be here -->



</div><!-- rightcontent2 end -->      
</div><!-- maincontent end -->  	

</div>
	
</body>
</html>