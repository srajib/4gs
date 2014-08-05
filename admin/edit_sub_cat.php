<meta http-equiv="refresh" content="1; url=sub_cat.php">
<?php include('lib/connect.php');
$id=$_GET['id'];

if(isset($_GET['pval']))
{
	$pval=$_GET['pval'];
	if ($pval=='0')
	{	
		$x=mysql_query("UPDATE cat2 SET is_published='1' WHERE cat2_id='$id';");
	}
	else
	{
		$x=mysql_query("UPDATE cat2 SET is_published='0' WHERE cat2_id='$id';");
	}	
}
elseif(isset($_GET['stval']))
{
    $stval=$_GET['stval'];
    if ($stval=='0')
	{	
		$x=mysql_query("UPDATE cat2 SET status='1' WHERE cat2_id='$id';");
	}
	else
	{
		$x=mysql_query("UPDATE cat2 SET status='0' WHERE cat2_id='$id';");
	}	
}






//header('main_cat.php');
?>