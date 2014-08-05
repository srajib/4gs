<?php include('lib/connect.php');

if(isset($_POST['update'])){	
	$id = $_POST['id'];
	$product_name = $_POST['product_name'];			
	$product_details = $_POST['product_details'];	
	if(empty($product_name) || empty($product_details))
	{
		if(empty($product_name)){echo "<font color='red'>Product Name field is empty!</font><br/>";}
		if(empty($product_details)){echo "<font color='red'>Product Details field is empty!</font><br/>";}
	}	
	else{	
		$result=mysql_query("UPDATE product	SET product_name='$product_name', product_details='$product_details' WHERE id=$id");				
		header("Location: product_list.php");
	}
}
$id = $_GET['id'];
$result2=mysql_query("select * from product where id=$id");	// picture.locaton LEFT JOIN product.unique_id=picture.unique_id // what about 4 picture? Cat & subCat both editable
while($res=mysql_fetch_array($result2))
{
	$product_name=$res['product_name'];
	$product_details=$res['product_details'];
}
?>

<!DOCTYPE html><html lang="en"><head><title>Edit Product | Leather Bags</title></head><body>

<div style="width:600px; margin:100 auto">  	
<form name="form1" method="post" action="edit_product.php">
<!-- <table><tr><td></td></tr> -->
<!--	<img src="<?php echo $location;?>" style="width:100px; height:100px" /> -->
	<br><br>Product Name: <input type="text" name="product_name" value="<?php echo $product_name;?>">
	<br><br>Description: <input type="text" name="product_details" value="<?php echo $product_details;?>">
	<br><br>Category: 
	<select>
		<option>Category</option><option>Category-1</option><option>Category-2</option>
	</select>
	
	<br><br>SubCategory: <select><option>SubCategory</option><option>SubCategory-1</option><option>SubCategory-2</option></select>
	<br><br><input type="radio" name="status">Publish<input type="radio" name="status">Unpublish
	<br><br><input type="radio" name="featured">Featured<input type="radio" name="featured">Non-Featured
<!--		<br><br>Status: <input type="text" name="product_details" value="<?php echo $product_details;?>">
	<br><br>Featured: <input type="text" name="product_details" value="<?php echo $product_details;?>">-->	
	<br><br><input type="file" name="pic[]" id="my_id" multiple="true">

	<br><input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
	<br><input type="submit" name="update" value="Update">	
<!-- <table><tr><td></td></tr> -->
</form>
</div>
</body>
</html>