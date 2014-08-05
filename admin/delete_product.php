<?php 
 session_start(); 
if(!isset($_SESSION['id']))
{
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    exit();
}
if($_SESSION['authority']==6)
{
echo "<meta http-equiv='refresh' content='0; url=dashboard.php'>";
}

include('lib/connect.php');

//getting id of the data from url
$id = $_GET['id'];
$uid = $_GET['unique_id'];
//deleting the row from table
$sql2=mysql_query("DELETE FROM product where id=$id");

$sql_pic_byUID = mysql_query("SELECT picture.location, picture.unique_id 
                     FROM picture 
					 WHERE
					 picture.unique_id=$uid
					 ");
	while($picRows = mysql_fetch_array($sql_pic_byUID))
	{		
		unlink($picRows['location']);
	}

// Delete picture
$sqlPicDel=mysql_query("DELETE FROM picture where unique_id=$uid");

//redirecting to the display page (index.php in our case)
header("Location:product_list.php");
?>