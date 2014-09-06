<?php error_reporting(E_ERROR);	session_start(); include('lib/connect.php');
if(!isset($_SESSION['id']))
{
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    exit();
}
if($_SESSION['authority']==6)
{
	echo "<meta http-equiv='refresh' content='0; url=dashboard.php'>";
    exit();
}
?>
<meta http-equiv="refresh" content="0; url=edit_order_list-3.php">
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Order Edit | ADMIN </title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<!-- Styles -->
<link href="./css/bootstrap.css" rel="stylesheet">
<link href="./css/bootstrap-responsive.css" rel="stylesheet">
<link href="./css/bootstrap-overrides.css" rel="stylesheet">
<link href="./css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">
<link href="./css/slate.css" rel="stylesheet">
<link href="./css/slate-responsive.css" rel="stylesheet">

<!-- Javascript -->
<script src="./js/jquery-1.7.2.min.js"></script>
<script src="./js/jquery-ui-1.8.21.custom.min.js"></script>
<script src="./js/jquery.ui.touch-punch.min.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/plugins/validate/jquery.validate.js"></script>
<script src="./js/Slate.js"></script>
<script src="./js/demos/demo.validate.js"></script>


</head>

<body>

  	
<div id="header">
	
	<div class="container">			
		
		<img src="img/logo.png" height="70" width="400" style="position:relative; top:20px"/>			
		
		<div id="info">				
			
			<a href="javascript:;" id="info-trigger">
				<i class="icon-cog"></i>
			</a>
			
			<div id="info-menu">
				
				<div class="info-details">
				
					<h4>Welcome back, <font color="#CC6600"><?php echo $_SESSION['username']; ?></font></h4>
					
					<p>
						
						<br>
						Want to logout, click <a href="logout.php">here.</a>
					</p>
					
				</div> <!-- /.info-details -->
				
				<!-- /.info-avatar -->
				
			</div> <!-- /#info-menu -->
			
		</div> <!-- /#info -->
		
	</div> <!-- /.container -->

</div> <!-- /#header -->


<?php include('menu.php'); ?>


<div id="content">
		
<div class="container">

<?php 
if(isset($_POST['submit']))
{
    $id=$_POST['id'];	
	$result=mysql_query("UPDATE order_list SET ord_status='$_POST[ordstatus]' WHERE ord_id=$id");
	
	if($result)
	{
		$con = "<b><font face='Arial, Helvetica, sans-serif' size='2' color='#060'>Order has updated successfully.</font></b>";
		// mail($to,$subject,$message,$headers);
	}
	else
	{
		$con = "<b><font face='Arial, Helvetica, sans-serif' size='2' color='#F00'>Order could not be updated!</font></b>";
	}
}
else
{
	$con = "";
    $id = $_GET['id'];	
}
?> 			

<div class="row">

<div class="span8">

<div id="horizontal" class="widget widget-form">

<div class="widget-header">	      				
<h3>
<i class="icon-pencil"></i>
Edit Order
</h3>	
</div> <!-- /widget-header -->

<div class="widget-content">
<?php echo $con; ?>						

</div> <!-- /widget-content -->						
</div>
</div>
		
</div> <!-- /.container -->	
</div> <!-- /#content -->

<?php include('footer.php'); ?>

</body>
</html>