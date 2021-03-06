<?php error_reporting(E_ERROR);	session_start();
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
<meta http-equiv="refresh" content="0; url=order_list.php">
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Order List | ADMIN </title>

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
		
		<img src="img/logo.png" height="70" width="400" style="position:relative; top:20px">			
		
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
	
<?php include('lib/connect.php');
extract($_POST);
?> 			
		<div class="row">
			
			<div class="span12">
	      		
	      		<div class="widget widget-table">
						
					<div class="widget-header">						
						<h3>
							<i class="icon-th-list"></i>
							Order List							
						</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
<table class="table table-striped table-bordered table-highlight" id="example">
<thead>
	<tr>
		<th>Order ID</th>
		<th>Customer Name</th>
		<th>Total Price</th>
		<th>Final Bill</th>		
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Order Status</th>
	</tr>
</thead>

<tbody>

<?php $sql2 = mysql_query("SELECT order_list.*, members.fname, members.lname, members.phone, members.address, members.email 
FROM order_list
LEFT JOIN members 
ON members.username = order_list.username 
ORDER BY order_list.ord_time DESC LIMIT 1"); 

while($row2 = mysql_fetch_array($sql2))
{
?>                             
	<tr class="odd gradeX">
		<td><?php echo $row2['ord_id']; ?></td>		
		<td><a href="order_details.php?ordid=<?php echo $row2['ord_id']; ?>"><?php echo $row2['fname'].' '.$row2['lname']; ?></a></td>
		<td><?php echo $row2['total_price']; ?></td>
		<td><?php echo $row2['final_bill']; ?></td>
		<td><?php echo $row2['email']; ?></td>
		<td><?php echo $row2['phone']; ?></td>				
		<td><?php echo $row2['address']; ?></td>
		<td>
		<?php 
			if($row2['ord_status']=='0') { echo 'Pending';} 
			elseif($row2['ord_status']=='1') { echo 'Excepted';} 
			elseif($row2['ord_status']=='2') { echo 'Wait';} 
			elseif($row2['ord_status']=='3') { echo 'Sent';} 
			elseif($row2['ord_status']=='4') { echo 'Collect';} 
			elseif($row2['ord_status']=='5') { echo 'Return';} 
			elseif($row2['ord_status']=='6') { echo 'Refund';} 
			elseif($row2['ord_status']=='7') { echo 'Successfuly Received';} 
			elseif($row2['ord_status']=='8') { echo 'Successfuly Stocked';} 			
			else{echo 'Return to Origin';}
			?></td>
	</tr>
<?php
}
?>

</tbody>
</table>
						
</div> <!-- /widget-content -->
</div> <!-- /widget -->	
</div> <!-- /span12 -->		
</div> <!-- /.container -->
</div> <!-- /#content -->


<?php 
// $ss=$row2['ord_status'];
$to = $row2['email'];
$message .= "The status of your order has been updated.";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Admin<info@4gshopping.com>' . "\r\n";
$headers .= 'Cc: rajib1111@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);
?>


<?php include('footer.php'); ?>

</body>
</html>