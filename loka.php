<?php error_reporting(E_ERROR);	session_start(); include('admin/lib/connect.php');
    if(!isset($_SESSION['username'])){
		
    }
	else $lu=$_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Order Details | User </title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<style>
.tuki{}
.tuki th{text-align:left;}
.tuki td{padding:5px; border-right:1px solid #ddd; border-bottom:1px solid #ddd}

.btn_print{}
.btn_print onclick{color:red}
</style>

<script>
$("#btn_print").click(function(){
     $(this).css("color","white");
})
</script>

</head>

<body>

<style type="text/css">
@media print {
    #printbtn {
        display :  none;
    }
}
</style>




<input id ="printbtn" type="button" value="Print this page" onclick="window.print();" style="float:left"/>




<div id="content2" style="float:left; margin:50px 0 0 0; width:990px;">




<table class="tuki" id="" style="width:1000px; border:1px solid #ddd">
<thead>
	<tr>		
		<td><b>Product Name</b></td>
		<td><b>Price</b></td>
		<td><b>Quantity</b></td>
		<td><b>Total Price</b></td>
	</tr>
</thead>
<tbody>

<?php
$lu=$_SESSION['username'];	
$xyz = mysql_query("SELECT * FROM order_list ORDER BY order_list.ord_id DESC LIMIT 1");
while($row5=mysql_fetch_array($xyz)){	
	echo "Username: " . $lu;	// echo $row5['ord_id'];	echo "<br/><br/><br/>";	// $tuma='73';
	echo "<br/><br/>";	
	$suma = $row5['ord_id'];	
}

// echo $lu=$_SESSION['username'];
$sql2 = mysql_query("SELECT order_details.ord_details_id, order_list.ord_id, order_details.price, order_details.product_name, order_details.quantity, order_list.ord_time, order_list.username
FROM order_details
LEFT JOIN order_list ON order_details.ord_id = order_list.ord_id
WHERE order_details.ord_id = '$suma' AND order_list.username='$lu'
ORDER BY order_list.ord_id DESC"); 

/*
SELECT order_details.ord_details_id, order_details.price, order_details.product_name, order_details.quantity, order_list.ord_time, order_list.username
FROM order_details 
LEFT JOIN order_list ON order_details.ord_id = order_list.ord_id
WHERE order_details.ord_id = order_list.ord_id  
GROUP BY order_list.username
ORDER BY order_details.ord_id DESC"); // order_list.total_price, order_list.final_bill AND order_details.product_name
*/
while($row2 = mysql_fetch_array($sql2))
{
?>                             
	<tr class="">		
		<td><?php echo $row2['product_name']; ?></td>
		<td><?php echo $row2['price']; ?></td>
		<td><?php echo $row2['quantity']; ?></td>
		<td><?php echo $row2['quantity'] * $row2['price']; ?></td>		
	</tr>
<?php
}
?>
</tbody>
</table>

</div>
</body>
</html>