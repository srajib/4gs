<?php error_reporting(E_ERROR);	session_start(); 
	include('admin/lib/connect.php');
    if(!isset($_SESSION['Username'])){
    } 
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Search | Genius Technology Ltd.</title>
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

<div class="leftcat1list1">Searched Products
</div>	
	
<?php
	$perpage = 16;	 
	if(isset($_GET["page"])){
		$page = intval($_GET["page"]);
	}
	else {
		$page = 1;
	}
	$calc = $perpage * $page;
	$start = $calc - $perpage;
	
	 if($_POST){$searchterm=$_POST['searchterm'];
$SqlProductDetails = mysql_query("SELECT * FROM product LEFT JOIN picture ON product.unique_id = picture.unique_id 
WHERE product.product_name LIKE '%".$searchterm."%' LIMIT $start, $perpage");

$rows = mysql_num_rows($SqlProductDetails);

if($rows){
	$i = 0; 
	$j=1;
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
}
	 elseif($_GET['searchterm']){ 
	 $searchterm=$_GET['searchterm'];
$SqlProductDetails = mysql_query("SELECT * FROM product LEFT JOIN picture ON product.unique_id = picture.unique_id 
WHERE product.product_name LIKE '%".$searchterm."%' LIMIT $start, $perpage");

$rows = mysql_num_rows($SqlProductDetails);

if($rows){
	$i = 0; 
	$j=1;
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
}	
	 else{
	 echo "No result found!";
	 }
?>









<table width="630" cellspacing="2" cellpadding="2" align="center">
<tbody>
<tr>
<td align="center">
 
<?php
 
if(isset($page)){											
$result = mysql_query("SELECT COUNT(*) AS Total FROM product 
WHERE product.status=1 AND (product.product_name LIKE '%".$searchterm."%' OR product.product_details LIKE '%".$searchterm."%')");
$rows = mysql_num_rows($result);
if($rows){ 
	$rs = mysql_fetch_assoc($result); 
	$total = $rs["Total"]; 
}
 
$totalPages = ceil($total / $perpage);
 
if($page <=1 ){
 
echo "<span id='page_links' style='font-weight: bold;'>Prev</span>";
 
}
 
else
 
{
 
$j = $page - 1;
 
echo "<span><a id='page_a_link' href='search.php?page=$j&&searchterm=$searchterm'>< Prev</a></span>";
 
}
 
for($i=1; $i <= $totalPages; $i++)
 
{
 
if($i<>$page)
 
{
 
echo "<span><a id='page_a_link' href='search.php?page=$i&&searchterm=$searchterm'>$i</a></span>";
 
}
 
else
 
{
 
echo "<span id='page_links' style='font-weight: bold;'>$i</span>";
 
}
 
}
 
if($page == $totalPages )
 
{
 
echo "<span id='page_links' style='font-weight: bold;'>Next ></span>";
 
}
 
else
 
{
 
$j = $page + 1;
 
echo "<span><a id='page_a_link' href='search.php?page=$j&&searchterm=$searchterm'>Next</a></span>";
 
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