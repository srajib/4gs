<?php error_reporting(E_ERROR); session_start();
if(!isset($_SESSION['id']))
{
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
	exit();
}

include('lib/connect.php');
$searchterm="";
$search_str="";
$limit=5;
 
 
 if($_SESSION['authority']==6) //show user uploaded items
 {
 $search_str="WHERE product.uploader_id=". $_SESSION['id']." ";
 }
 
 if(isset($_POST['searchterm']))
  {
  $searchterm = $_POST['searchterm'];
  }
elseif(isset($_GET['searchterm']))
 {
 $searchterm = $_GET['searchterm'];
   
 }
if($searchterm!="")
{
 if($search_str!="")
   $search_str.="AND (product.product_name LIKE '%".$searchterm."%' OR product.product_details LIKE '%".$searchterm."%')"; 
  else
   $search_str="WHERE product.product_name LIKE '%".$searchterm."%' OR product.product_details LIKE '%".$searchterm."%' "; 
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Product List | Genius Technology</title>
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
			  <li class="active"><a href=add_product.php>Add New Product</a><span class="divider">/</span></li>
			  <li class="active"><a href=exel.php>Excel export</a></li>
			</ul>			
		</div> <!-- /.page-title -->
		
<?php extract($_POST);
$uid = time();
if(isset($_GET['pval']) && isset($_GET['id']))
{
		if ($_GET['pval']==0)
		{
		$result=mysql_query("UPDATE product	SET status=1 WHERE id=".$_GET['id']);
		}

		elseif ($_GET['pval']==1)
		{
		$result=mysql_query("UPDATE product	SET status=0 WHERE id=".$_GET['id']);
		}
}
?> 			

<div class="row">			
				
			<div class="span12">	      		
	      		<div class="widget widget-table">						
					<div class="widget-header">						
						<h3>
							<i class="icon-th-list"></i>
							Product List : Latest Products							
						</h3>
					</div> <!-- /widget-header -->					
					
<div class="widget-content">						

<table class="table table-striped table-bordered table-highlight" id="example">
<thead>
	<tr>
		<th>ID</th>
		<th>Category</th>
		<th>Sub-Category</th>
		<th>Title</th>        
		<th>Price</th>
		<th>Details</th>
		<th>Picture</th>
		<th>Post Date</th>
		<th>Action</th>
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


  
    $sqlProduct = mysql_query("SELECT 
                     product.*, picture.location, picture.unique_id 
                     FROM product 
					 LEFT JOIN picture ON product.unique_id=picture.unique_id "
					 .$search_str."GROUP BY id
					 ORDER BY id DESC
					 LIMIT $startrow,".$limit);
	 
$return_rows=mysql_num_rows($sqlProduct);
while($row2 = mysql_fetch_array($sqlProduct))
{
?>                             
<tr class="odd gradeX">

<td><?php echo $row2['id']; ?></td>
<td><?php 
$id2 = $row2['cat1_id']; 
$sql4 = mysql_query("SELECT * FROM cat1 WHERE cat1_id='$id2'");
$row4 = mysql_fetch_assoc($sql4);
echo $row4['cat1_name'];
?></td>

<td><?php 
$id3 = $row2['cat2_id']; 
$sql5 = mysql_query("SELECT * FROM cat2 WHERE cat2_id='$id3'");
$row5 = mysql_fetch_assoc($sql5);
echo $row5['cat2_name'];
?></td>

<td><?php echo $row2['product_name']; ?></td><td>$ <?php echo $row2['price']; ?></td>
<td style="width:250px"><?php echo substr($row2['product_details'],0,100)."..."; ?></td>
<td><div style="width:45px; height:45px;">
	   <img src="<?php echo $row2['location']; ?>" style="height:60px;" />
   
	</div>

	</td>
<td><?php echo substr($row2['date'],6,2)." - ".substr($row2['date'],4,2)." - ".substr($row2['date'],0,4); ?></td>

<td>	
		
<?php 
      if($_SESSION['authority']==6)
		{
	   if($row2['status']=='0')
		echo '<a href=product_list.php?id='.$row2['id'].'&pval=0><img src="img/red.jpg" style="width:16px; height:16px"/></a>';
	   else 
		echo '<a href=product_list.php?id='.$row2['id'].'&pval=1><img src="img/green.jpg" style="width:16px; height:16px"/></a>';
		}
		?>				
				
		<a href="product_edit.php?id=<?php echo $row2['id'];?>">Edit </a> 				
		|<a href="delete_product.php?id=<?php echo $row2['id'];?>&unique_id=<?php echo $row2['unique_id'];?>">Delete</a>
	            
	            
	</td>
	
<!-- <td> -->
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
}
?>

</tbody>
</table>

</div> <!-- /widget-content -->
</div> <!-- /widget table-->	
</div> <!-- /span12 -->
</div> <!-- /row -->

<?php include("pagination.php");?>

</div> <!-- /.container -->
</div> <!-- /#content -->

<?php include('footer.php'); ?>

</body>
</html>