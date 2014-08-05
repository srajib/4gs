<?php error_reporting(E_ERROR);	session_start(); include('admin/lib/connect.php');
	$id=$_GET['subcatid']; 
	ob_start();    
    if(!isset($_SESSION['Username'])){
    } 
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>SubCategory -> Product List | Genius Technology Ltd.</title>
	<?php include('somelinks.php'); ?>	
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<?php include('slider.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>




<div id="rightcontent2">

<div class="leftcat1list1">SubCategry -> Products
</div>	
	
<?php if (!isset($_GET['startrow']) or !is_numeric($_GET['startrow'])) {
  //we give the value of the starting row to 0 because nothing was found in URL
  $startrow = 0;
//otherwise we take the value from the URL
} else {
  $startrow = (int)$_GET['startrow'];
  }
  $limit=8;
$SqlProductDetails = mysql_query("SELECT product.product_name, product.id, product.price, product.product_details, product.status, product.feature, picture.location 
FROM product
LEFT JOIN picture ON  product.unique_id = picture.unique_id  
WHERE product.status=1 AND product.cat2_id='$id'
GROUP BY product.id 
ORDER BY product.id DESC LIMIT $startrow,".$limit);

$return_rows=mysql_num_rows($SqlProductDetails);

while($rowProd = mysql_fetch_assoc($SqlProductDetails)){
?>



<div id="prodlistbox">

<form action="cart.php" method="POST">

<div class="prodthumb"><a href="product.php?id=<?php echo $rowProd['id'];?>"><img src="admin/<?php echo $rowProd['location']; ?>"/></a></div>
<div class="prodnamearea"><a href="product.php?id=<?php echo $rowProd['id'];?>"><?php echo $rowProd['product_name']; ?></a></div>
<div class="proddescriptarea"><?php echo substr($rowProd['product_details'],0, 50); ?></div>
<div class="price">BDT ৳<?php echo $rowProd['price']; ?></div>		
<div class="price">Quantity: <input type="text" style="width:45px" value="1" name="qty"></div>		
<div>
<input type="hidden" name="id" value="<?php echo $rowProd['id'];?>">
<input type="hidden" name="price" value="<?php echo $rowProd['price'];?>">
<input type="hidden" name="postage_cost" value="<?php echo $rowProd['postage_cost'];?>">
<input type="hidden" name="product_name" value="<?php echo $rowProd['product_name'];?>">
<input type="hidden" name="ava_quantity" value="<?php echo $rowProd['quantity'];?>">
<input type="hidden" name="picture" value="<?php echo $rowProd['location']; ?>">
</div>



<div class="addtocartbutton"><center><input type="submit" value="Add to Cart" class="addtocartsubmitbutton"/></center></div>	




</form>

</div>







<?php
}
?>


<?php include("paginationSubCat.php"); ?> 

</div><!-- rightcontent2 end -->




     
</div><!-- maincontent end -->  
	
	
</div>

	
</body>
</html>