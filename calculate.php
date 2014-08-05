<?php 
	echo "<table width=70%>";
	echo "<tr border=1><td colspan=2></td><td>Product Name</td><td>Price</td><td>Quantity</td><td>Item total</td><td></td></tr>";
	
	$j=0;
	 
	$total_price_verify=0;
	$postage_price_verify=0;
	$final_bill_verify=0;
	
    for($i=0; $i<=end($_SESSION["cartindex"]); $i++)		// earlier it was $i=0, so the omitted first value!
	{
			if(isset($_SESSION["cart"][$i]))
			{
			$j++;
			$item_price=0;
			$item_price=$_SESSION["price"][$i]*$_SESSION["count"][$i];
			
			if($_POST['pmethod']==1)
			{
				$item_postagecost=$_SESSION["postage_cost"][$i]*$_SESSION["count"][$i];
				$postage_price_verify=$postage_price_verify+$item_postagecost;   			
			}
			
			echo "<tr><td>".$j.".</td>
			<td><img style='width:50px;' src=admin/". $_SESSION['picture'][$i]."></td>
			<td><a href=product.php?id=".$_SESSION["cart"][$i].">".$_SESSION["product_name"][$i]."</a></td>
			<td> $".$_SESSION["price"][$i]."</td>
			<td>".$_SESSION["count"][$i]."</td><td>$"
			.$item_price."</td></tr>";
			$total_price_verify=$total_price_verify+$item_price;
		   }		
		}
		
        $final_bill_verify = $total_price_verify + $postage_price_verify;
        
		echo '<tr><td colspan=4></td><td colspan=3></td></tr>';
        	
		if(abs($postage_price-$postage_price_verify)< 0.00000001 && abs($final_bill_verify-$final_bill)<  0.00000001 && abs($total_price_verify - $total_price) <  0.00000001)
		{			
			$valid = 9;				
		}
		else
		{
			$valid = 8; // not valid transaction
		}
		
		if($valid == 9)
		{
			echo "<tr>
			<td colspan=2><strong>Sub Total(inc GST)</td>
			<td colspan=2></td>
			<td>".array_sum($_SESSION["count"])."</td><td> : BDT ৳".$total_price."</strong></td>
			<td></td>
			</tr>";
        
        echo "<tr><td colspan=2><strong>Postage(inc GST)</td><td colspan=2></td><td></td><td>: <U> BDT ৳".$postage_price."</strong></U></td><td></td></tr>
       <tr><td colspan=7 align=right></td></tr>
       <tr><td colspan=2><strong>Total(inc GST)</td><td colspan=2></td><td></td><td>:                   BDT ৳".$final_bill."</strong></td><td></td></tr>";
	   }
	   else
	   {
	   "<tr><td colspan=7><strong>Sorry</td></tr>";
	   }
	   echo "</table>";
?>