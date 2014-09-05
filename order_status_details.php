<?php error_reporting(E_ERROR);	session_start(); include('admin/lib/connect.php');

$oid=$_GET['ordid']; 

if(!isset($_SESSION['username']))
{
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    exit();
}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Order Status Details | 4GS </title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<style>
.tuki
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

<input id ="printbtn" type="button" value="Print this page" onclick="window.print();" >

<div style="width:1000px;  margin:0 auto">

<div id="h" style="float:left; width:1260px; margin-bottom:10px; padding-bottom:10px; border-bottom:1px solid #777">  	

<div id="h" style="float:left; width:200px;">  	
	<img src="../images/logo.png" style="width:125px; padding:15px 0">	
</div>

<div id="h" style="margin:0 auto; width:300px; font-size:25px">  	

<br><b>Order Details</b>

</div>

<div id="h" style="float:right; width:450px;">  	


<?php							
extract($_POST);
$sql3 = mysql_query("SELECT * FROM order_list LEFT JOIN members ON members.username = order_list.username WHERE ord_id='$oid' LIMIT 1");
while($row3 = mysql_fetch_array($sql3))
{
	echo "Order No. " . $row3['ord_id'].'       ';
	echo "<br>Customer Name : " . $row3['fname'].' '.$row3['lname'].'       ';
	echo "<br>Email : " . $row3['email'];
}	
?>	
</div>


</div>

<div id="content2" style="float:left; width:990px;">		

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

$sql2 = mysql_query("SELECT * FROM order_details WHERE ord_id='$oid'");

while($row2 = mysql_fetch_array($sql2))
{
?>                             
	<tr class="">		
		<td><?php echo $row2['product_name']; ?></td>
		<td><?php echo $row2['price']; ?></td>
		<td><?php echo $row2['quantity']; ?></td>
		<td><?php echo $row2['quantity'] * $row2['price']; ?></td>
		<!-- <td><?php echo $z; ?></td> -->
	</tr>
<?php
}
?>

</tbody>
</table>
						
<?php							
$sql4 = mysql_query("SELECT * FROM order_list LEFT JOIN members ON members.username = order_list.username WHERE ord_id='$oid' LIMIT 1");
while($row4 = mysql_fetch_array($sql4))
{
	echo "<br><b>Total Bill = " . $row4['final_bill'] . " BDT</b>";
}	

$to = $row3['email'];
$subject = "Order Details";

$fn=$row3['fname'];
$ln=$row3['lname'];

$message = "Dear " . $fn . " " . $ln;
$message .= " ,"; 
$message .= "\n";
$message .= "Your order details is given below";
$message .= "\n";

$message .= "
<table border='1'>
<thead>
	<tr>		
		<td><b>Product Name</b></td>
		<td><b>Price</b></td>
		<td><b>Quantity</b></td>
		<td><b>Total Price</b></td>
	</tr>		
</thead>
";

$sql6 = mysql_query("SELECT * FROM order_details WHERE ord_id='$oid'");
while($row6 = mysql_fetch_array($sql6))
{
$koka = $row6['quantity'] * $row6['price'];
$message .="<tr><td>";
$message .= $row6['product_name'];
$message .= "</td><td>";
$message .= $row6['price'];
$message .= "</td><td>";
$message .= $row6['quantity'];
$message .= "</td><td>";
$message .= $koka;
$message .= "</td></tr>";
}

$sql9 = mysql_query("SELECT * FROM order_list LEFT JOIN members ON members.username = order_list.username WHERE ord_id='$oid' LIMIT 1");
while($row9 = mysql_fetch_array($sql9))
{
$message .= "<tr><td></td><td></td><td><b>Total Bill </td><td>";
$message .= $row9['final_bill'];
$message .= " BDT</b></td></tr>";
}	

$message .="</table>";

$message .= "\n\n\n" . "_________________";
$message .= "\n" . "Signature";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Admin<info@4gshopping.com>' . "\r\n";
$headers .= 'Cc: rajib1111@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

?>

</div>
</body>
</html>