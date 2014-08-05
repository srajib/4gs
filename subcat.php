<?php error_reporting(E_ERROR);	session_start(); 
	include('admin/lib/connect.php');	
	$id=$_GET['subcatid']; 
	ob_start();
	if(!isset($_SESSION['username'])){
    } 
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Categry -> SubCategry | Genius</title>
	<?php include('somelinks.php'); ?>	
	
<style>
.tuti a{text-decoration:none; color:#555;}
.tuti a:hover{text-decoration:underline; color:#222;}
</style>

</head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<?php include('slider.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>

<div id="rightcontent2">

<div class="leftcat1list1">Category >> SubCategory
</div>


<div id="productsarea" style="float:left; width:auto; height:auto; padding:15px 0; border-bottom:1px solid #DDD">



<div class="tuti" style="float:left; margin:20px 10px">
<?php $y = mysql_query("SELECT cat2.cat2_id, cat2.cat2_name, product.id, picture.location
FROM cat2 
LEFT JOIN product ON cat2.cat2_id = product.cat2_id
LEFT JOIN picture ON product.unique_id = picture.unique_id 
WHERE cat2.cat1_id='$id' group by cat2.cat2_name");

while($row = mysql_fetch_array($y))	{
?>			
<div class="" style="float:left; margin:10px">	
		<img src="admin/<?php echo $row['location']; ?>" style="width:110px; height:110px; padding:10px 10px 10px 0"/>
		<br><a href="subcategory.php?subcatid=<?php echo $row['cat2_id']; ?>"><?php echo $row['cat2_name']; ?></a>
</div>	
<?php
}
?>
</div>



 
</div>
</div><!-- rightcontent2 end -->    
</div><!-- maincontent end -->  	
</div>	
</body>
</html>