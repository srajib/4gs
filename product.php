<?php include('top_session.php'); ?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Individual Product | Genius Technology</title>
	<?php include('somelinks.php'); ?>	
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<?php include('slider.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>

<div id="rightcontent2">

<div class="leftcat1list1">Individual Product
</div>

<div id="productsarea" style="float:left; width:auto; height:auto;">
<div id="productphotos" style="float:left; width:400px; height:auto; background-color:#F7F7F7; border:1px solid #EEE">
<div class="imageRow" style="margin-top:0px; width:400px">

<div class="set">

<!-- get picture -->

<?php $sqlPic = mysql_query("SELECT picture.location FROM product
INNER JOIN picture ON product.id=".$id." AND product.unique_id=picture.unique_id LIMIT 4");
// ,cat1.cat1_id, cat1.cat1_name LEFT JOIN cat1 ON product.cat1_id=cat1.cat1_id
$first_time=0;
$count_pic=1;
while($rowPic=mysql_fetch_array($sqlPic)) 
{ 
	if($first_time==0)
	{
		$main_picture=$rowPic['location'];
	   $first_time=1;
	} 
?>		
<div class="single">
	<a href="admin/<?php echo $rowPic['location']; ?>" rel="lightbox[plants]" title="Click">
		<img src="admin/<?php echo $rowPic['location']; ?>" alt="image <?php echo $count_pic; ?> 0f 4 thumb" />
	</a>	
</div>

<?php 
$count_pic++;
} 
?>	
            
</div>
</div>	
</div>

<div id="productdescription">
<table width="100%" class="itemdetails">
<form action="cart.php" method="POST">
<?php $sql_product = mysql_query("SELECT product.id, product.product_name, product.product_details, product.model, product.supported_printer, product.status_avail, product.quantity,product.price,product.postage_cost, product.weight, product.size, product.warranty, product.status, product.feature, product.unique_id, cat1.cat1_id, cat1.cat1_name  
FROM product LEFT JOIN cat1 ON product.cat1_id=cat1.cat1_id WHERE product.id=$id");

while($desc=mysql_fetch_array($sql_product))
{ 
?>
<tr><td colspan="3"><div style="margin-top:-5px; margin-bottom:5px; color:#C26D11; font-size:18px;"><?php echo $desc['product_name']; ?><br></div></td></tr>
<tr><td>ID</td><td> : </td><td><?php echo $desc['unique_id']; ?></td></tr>
<tr><td>Price</td><td> : </td><td>BDT ৳ <?php echo $desc['price']; ?> </td></tr>
<tr><td>Model</td><td> : </td><td><?php echo $desc['model']; ?></td></tr>
<tr><td>Supported Printer</td><td> : </td><td><?php echo $desc['supported_printer']; ?></td></tr>
<tr><td>Status Available</td><td> : </td><td><?php echo $desc['status_avail']; ?></td></tr>
<tr><td>Quantity</td><td> : </td><td><input type="text" style="width:45px" value="1" name="qty"></td></tr>
<tr><td>
<input type="hidden" name="id" value="<?php echo $id;?>">
<input type="hidden" name="price" value="<?php echo $desc['price'];?>">
<input type="hidden" name="postage_cost" value="<?php echo $desc['postage_cost'];?>">
<input type="hidden" name="product_name" value="<?php echo $desc['product_name'];?>">
<input type="hidden" name="ava_quantity" value="<?php echo $desc['quantity'];?>">
<input type="hidden" name="picture" value="<?php echo $main_picture;?>">
</td><td></td><td></td></tr>
<tr><td colspan="3"><?php echo $desc['product_details']; ?></td></tr>
<tr><td>Weight</td><td> : </td><td><?php echo $desc['weight']; ?></td></tr>
<tr><td>Size</td><td> : </td><td><?php echo $desc['size']; ?></td></tr>
<tr><td>Warranty</td><td> : </td><td><?php echo $desc['warranty']; ?></td></tr>
<tr rowspan=3><td colspan=3>
<h3>Product Details</h3>
<?php echo $desc['product_details']; ?></td></tr>

<input type="submit" width="auto" value="Add to Cart">

<?php 
} 
?></form>
</table>		

</div>
</div>






</div><!-- rightcontent2 end --> 


     
</div><!-- maincontent end -->  
	
	
</div>


<?php // include('prodimgscript.php'); ?>
	
</body>
</html>