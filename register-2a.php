<?php error_reporting(E_ERROR);	session_start(); 
	include('admin/lib/connect.php');
    if(!isset($_SESSION['username'])){
    } 	//	print_r($_POST);
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

<center>

<?php 

if(isset($_POST['Submit']))
{	
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];	
	$phone=$_POST['phone'];
	$bkash=$_POST['bkash'];
	$bkash=$_POST['address'];	
	$other=$_POST['other'];
	$username=$_POST['username'];	
	$password=$_POST['password'];
	$retypepass=$_POST['retypepass'];
	
// checking empty fields
if(empty($fname) || empty($lname) || empty($email)) 
	{
		if(empty($fname)){echo "<font color='red'>First Name field is empty!</font><br/>";}		
		if(empty($lname)){echo "<font color='red'>Last Name field is empty!</font><br/>";}
		if(empty($email)){echo "<font color='red'>Email Address, Phone field is empty!</font><br/>";}				
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)
	{	
		$result=mysql_query("INSERT INTO members(fname, lname, email, phone, bkash, address, other, username, password, status) 
		VALUES('$fname', '$lname', '$email', '$phone', '$bkash', ,'$address', '$other', '$username',MD5('".$password."'),'1'
)");
		// print_r($result);
		echo "<br><font color='chocolate'></center>New Guest Added. The guest will be notified by email or phone call later. Thanks! :)</center></font>";	
	}
}
?>
</center>
<!-- dynamism will be here -->
</div><!-- rightcontent2 end -->      
</div><!-- maincontent end -->  	
</div>
</body>
</html>