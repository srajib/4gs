<meta http-equiv="refresh" content="1; url=main_cat.php">
<?php include('lib/connect.php');
$id=$_GET['id'];
if(isset($_GET['pval']))
{
    $pval=$_GET['pval'];
			if ($pval=='0'){	
				$x=mysql_query("UPDATE cat1 SET is_published='1' WHERE cat1_id='$id';");
			}
			else{
				$x=mysql_query("UPDATE cat1 SET is_published='0' WHERE cat1_id='$id';");
			   }	
}
elseif(isset($_GET['stval']))
{
     $status=$_GET['stval'];
            if ($status=='0'){	
				$x=mysql_query("UPDATE cat1 SET status='1' WHERE cat1_id='$id';");
			}
			else{
				$x=mysql_query("UPDATE cat1 SET status='0' WHERE cat1_id='$id';");
			   } 
	 
	 
}

//header('main_cat.php');
?>