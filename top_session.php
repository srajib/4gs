<?php error_reporting(E_ERROR);	session_start(); 
	include('admin/lib/connect.php');			
	if(isset($_GET['id'])){
		$id=$_GET['id'];
	}
	else{
		echo "No valid product id"; 
		exit();
	}
?>