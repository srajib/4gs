<?php error_reporting(E_ERROR);	session_start(); include('admin/lib/connect.php');
//Include The Database Connection File 

if(isset($_POST['email']))//If a email has been submitted 
{
$email = mysql_real_escape_string($_POST['email']);//Some clean up :)

$check_for_email = mysql_query("SELECT id FROM members WHERE email='$email'");
//Query to check if email is available or not 

if(mysql_num_rows($check_for_email))
{
echo '1';//If there is a  record match in the Database - Not Available
}
else
{
echo '0';//No Record Found - Username is available 
}

}

?>