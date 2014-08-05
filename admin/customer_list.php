<?php error_reporting(E_ERROR); session_start();
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
<title>Customer List | ADMIN </title>

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
							Customer List							
						</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
<table class="table table-striped table-bordered table-highlight" id="example">
<thead>
	<tr>
		<th>SL</th>
		<th>First name</th>
		<th>Last Name</th>
		<th>Contact No.</th>
		<th>Email</th>
		<th>Address</th>
		<th>Username</th>
		<th>Bkash No.</th>
		<th>Status</th>
		<th>Action</th>		
	</tr>
</thead>

<tbody>

<?php $sql2 = mysql_query("SELECT * FROM members ORDER BY id DESC"); 
$i=0;
while($row2 = mysql_fetch_array($sql2))
{

?>                             
	<tr class="odd gradeX">
	<?php $i=$i+1; ?>
		<td><?php echo $i.'.'; ?></td>
		<td><?php echo $row2['fname']; ?></td>
		<td><?php echo $row2['lname']; ?></td>
		<td><?php echo $row2['phone']; ?></td>
		<td><?php echo $row2['email']; ?></td>
		<td><?php echo $row2['address']; ?></td>
		<td><?php echo $row2['username']; ?></td>
		<td><?php echo $row2['bkash']; ?></td>
		<td><?php $flag=$row2['status']; if($flag==1){ echo "Active";} else  echo "Inactive" ;?></td>
		<td>			
			<a href="edit_customer_list.php?id=<?php echo $row2['id'];?>">Edit</a> 			
		</td>
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