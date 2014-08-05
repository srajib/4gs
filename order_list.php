<?php error_reporting(E_ERROR);	session_start(); include('admin/lib/connect.php');
    if(!isset($_SESSION['username'])){
    }
	// else {	header("Location:main_login.php");	}
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Checkout | Genius</title>
	<?php include('somelinks.php'); ?>	
	<?php include('checkout_validate.php'); ?>	
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>

<div id="rightcontent2">

<div class="leftcat1list1">Checkout
</div>

<div id="p" style="float:left;font-size:12px;">


<input type="hidden" name="product_name" value="session"/>

<form action=saved_order_list.php method=post name=frm_valid onsubmit="return validateForm()"> <!-- checkout_payment.php -->


<?php if(!isset($_SESSION["cart"]))
{
	exit();
}

	$total_item= count($_SESSION["cart"]);

	$total_price=$_POST['total_price'];

	$postage_price=$_POST['postage_price'];

	$final_bill=$_POST['final_bill'];
	
	$un = $_SESSION['username'];
	$_o_i_d = $_POST['ord_id'];

	echo "<input type='hidden' name='payment_method' value='".$_POST['payment_method']."'>";
	
	// echo "<input type='hidden' name='pmethod' value='".$_POST['pmethod']."'>";

	$valid=0;

	if(isset($_POST['checkout_delivery']) && $total_item>0 && $final_bill>=0 )
	{
		include('calculate.php');
	}
	else
	{
		exit();
	}

?>


<?php	 //echo 'test-'.end($_SESSION["cartindex"]);	

    $j=0;
	$total_price_verify=0;
	$ship_cost=0;
        for($i=0;$i<=end($_SESSION["cartindex"]);$i++) 
		{
			if(isset($_SESSION["cart"][$i]))
			{
		    $j++;
    		$item_price=0;
			$item_price=$_SESSION["price"][$i]*$_SESSION["count"][$i];
			echo '<tr><td></td>
			<input type=hidden name=item_name_'.($j).' value="'.$_SESSION["product_name"][$i].'">
			<input type=hidden name=item_number_'.($j).' value='.$_SESSION["cart"][$i].'>
			<input type=hidden name=quantity_'.($j).' value='.$_SESSION["count"][$i].'>
			<input type=hidden name=amount_'.($j).' value='.$_SESSION["price"][$i].'>
			<input type=hidden name=image_'.($j).' value=http://localhost/4gs/admin/'.$_SESSION["picture"][$i].'>';
			
			if ($_POST["postage_price"]==0)
			echo '<input type=hidden name=shipping_'.($j).' value=0>';
			else
		    {
			$p_price=$_SESSION["count"][$i]*$_SESSION["postage_cost"][$i];
			echo '<input type=hidden name=shipping_'.($j).' value='.$p_price.'>';			
			$ship_cost = $ship_cost + $p_price;
			}			
			
			echo '<td></td><td></td></tr>';		
			
			$total_price_verify = $total_price_verify + $item_price;        		           
			
		    }				
		}        
		$final_bill_verify = $total_price_verify + $ship_cost;
?>


<table>

<tr>
	<td colspan=2></td>
</tr>

<tr rowspan=3><td colspan=2>
<br><br><b>Payment Method:</b>
<br><input type="radio" name="payment_method" value="1" checked>bKash
<input type="radio" name="payment_method" value="2">Paypal 
<input type="radio" name="payment_method" value="3"> Card
<input type="radio" name="payment_method" value="4"> Other
</td></tr>
<tr rowspan=5><td colspan=2>
<p>
Please ensure everything here is correct, after proceeding forward, your cart will be transferred to an order and no further items will be able to be placed on the order. To pay via direct deposit, please call 1300 113 680 or email info@leatherbag.com.au to place your order.
</p>
</td></tr>
<tr><td>


		<?php

		if($valid==9)
		{
		echo "<input type=hidden value=".$total_price." name=total_price>";	
		echo "<input type=hidden value=".$postage_price." name=postage_price>";				
		echo "<input type=hidden value=".$final_bill." name=final_bill>"; 			      
		echo "<input type=hidden value=".$payment_method." name=payment_method>"; 			      
		// echo "<input type=hidden value=".$_o_i_d." name=ord_id>";
		echo "<input type=Submit name=Submit value=Submit />"; // name=subBtn
		}
		else
		 {
		 echo "Calculated price seems inconsistent";
		 
		 } 					
		 ?>


</td><td></td></tr></table>

</form>
</div><!--p end-->

</div><!-- rightcontent2 end --> 
     
</div><!-- maincontent end -->  
	
<?php include('footer.php'); ?>

</div><!-- whole end -->
	
</body>
</html>