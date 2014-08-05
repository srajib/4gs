<?php session_start();
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
<title>SubCategory | Admin Genius Technlogy</title>

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
			  <li class="active">Sub-Category</li>
			</ul>			
		</div> <!-- /.page-title -->
		
<?php include('lib/connect.php');
extract($_POST);

if(isset($_POST['submit']))
{
	$sql1 = mysql_query("INSERT INTO cat2(cat1_id,cat2_name,cat2_details) VALUES('$cat1','$name','$desc')");
	if($sql1)
	{
		$con = "<b><font face='Arial, Helvetica, sans-serif' size='2' color='#006600'>Sub-Category saved successfully.</font></b>";
	}
	else
	{
		$con = "<b><font face='Arial, Helvetica, sans-serif' size='2' color='#FF0000'>Sub-Category could not be saved.</font></b>";
	}
}
else
{
	$con = "";
}
?> 			
		<div class="row">
			
			<div class="span8">
	      		
	      		<div id="horizontal" class="widget widget-form">
	      			
	      			<div class="widget-header">	      				
	      				<h3>
	      					<i class="icon-pencil"></i>
	      					Add New Sub-Category	      					
      					</h3>	
      				</div> <!-- /widget-header -->
					
					<div class="widget-content">
					<?php echo $con; ?>	
						<form class="form-horizontal" action="sub_cat.php" method="post">
					        <fieldset>
					          <div class="control-group">
					            <label class="control-label" for="input01">Category Name</label>
					            <div class="controls">
					              <select name="cat1">
                                  <option>-- Select Category --</option>
                                  <?php
								  $sql3 = mysql_query("SELECT * FROM cat1 ORDER by cat1_name");
								  while($row3 = mysql_fetch_assoc($sql3))
								  {
									  ?>
                                  <option value="<?php echo $row3['cat1_id']; ?>"><?php echo $row3['cat1_name']; ?></option>
                                  <?php
								  }
								  ?>
                                  </select>
					              <!--<p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>-->
					            </div>
					          </div>
                              
                              <div class="control-group">
					            <label class="control-label" for="input01">Sub-Category Name</label>
					            <div class="controls">
					              <input type="text" class="input-large" name="name" id="input01">
					              <!--<p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>-->
					            </div>
					          </div>
                              
                              <div class="control-group">
					            <label class="control-label" for="input01">Description</label>
					            <div class="controls">
					              <textarea name="desc" style="height:100px;"></textarea>
					              <!--<p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>-->
					            </div>
					          </div>
                              
					          
					          <div class="form-actions">
					            <button type="submit" name="submit" class="btn btn-primary btn-large">Add Sub-Category</button>
					            <button class="btn btn-large">Cancel</button>
					          </div>
					        </fieldset>
					      </form>	
						
					</div> <!-- /widget-content -->
						
				</div>	
                </div>
                
				
			<div class="span12">
	      		
	      		<div class="widget widget-table">
						
					<div class="widget-header">						
						<h3>
							<i class="icon-th-list"></i>
							Current SubCategory List							
						</h3>
					</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						
						
						
						<table class="table table-striped table-bordered table-highlight" id="example">
							<thead>
								<tr>
									<th>Sub-Category ID</th>
                                    <th>Category Name</th>
									<th>Sub-Category Name</th>
									<th>Sub-Category Details</th>
									<th>Published</th>
                                    <th>Action</th>
								</tr>
							</thead>
							<tbody>
<?php
$sql2 = mysql_query("SELECT * FROM cat2 order by cat2_name ASC");
while($row2 = mysql_fetch_array($sql2))
{
?>                             
	<tr class="odd gradeX">
		<td><?php echo $row2['cat2_id']; ?></td>
		<td>
		<?php 
		$id2 = $row2['cat1_id']; 
		$sql4 = mysql_query("SELECT * FROM cat1 WHERE cat1_id='$id2'");
		$row4 = mysql_fetch_assoc($sql4);
		echo $row4['cat1_name'];
		?></td>
		<td><?php echo $row2['cat2_name']; ?></td>
		<td><?php echo $row2['cat2_details']; ?></td>
		<td>
		<?php 
			if($row2['is_published']=='0'){
		?>
				<a href="edit_sub_cat.php?id=<?php echo $row2['cat2_id']; ?>&&pval=0"><img src="img/red.jpg" style="width:16px; height:16px"/></a>
		<?php }											
			else {
		?>
				<a href="edit_sub_cat.php?id=<?php echo $row2['cat2_id']; ?>&&pval=1"><img src="img/green.jpg" style="width:16px; height:16px"/></a>
		<?php } ?>
		
		</td>
		
			<td><a href="edit_subcat.php?subid=<?php echo $row2['cat2_id'];?>">edit</a> 
		| <a href="delete_cat.php?subid=<?php echo $row2['cat2_id'];?>">Delete</a></td>
		
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
