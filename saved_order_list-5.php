<?php error_reporting(E_ERROR);	session_start(); include('admin/lib/connect.php');
    if(!isset($_SESSION['username'])){
    } 		//	echo "<pre>"; // print_r($_POST);
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Data Saved | Genius Technology Ltd</title>
	<?php include('somelinks.php'); ?>	
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<div id="maincontent"><!-- maincontent start -->   
<?php include('leftlist.php'); ?>
<div id="rightcontent2">
<div class="leftcat1list1">Order List<a href=""></a>
</div>

<center>



<?php echo "<br><font color='red'>All of your order has been added!</font><br/>"; ?>




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
	// echo $m=$k+1;
		
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
			// echo $item_number.$j = $_SESSION["count"][$i];
		//	<input type=hidden name=item_number_'.($j).' value='.$_SESSION["cart"][$i].'>
		//	<input type=hidden name=quantity_'.($j).' value='.$_SESSION["count"][$i].'>
		//	<input type=hidden name=amount_'.($j).' value='.$_SESSION["price"][$i].'>
		
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
</body>
</html>