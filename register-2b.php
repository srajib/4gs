<?php error_reporting(E_ERROR);	session_start(); include('admin/lib/connect.php');    


/*
$message = '<html><body>';
$message .= '<img src="http://css-tricks.com/examples/WebsiteChangeRequestForm/images/wcrf-header.png" alt="Website Change Request" />';
$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
$message .= "<tr style='background: #eee;'><td><strong>Name:</strong> </td><td>" . strip_tags($_POST['req-name']) . "</td></tr>";
$message .= "<tr><td><strong>Email:</strong> </td><td>" . strip_tags($_POST['req-email']) . "</td></tr>";
$message .= "<tr><td><strong>Type of Change:</strong> </td><td>" . strip_tags($_POST['typeOfChange']) . "</td></tr>";
$message .= "<tr><td><strong>Urgency:</strong> </td><td>" . strip_tags($_POST['urgency']) . "</td></tr>";
$message .= "<tr><td><strong>URL To Change (main):</strong> </td><td>" . $_POST['URL-main'] . "</td></tr>";

if (($addURLS) != '') {
	$message .= "<tr><td><strong>URL To Change (additional):</strong> </td><td>" . strip_tags($addURLS) . "</td></tr>";
}
$curText = htmlentities($_POST['curText']);           
if (($curText) != '') {
	$message .= "<tr><td><strong>CURRENT Content:</strong> </td><td>" . $curText . "</td></tr>";
}
$message .= "<tr><td><strong>NEW Content:</strong> </td><td>" . htmlentities($_POST['newText']) . "</td></tr>";
$message .= "</table>";
$message .= "</body></html>";

*/


?>

<meta http-equiv="refresh" content="0; url=index.php">

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

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>

<div id="rightcontent2">

<div class="leftcat1list1">Register or <a href="main_login.php">Login</a>

</div>

<center>

<?php 
// echo date("Y-m-j");

// $today = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
if(isset($_POST['Submit']))
{	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];	
	$phone=$_POST['phone'];
	$bkash=$_POST['bkash'];
	$address=$_POST['address'];	
	$other=$_POST['other'];
	$username=$_POST['username'];	
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];
	$updated_by=$_POST['username'];		
	
	
	$to = $_POST['email'];
	$from = "admin@4gshopping.com" ;
	$subject = "Registration confirmation on 4GS.";
	$message = "Dear " . $fname . " " . $lname;
	$message .=", ";
	$message .="\n";
	$message .="Your user name is " . $username . " and password is " . $password;
	$headers = "From:" . $from;
	
	mail($to,$subject,$message,$headers);
	echo "Thank you! " . $fname . " " . $lname . ", you have successfully registered into 4gshopping.com. We will contact you shortly.";
	
	$x=date("Y-m-j h-i-s");
	$y=date("Y-m-j h-i-s");
// checking empty fields
if(empty($fname) || empty($lname) || empty($email)) 
	{
		if(empty($fname)){echo "<font color='red'>First Name field is empty!</font><br/>";}		
		if(empty($lname)){echo "<font color='red'>Last Name field is empty!</font><br/>";}
		if(empty($email)){echo "<font color='red'>Email Address field is empty!</font><br/>";}				
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)	// $_POST['username']
	{	
		$result=mysql_query("INSERT INTO members(fname, lname, email, phone, bkash, address, other, username, password, updated_by, created, updated, user_type, status) 
		VALUES('$fname', '$lname', '$email', '$phone', '$bkash', '$address', '$other', '$username', MD5('".$password."'), '$username', '$x', '$y', '2', '1')");
		// print_r($result);
		echo "<br><font color='chocolate'></center> Thank you! You have been added as a new user! <br>Redirect to home page... :)</center></font>";	

		$x = md5($password);
		
		$result = mysql_query("SELECT * FROM members WHERE username='$username' and password = '$x' AND members.user_type=2");
		$row  = mysql_fetch_array($result);
		if(is_array($row)) {
			$_SESSION["id"] = $row['id'];
			$_SESSION["username"] = $row['username'];
			header("Location:index.php");
		}		
	}
}
?>
</center>
<!-- dynamism will be here -->
</div><!-- rightcontent2 end -->      
</div><!-- maincontent end -->  	
</div>

<?php
/*
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
if(isset($_SESSION["id"])) { 
header("Location:index.php");
}
*/
?>	


</body>
</html>