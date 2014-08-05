<?php 
session_start(); 
if(!isset($_SESSION['id']))
{
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    exit();
}
if($_SESSION['authority']==5)
{
echo "<meta http-equiv='refresh' content='0; url=dashboard.php'>";
}


include('lib/connect.php');

//getting id of the data from url

if(isset($_GET['id']))
{
$id = $_GET['id'];

//deleting the row from table
$sql2=mysql_query("DELETE FROM cat1 where cat1_id=$id");
header("Location:main_cat.php");
}
elseif(isset($_GET['subid']))
{
$subid = $_GET['subid'];
$sql_subcat_del=mysql_query("DELETE FROM cat2 where cat2_id=$subid");

header("Location:sub_cat.php");

}

?>