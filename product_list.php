﻿<?php error_reporting(E_ERROR);	session_start(); 
include('admin/lib/connect.php');	
ob_start();
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Product List | Genius Technology Ltd.</title>
	<?php include('somelinks.php'); ?>	
	<style>
#page_links{font-family: arial, verdana; font-size: 12px; border:1px #000000 solid; padding: 6px; margin: 3px; background-color: #cccccc; text-decoration: none;}
#page_a_link{font-family: arial, verdana; font-size: 12px; border:1px #000000 solid; color: #ff0000; background-color: #cccccc;
padding: 6px; margin: 3px; text-decoration: none;}
</style>
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<?php include('slider.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>



<div id="rightcontent2">

<div class="leftcat1list1">Featured Products
</div>	
	
<?php
		$perpage = 8;
		 
		if(isset($_GET["page"])){
		$page = intval($_GET["page"]);
		}
		else {
		$page = 1;
		}
		$calc = $perpage * $page;
		$start = $calc - $perpage;

$SqlProductDetails = mysql_query("SELECT product.product_name, product.id, product.price, product.product_details, product.status, product.feature, picture.location 
FROM product
LEFT JOIN picture ON product.unique_id = picture.unique_id  
WHERE product.status=1 GROUP BY picture.unique_id ORDER BY product.id DESC
LIMIT $start, $perpage");

$rows = mysql_num_rows($SqlProductDetails);

if($rows){
$i = 0;$j=1;
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
}
?>



<!--
"SELECT 
FROM product
LEFT JOIN picture ON product.unique_id = picture.unique_id  
WHERE product.status=1 GROUP BY picture.unique_id 
-->

<table width="400" cellspacing="2" cellpadding="2" align="center">
<tbody>
<tr>
<td align="center">
 
<?php
 
if(isset($page)){											
$result = mysql_query("SELECT COUNT(*) AS Total FROM product WHERE product.status=1"); 
$rows = mysql_num_rows($result);
if($rows){ 
	$rs = mysql_fetch_assoc($result); 
	$total = $rs["Total"]; 
}
 
$totalPages = ceil($total / $perpage);
 
if($page <=1){
	echo "<span id='page_links' style='font-weight: bold;'>Prev</span>";
}
else{
	$j = $page - 1; 
	echo "<span><a id='page_a_link' href='product_list.php?page=$j'>< Prev</a></span>"; 
}
 
for($i=1; $i <= $totalPages; $i++){ 
	if($i<>$page){ 
		echo "<span><a id='page_a_link' href='product_list.php?page=$i'>$i</a></span>"; 
	} 
	else{
		echo "<span id='page_links' style='font-weight: bold;'>$i</span>"; 
	} 
}
 
if($page == $totalPages){ 
	echo "<span id='page_links' style='font-weight: bold;'>Next ></span>"; 
} 
else{ 
	$j = $page + 1; 
	echo "<span><a id='page_a_link' href='product_list.php?page=$j'>Next</a></span>"; 
}
}
?></td>
<td></td>
</tr>
</tbody>
</table>


</div><!-- rightcontent2 end -->
     
</div><!-- maincontent end -->  
	
<?php include('footer.php'); ?>

</div><!-- whole end -->
	
</body>
</html>