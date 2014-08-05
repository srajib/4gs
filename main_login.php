<?php error_reporting(E_ERROR);	session_start(); 
include('admin/lib/connect.php');	
ob_start();

$message="";
if(count($_POST)>0) { 
$password = md5($_POST["password"]);
$result = mysql_query("SELECT * FROM members WHERE username='" . $_POST["username"] . "' and password = '". $password."' AND members.user_type=2");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
	$_SESSION["id"] = $row['id'];
	$_SESSION["username"] = $row['username'];
} else {
	$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) { // && $_SESSION['authority']!=6
header("Location:index.php");
}
?>

<!doctype html>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>

<div style="padding:50px; width:400px; margin:30px auto; border:2px solid #EEE">

<div style="width:100%;">
	<center><img src="images/logo.png"/></center>
</div>

<form name="frmUser" method="post" action="">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center" colspan="2">Enter Login Details</td>
</tr>
<tr class="tablerow">
<td align="right">Username</td>
<td><input type="text" name="username"></td>
</tr>
<tr class="tablerow">
<td align="right">Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr class="tableheader">
<td></td><td><input type="Submit" name="Submit" value="Login"> or <a href="register.php">Register</a></td>
</tr>
</table>
</form>

</div>
</body>
</html>