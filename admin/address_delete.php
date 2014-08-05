<?php 
session_start(); 
if(!isset($_SESSION['admin_id']))
{
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    exit();
}
if($_SESSION['authority']<4)
{
echo "<meta http-equiv='refresh' content='0; url=dashboard.php'>";
}



include('lib/connect.php');

//getting id of the data from url
$a_id = $_GET['address_id'];

//deleting the row from table
$sql2=mysql_query("DELETE FROM address where address_id=$a_id");


	


// Delete picture



//redirecting to the display page (index.php in our case)
header("Location:address_list.php");
?>

