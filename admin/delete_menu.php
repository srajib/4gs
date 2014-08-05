<?php 
session_start(); 
if(!isset($_SESSION['admin_id']))
{
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    exit();
}
if($_SESSION['authority']<5)
{
echo "<meta http-equiv='refresh' content='0; url=dashboard.php'>";
}


include('lib/connect.php');

//getting id of the data from url

if(isset($_GET['id']))
{
$id = $_GET['id'];

//deleting the row from table
$sql2=mysql_query("DELETE FROM menu where menu_id=$id");
header("Location:main_menu.php");
}
else{}
/* (isset($_GET['subid']))
{
$subid = $_GET['subid'];
$sql_subcat_del=mysql_query("DELETE FROM menu where menu_id=$subid");

header("Location:sub_cat.php");

}
*/
?>