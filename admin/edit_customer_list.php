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
<title>Edit Customer Info | ADMIN </title>

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
		
		<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			    <a href="./">Home</a> <span class="divider">/</span>
			  </li>
			  <li class="active">Menu</li>
			</ul>
			
		</div> <!-- /.page-title -->
<?php include('lib/connect.php');


if(isset($_POST['submit']))
{
    $id=$_POST['id'];	
	$result=mysql_query("UPDATE members SET status='$_POST[status]', address='$_POST[address]' WHERE id=$id");

	if($result)
	{
		$con = "<b><font face='Arial, Helvetica, sans-serif' size='2' color='#006600'>Customer Status saved successfully.</font></b>";
	}
	else
	{
		$con = "<b><font face='Arial, Helvetica, sans-serif' size='2' color='#FF0000'>Customer Status could not be saved.</font></b>";
	}
}
else
{
	$con = "";
    $id=$_GET['id'];
	
}
?> 			
		<div class="row">
			
			<div class="span8">
	      		
	      		<div id="horizontal" class="widget widget-form">
	      			
	      			<div class="widget-header">	      				
	      				<h3>
	      					<i class="icon-pencil"></i>
	      					Edit Customer
      					</h3>	
      				</div> <!-- /widget-header -->
					
					<div class="widget-content">
					<?php echo $con; ?>						
					
						<form class="form-horizontal" action="edit_customer_list.php" method="post">
					        <fieldset>
					         
								<?php
								$sqlcat = mysql_query("SELECT * FROM members WHERE id=$id");
								while($row2 = mysql_fetch_array($sqlcat))
								{
								?> 								
																	
							 <div class="control-group">
					            <label class="control-label" for="input01">Customer ID</label>
					            <div class="controls">
					             <?php echo $row2['id']; 
									echo "<input type=hidden name=id value=".$row2['id'].">";					          
								?>  								
					            </div>
					          </div>
							  
							  <div class="control-group">
					            <label class="control-label" for="input01">Address</label>
					            <div class="controls">
					              <input type="text" class="input-large" name="address" id="input01" value="<?php echo $row2['address']; ?>">
					            </div>
					          </div>
							  
							  <div class="control-group">
					            <label class="control-label" for="input01">Status</label>
					            <div class="controls">								
								<?php
								if($_GET['id']){
								?>
								  <select name="ordstatus" id="input01" value="<?php echo $row2['status']; ?>"> 
									<option value="0">Active</option>									
									<option value="1">Inactive</option>
								  </select>
								<?php  
								}
								else{
								}  
								?>								  
					            </div>
					          </div>
                              
					          <?php
								}
							  ?> 
					          <div class="form-actions">
					            <button type="submit" name="submit" class="btn btn-primary btn-large">Edit</button>
					            <!-- <button class="btn btn-large">Delete</button> -->
					          </div>
					        </fieldset>
					      </form>	
						
					</div> <!-- /widget-content -->						
				</div>	
                </div>	    		
		
</div> <!-- /.container -->	
</div> <!-- /#content -->

<?php include('footer.php'); ?>

</body>
</html>