<?php error_reporting(E_ERROR);	session_start(); include('admin/lib/connect.php');
    if(!isset($_SESSION['username'])){
    } 		//	echo "<pre>"; // print_r($_POST);	 	// else {	header("Location:main_login.php");	}
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Order Saved | Genius Technology Ltd</title>
	<?php include('somelinks.php'); ?>	
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<div id="maincontent"><!-- maincontent start -->   
<?php include('leftlist.php'); ?>
<div id="rightcontent2">
<div class="leftcat1list1">Order List &nbsp; &nbsp; <a href="loka.php">Print Order Details</a>
</div>

<center>


<?php echo "<br><font color='red'>All of your order has been added!</font><br/>"; 
?>

<?php if(isset($_POST['Submit']))
{	
	$total_price=$_POST['total_price'];
	$final_bill = $_POST['final_bill'];
	$postage_price = $_POST['postage_price'];
	$x = $_SESSION['username'];
	$pmethod = $_POST['payment_method'];
	
	if($pmethod==1)
	{
		$pmethod='bKash';
	}
	else if($pmethod==2)
	{
		$pmethod='PayPal';
	}
	else if($pmethod==3)
	{
		$pmethod='Card';
	}
	else
	{
		$pmethod='Other';
	}
	//echo $item_name=$_POST['item_name_'.$i];
	
	// print_r($_POST);	
	
	// checking empty fields
	if(empty($total_price)) 
	{
		if(empty($total_price))
		{
			// echo "<font color='red'>Total Price field is empty!</font><br/>"; 
			echo "";
		}		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	}
	else // if all the fields are filled (not empty)	// $_POST['username']
	{	
		$result=mysql_query("INSERT INTO order_list(total_price, final_bill, postage_price, username, payment_method) VALUES('$total_price', '$final_bill', '$postage_price', '$x', '$pmethod')");
		
    $j=0;
	$total_price_verify=0;
	$ship_cost=0;	
	
	$y = mysql_query("SELECT ord_id FROM order_list ORDER BY ord_id DESC LIMIT 1");	
	$z = mysql_fetch_assoc($y);	// $z = mysql_fetch_array($y);
	$k = $z['ord_id'];
	$m = $k; // no need to add 1
		
	for($i=0;$i<=end($_SESSION["cartindex"]);$i++) 
		{
			if(isset($_SESSION["cart"][$i]))
			{
		    $j++;
    		$item_price=0;
			$item_price=$_SESSION["price"][$i]*$_SESSION["count"][$i];	
		    $item_name.$j = $_SESSION["product_name"][$i];
			$item_name2 = $item_name.$j;
			$price.$j = $_SESSION["price"][$i];
			$price_prod =$price.$j;
			$quantity.$j = $_SESSION["count"][$i];		
			$quantity_prod=$quantity.$j;
		
		$result=mysql_query("INSERT INTO order_details(ord_id, product_name, price, quantity) VALUES('$m','$item_name2','$price_prod', '$quantity_prod')");		
		echo "";
		// echo "<br><font color='chocolate'></center> Thank you! Total Price has been added! :)</center></font>";
	}
	}
	
/*	
	$query2 = "INSERT INTO order_list (ord_id) VALUES ('$ord_id')";
	mysql_query( $query2 );
	echo 'LAST_INSERT_ID: ', mysql_query( "SELECT LAST_INSERT_ID()" ),'<br>mysql_insert_id: ',
	mysql_insert_id();
*/	
	
}
}
?>
</center>
<!-- dynamism will be here -->
</div><!-- rightcontent2 end -->      
</div><!-- maincontent end -->  	
</div>


<?php


$sql9 = mysql_query("SELECT * FROM order_list LEFT JOIN members ON members.username = order_list.username WHERE ord_id='$k' LIMIT 1");
while($row9 = mysql_fetch_array($sql9))
{
	$lum = $row9['fname'];
	$tum = $row9['lname'];
	$xum = $row9['email'];
}

$to = $xum;		// $to = 'mdmkrahman@gmail.com';
$subject = "Order Details";

$message = "Dear " . $lum . " " . $tum;
$message .= ","; 
$message .= "<br/><br/>";
$message .= "Your order details is given below:";
$message .= "<br/><br/>";

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

// $result=mysql_query("INSERT INTO order_details(ord_id, product_name, price, quantity) VALUES('$m','$item_name2','$price_prod', '$quantity_prod')");		
$sql6 = mysql_query("SELECT * FROM order_details WHERE ord_id='$k'");
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

$sql7 = mysql_query("SELECT * FROM order_list LEFT JOIN members ON members.username = order_list.username WHERE ord_id='$k' LIMIT 1");
while($row7 = mysql_fetch_array($sql7))
{
$message .= "<tr><td colspan='3'>";
$message .= "<span style='text-align:right'>Total Bill</span>";
$message .= "</td><td>";
$message .= $row7['final_bill'];
$message .= " BDT </td></tr>";
}	
$message .="</table>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$headers .= 'From: Order Confirmation<order@4gshopping.com>' . "\r\n";
$headers .= 'Cc: mdmkrahman@gmail.com' . "\r\n";

mail($to,$subject,$message,$headers);

?>
</body>
</html>