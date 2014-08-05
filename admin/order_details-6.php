<?php session_start();

$oid=$_GET['ordid']; 

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

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Order Details | ADMIN </title>

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

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

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
						Want to logout, click <a href="logout.php">here.</a>
						<br><button onclick='myFunction()'><img src='../images/icon_printer.gif' style="width:16px; height:16px"> Print this page</button>
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
Order Details
</h3>
</div> <!-- /widget-header -->

<div class="widget-header">						
<h3>
<i class="icon-th-list"></i>
<?php							

$sql3 = mysql_query("SELECT * FROM order_list LEFT JOIN members ON members.username = order_list.username WHERE ord_id='$oid' LIMIT 1");
while($row3 = mysql_fetch_array($sql3))
{
echo "Order No. " . $row3['ord_id'].'       ';
echo "     &nbsp;&nbsp;&nbsp;&nbsp; Customer name : " . $row3['fname'].' '.$row3['lname'].'       ';
// echo "      "."<button onclick='myFunction()'><img src='../images/icon_printer.gif'> Print this page</button>";

// echo "<a href='' style='padding:0 0 0 30px'><img src='../images/icon_printer.gif' style='float:right; margin:0 5px  0 10px; width:20px; height:20px'> <span style='float:right'>Print</span></a>";

}	
?>						
</h3>

<script>
function myFunction() {
    window.print();
}
</script>

</div> <!-- /widget-header -->



<div class="widget-content">
						
						
<table class="table table-striped table-bordered table-highlight" id="example">
<thead>
	<tr>		
		<th>Product Name</th>
		<th>Price</th>
		<th>Quantity</th>		
	</tr>
</thead>

<tbody>

<?php 

/*
$orddetails = mysql_query("SELECT product.product_name, product.id, product.price, product.product_details, product.status, product.feature, picture.location 
FROM product
LEFT JOIN picture ON  product.unique_id = picture.unique_id  
WHERE product.status=1 AND product.cat1_id='$id'
GROUP BY product.id 
ORDER BY product.id DESC LIMIT $start, $perpage");
*/

/*
$sql2 = mysql_query("SELECT * FROM order_details members.fname, members.lname, members.phone, members.address, members.email 
FROM order_list
LEFT JOIN members 
ON members.username = order_list.username 
ORDER BY order_list.ord_time DESC"); 
*/

// $x = $row['ord_id'];


$sql2 = mysql_query("SELECT * FROM order_details WHERE ord_id='$oid'");

while($row2 = mysql_fetch_array($sql2))
{
?>                             
	<tr class="odd gradeX">		
		<td><?php echo $row2['product_name']; ?></td>
		<td><?php echo $row2['price']; ?></td>
		<td><?php echo $row2['quantity']; ?></td>		
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

<?php include('footer.php'); ?>

</body>
</html>