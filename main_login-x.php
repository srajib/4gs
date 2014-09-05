<?php session_start(); include('admin/lib/connect.php'); 
$message="";
if(count($_POST)>0) { // md5()
// $password = md5($password);
// $qry="SELECT * FROM member WHERE username='$username' AND password='".md5($_POST['pass'])."'";
$result = mysql_query("SELECT * FROM members WHERE username='" . $_POST["username"] . "' and password = '".md5($_POST["password"])."'");
// $result = mysql_query("SELECT * FROM members WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
$row  = mysql_fetch_array($result);
if(is_array($row)) {
$_SESSION["id"] = $row[id];
$_SESSION["username"] = $row[username];
} else {
$message = "Invalid Username or Password!";
}
}
if(isset($_SESSION["id"])) {
header("Location:index.php");
}
?>

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
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>

</div>
</body>
</html>