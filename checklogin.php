<?php 
session_start();

if(isset($_SESSION['admin_id']))
{
	echo "<meta http-equiv='refresh' content='0; url=message.php'>";
}

if(isset($_POST['Submit']))
{
    include('admin/lib/connect.php');
    extract($_POST);
    $eid = mysql_escape_string($_POST['username']);
    $pas = mysql_escape_string(md5($_POST['password']));

	$sql = mysql_query("SELECT * FROM members WHERE username='$eid' AND password='$pas'");
		$row = mysql_num_rows($sql);
		
	if($row > 0)
	{
  	
	$selrow=mysql_fetch_assoc($sql); 
	$con = "<b><font face='Arial, Helvetica, sans-serif' size='2' color='#006600'>Login was successful. Redirecting..</font></b>";
		
		$_SESSION['admin_id'] = $selrow['id']; /* $_SESSION['name'] = $selrow['admin_name']; $_SESSION['authority']=$selrow['authority']; */
		echo "<meta http-equiv='refresh' content='2; url=message.php'>";		
	}
	else	{
		
			$con = "<b><font face='Arial, Helvetica, sans-serif' size='2' color='#FF0000'>Your ID or Password was wrong. Please try again.</font></b>";
			}
}
else
{
	$con = "";
}
?>