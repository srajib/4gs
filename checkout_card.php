<?php error_reporting(E_ERROR);	session_start(); // ob_start();
	include('admin/lib/connect.php');
    if(!isset($_SESSION['Username'])){
    } 
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Checkout Card | Genius Technology Ltd.</title>
	<?php include('somelinks.php'); ?>	
	<?php include('chkcrdscrpt.php'); ?>	
	
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<?php include('slider.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>

<div id="rightcontent2">

<div class="leftcat1list1">Checkout Card
</div>



<div id="contentarea">


<?php



if(isset($_POST['final_bill']) && isset($_POST['total_price']) && isset($_POST['postage_price']))
	{       
    if(isset($_POST['pay_method']))// card or  paypall
	{
	




	 if($_POST['pay_method']==0)  //for paypal
	   {
	   $txt_pemail=$_POST['spal_email'];
	   if(!empty($txt_pemail))
	   {
?>
			
	<form action="https://www.paypal.com/cgi-bin/webscr" method="post" name="_xclick" target="_top">
		<!--	<form action="checkout_card.php" method="post" name="_xclick" target="_top">-->
			<input type="hidden" name="cmd" value="_cart">			
			<input type="hidden" name="upload" value="1">
			<input type="hidden" name="business" value="rajib_2002bd@yahoo.com">
		<input type="hidden" name="currency_code" value="AUD">
		  <input type="hidden" name="return" value="http://webtechbd.net/ecom/orderplaced.php">
		      <input type="hidden" name="cancel_return" value="http://webtechbd.net/ecom/cart.php">
				    <input type="hidden" name="image_url" value="http://webtechbd.net/ecom/images/headertitle.png">
		
		<!--	<input type="hidden" name="currency_code" value="GBP">-->
<?php			



    $j=0;
	$total_price_verify=0;
	$ship_cost=0;
        for($i=0;$i<=end($_SESSION["cartindex"]);$i++) // earlier it was $i=0, so the omitted first value!
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
			<input type=hidden name=image_'.($j).' value=http://localhost/ecom/admin/'.$_SESSION["picture"][$i].'>';
			//<input type=hidden name=image_'.($i+1).' value=http://localhost/ecom/admin/'.$_SESSION["picture"][$i].'>';
			
			if ($_POST["postage_price"]==0)
			echo '<input type=hidden name=shipping_'.($j).' value=0>';
			else
		    {
			$p_price=$_SESSION["count"][$i]*$_SESSION["postage_cost"][$i];
			echo '<input type=hidden name=shipping_'.($j).' value='.$p_price.'>';			
			$ship_cost=$ship_cost+$p_price;
			}
			
			
			echo '<td></td><td></td></tr>';			
			
		
			
			$total_price_verify=$total_price_verify+$item_price;
        		           
		    }				
		}        
		$final_bill_verify=$total_price_verify+$ship_cost;
		
		
?>			
			
            <table class="manage">
            <Thead>               
			   <tr style="background-color:grey; color:white"><th>Value for the order </th><th>AUD $ <?php echo $_POST['final_bill']; ?></th></tr>
	  	    </thead>		
            </table>   
<?php
			if($_POST['total_price']==$total_price_verify && $_POST['postage_price']==$ship_cost && $_POST['final_bill']==$final_bill_verify)
			{
?>	
	        <input type="image" src="http://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!">
<?php
	

	
			
			
			include("add_address.php");
	
			echo '<input type=hidden name="s_full_name" value='.$_POST["s_full_name"].'>';
			echo '<input type=hidden name="s_address_1" value='.$_POST["s_address_1"].'>';
			echo '<input type=hidden name="s_address_2" value='.$_POST["s_address_2"].'>';
			echo '<input type=hidden name="s_city" value='.$_POST["s_city"].'>';
			echo '<input type=hidden name="s_state" value='.$_POST["s_state"].'>';
			echo '<input type=hidden name="s_zip" value='.$_POST["s_zip"].'>';
			echo '<input type=hidden name="s_country" value='.$_POST["s_country"].'>';
			echo '<input type=hidden name="sac_email" value='.$_POST["sac_email"].'>';
			echo '<input type=hidden name="spal_email" value='.$_POST["spal_email"].'>';
			echo '<input type=hidden name="s_phone" value='.$_POST["s_phone"].'>';
	        
	
			
			
			}
            else
			{
			echo "Sorry We cant process your order!";
			
			}
?>	
  	        
			<!--<input type="hidden" name="item_name" value="">-->
			<!--<input type="hidden" name="amount" value="<?php echo $_POST['final_bill']; ?>">-->
			
			
			<!--

			  <input type="hidden" name="hosted_button_id" value="NHQQVDDC5XY6N">
			  <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online.">
			  <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1" />
			-->
			  
		</form>
       <?php
	     }//paypal email empty
		else
		{
		echo "please give paypal email add for further payment and order tracking";
		
		}
		}// pay method pay pal 
		
		elseif($_POST['pay_method']==1)
		{
		
		 ?>  <table class="manage">
            <Thead>               
			   <tr style="background-color:grey; color:white"><th>Value for the order </th><th>AUD $ <?php echo $_POST['final_bill']; ?></th></tr>
	  	    </thead>		
            </table>   
			 <form action='https://www.2checkout.com/checkout/purchase' method='post' onsubmit="return validateForm()" name="frm_vld">	
		    <?php
			
			echo "<p>Same Billing and Delivery address <input type=checkbox name=sameadd value=unchecked></p>";
			include("card.php");   
		   echo '<input type=hidden name="ship_name" value='.$_POST["s_full_name"].'>';
			echo '<input type=hidden name="ship_street_address" value='.$_POST["s_address_1"].'>';
			echo '<input type=hidden name="ship_street_address2" value='.$_POST["s_address_2"].'>';
			echo '<input type=hidden name="ship_city" value='.$_POST["s_city"].'>';
			echo '<input type=hidden name="ship_state" value='.$_POST["s_state"].'>';
			echo '<input type=hidden name="ship_zip" value='.$_POST["s_zip"].'>';
			echo '<input type=hidden name="ship_country" value='.$_POST["s_country"].'>';
			echo '<input type=hidden name="email" value='.$_POST["sac_email"].'>';
			echo '<input type=hidden name="phone" value='.$_POST["s_phone"].'>';
	
			?>
			</form>
			
			
		<?php
		   include("add_address.php");
		
		}
         
		//echo "<input type=submit name=subBtn value=Submit />";
        } //paymethod end
        else
        {
		echo "payment method need to set";				 
		}				 
	}   
    else
	{
	   echo "Bill seems Not set! ";
	}
	
	?>
	
</div>




</div><!-- rightcontent2 end -->      
</div><!-- maincontent end -->  	

</div>
	
</body>
</html>