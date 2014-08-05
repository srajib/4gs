<?php session_start(); 
if(!isset($_SESSION['admin_id']))
{
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    exit();
}
if($_SESSION['authority']<2)
	{
	echo "<meta http-equiv='refresh' content='0; url=dashboard.php'>";
 
	}

include('lib/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Product List | Leather Bags</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="./css/bootstrap.css" rel="stylesheet">
<link href="./css/bootstrap-responsive.css" rel="stylesheet">
<link href="./css/bootstrap-overrides.css" rel="stylesheet">
<link href="./css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">
<link href="./css/slate.css" rel="stylesheet">
<link href="./css/slate-responsive.css" rel="stylesheet">
<script type="text/javascript">
$('input#my_id').change(function(){
    var files = $(this)[0].files;
    if(files.length > 2){
        alert("you can select max 2 files.");
    }else{
        alert("correct, you have selected less than 2 files");
    }
});
</script>

<script>
function showcat(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("catdiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","catajax.php?q="+str,true);
xmlhttp.send();
}
</script>

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
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<?php
// Make sure you are using a correct path here.
//include_once 'ckeditor/ckeditor.php';
//$ckeditor = new CKEditor();
$ckeditor->basePath = '/ckeditor/';
$ckeditor->config['filebrowserBrowseUrl'] = '/ckfinder/ckfinder.html';
$ckeditor->config['filebrowserImageBrowseUrl'] = '/ckfinder/ckfinder.html?type=Images';
$ckeditor->config['filebrowserFlashBrowseUrl'] = '/ckfinder/ckfinder.html?type=Flash';
$ckeditor->config['filebrowserUploadUrl'] = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
$ckeditor->config['filebrowserImageUploadUrl'] = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
$ckeditor->config['filebrowserFlashUploadUrl'] = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
//$ckeditor->editor('CKEditor1');
?>

</head>
<body>
  	
<?php include('header.php'); ?>
<?php include('menu.php'); ?>

<div id="content">		
	<div class="container">		
		<div id="page-title" class="clearfix">			
			<ul class="breadcrumb">
			  <li>
			    <a href="./">Home</a> <span class="divider">/</span>
			  </li>
			  <li class="active"><a href=add_address_form.php>Add New Address</a></li>
			</ul>			
		</div> <!-- /.page-title -->
		
<?php extract($_POST);
$uid = time();
$var="";
if(isset($_POST['submit']))
{
		$clause="";
		$clause2="";
		if(!empty($_POST['epaypal']))
		{
		$clause=" pemail='".$_POST['epaypal']."'";
		
		}
        
        if(!empty($_POST['eaccount']))
		{
		$clause2=" uemail='".$_POST['eaccount']."'";
		
		}
		if($clause!="" or $clause2!="")
		{
		
			if($clause!="" && $clause2!="") 
			{
			$var= " WHERE".$clause." AND".$clause2;
			}
			elseif($clause!="") 
			{
			$var= " WHERE".$clause;
			}
			elseif($clause2!="")
            {
			$var= " WHERE".$clause2;
			
			}  			
		
		}


		}

?> 			

<div class="row">			
			
          	<div class="span8">
	      		
	      		<div id="horizontal" class="widget widget-form">
	      			
	      			<div class="widget-header">	      				
	      				<h3>
	      					<i class="icon-pencil"></i>
	      					SEARCH
	      					
      					</h3>	
      				</div> <!-- /widget-header -->
					
					<div class="widget-content">
				
						<form class="form-horizontal" action="address_list.php" method="post">
					        <fieldset>
					          <div class="control-group">
					            <label class="control-label" for="input01">paypal email</label>
					            <div class="controls">
					              <input type="text" class="input-large" name="epaypal" id="input01">
					              <!--<p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>-->
					            </div>
					          </div>
                              
                              <div class="control-group">
					            <label class="control-label" for="input01">account email</label>
					            <div class="controls">
					              <input type="text" class="input-large" name="eaccount" id="input01">
					              <!--<p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>-->
					            </div>
					          </div>
                              
					          
					          <div class="form-actions">
					            <button type="submit" name="submit" class="btn btn-primary btn-large">Search</button>
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
							Address List : By payment email							
						</h3>
					</div> <!-- /widget-header -->					
					
<div class="widget-content">						

<table class="table table-striped table-bordered table-highlight" id="example">
<thead>
	<tr>
	<?php
if(!isset($_POST['submit']))
	{
	?>
	<th>ID</th>
		<th>User Email</th>
		<th>Payment Email</th>
		<th>User Address</th>
		<th>Billing Address</th>
		<th>Shipment Address</th>
	<th>Phone</th>	
	<th>Entry Time</th>
		<th>Action</th>
<?php
	}
	else
	{
	?>
	
		<th>User Email</th>
		<th>Payment Email</th>
		<th>User Address</th>
		<th>Billing Address</th>
		<th>Shipment Address</th>
	
	<?php
	}
	?>
	</tr>
</thead>
<tbody>
<?php
if (!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])) {
  //we give the value of the starting row to 0 because nothing was found in URL
  $startrow = 0;
//otherwise we take the value from the URL
} else {
  $startrow = (int)$_GET['startrow'];
  }
  $limit=2;
$queryAdd="SELECT * FROM address".$var.
					 " ORDER BY 
					 pemail ASC,
					 address_id DESC
					 LIMIT $startrow,".$limit;
$sqlAdd = mysql_query($queryAdd);
					 
$return_rows=mysql_num_rows($sqlAdd);
$u_add="";
$b_add="";
$d_add="";

if(!isset($_POST['submit']))
{
while($rowAdd = mysql_fetch_array($sqlAdd))
{
?>                             
<tr class="odd gradeX">

<td><?php echo $rowAdd['address_id']; ?></td>




<td><?php echo $rowAdd['uemail']; ?></td>
<td><?php echo $rowAdd['pemail']; ?></td>
<?php

$add="";


$u_add="";
$b_add="";
$d_add="";


$add=$rowAdd['name']."<br>".$rowAdd['address1']." ".$rowAdd['address2']."<br>".$rowAdd['city'].", ".$rowAdd['state']." <br>".$rowAdd['zip'].", ".$rowAdd['country'];

if($rowAdd['user_add']==1 && $u_add=="") // u get an address and user address not set
{
$u_add=$add;

}
if($rowAdd['billing_add']==1 && $b_add=="")
{
$b_add= $add;
}

if($rowAdd['delivery_add']==1 && $d_add=="")
{
$d_add= $add;
}


?>
<td style="width:250px"><?php 
echo $u_add;

 ?></td>

 <td style="width:250px"><?php 

echo $b_add;
 ?></td>

 
 <td style="width:250px"><?php 

echo $d_add;


 ?></td>
<td><?php echo $rowAdd['phone']; ?></td>
<td><?php echo $rowAdd['entry_time']; ?></td>
<td>	
	<?php	
   if($_SESSION['authority']>=3)
	{
	?>

	<a href="address_edit.php?address_id=<?php echo $rowAdd['address_id'];?>">Edit </a> |
	<?php 
	}			 
	if($_SESSION['authority']>=4)
	{
	?>
	<a href="address_delete.php?address_id=<?php echo $rowAdd['address_id'];?>">Delete</a>
	<?php
	 }
	 ?>
	</td>
	

<div class="modal fade hide" id="myModal">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<h3>Modal header</h3>
</div>
<div class="modal-body">
                                        
</div>
<div class="modal-footer">
<a href="#" class="btn" data-dismiss="modal">Close</a>
<a href="#" class="btn btn-primary">Save changes</a>
</div>
</div>
<!-- </td> -->

</tr>
<?php
 }//while end 
}//not set
else // for search
{

$tb="";
$tbend="";
$u_add="";
$b_add="";
$d_add="";

while($rowAdd = mysql_fetch_array($sqlAdd))
{
 if($tb=="")                            
{
 $tb='<tr class="odd gradeX">

<td>'.$rowAdd["uemail"].'</td>
<td>'.$rowAdd['pemail'].'</td>';
}

$add="";

$add=$rowAdd['name']."<br>".$rowAdd['address1']." ".$rowAdd['address2']."<br>".$rowAdd['city'].", ".$rowAdd['state']." <br>".$rowAdd['zip'].", ".$rowAdd['country']."<BR> Phone ".$rowAdd['phone']."<br>";
if($_SESSION['authority']>=3)
$add .="<a href=address_edit.php?address_id=".$rowAdd['address_id'].">Edit </a>|";
if($_SESSION['authority']>=4)	
$add .="<a href=address_delete.php?address_id=".$rowAdd['address_id'].">Delete</a><br>";
$add .=	$rowAdd['entry_time'];

if($rowAdd['user_add']==1 && $u_add=="") // u get an address and user address not set
{
$u_add=$add;

}
if($rowAdd['billing_add']==1 && $b_add=="")
{
$b_add= $add;
}

if($rowAdd['delivery_add']==1 && $d_add=="")
{
$d_add= $add;
}


?>


 <?php
 if($tbend="")
 $tbend="

<div class='modal fade hide' id='myModal'>
<div class='modal-header'>
<button type='button' class='close' data-dismiss='modal'>&times;</button>
<h3>Modal header</h3>
</div>
<div class='modal-body'>
 </div>
<div class='modal-footer'>
<a href='#' class='btn' data-dismiss='modal'>Close</a>
<a href='#' class='btn btn-primary'>Save changes</a>
</div>
</div>
</tr>";
 }//while end
echo $tb;
?>
<td style='width:250px'><?php 
echo $u_add;

 ?></td>

 <td style='width:250px'><?php 

echo $b_add;
 ?></td>

 
 <td style='width:250px'><?php 

echo $d_add;


 ?></td>
<?php
echo $tbend;
}//else end


?>

</tbody>
</table>

</div> <!-- /widget-content -->


</div> <!-- /widget table-->	
</div> <!-- /span12 -->

</div> <!-- /row -->
<?php
include("../pagination.php");
?>

</div> <!-- /.container -->
</div> <!-- /#content -->

<?php include('footer.php'); ?>

</body>
</html>