<?php error_reporting(E_ERROR);	session_start(); include('admin/lib/connect.php');
    if(!isset($_SESSION['username'])){
    } 
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Checkout Payment | Genius Technology Ltd</title>
	<?php include('somelinks.php'); ?>	
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<?php include('slider.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>

<div id="rightcontent2">

<div class="leftcat1list1">Checkout Payment
</div>

<div id="p" style="float:left;font-size:12px;">			       
<form action=checkout_card.php method=post>				      
<?php if (!isset($_SESSION["cart"])) {
    exit();
} 

$total_price = $_POST['total_price'];
$final_bill = $_POST['final_bill'];
$postage_price = $_POST['postage_price'];

echo "<input type='hidden' name='pmethod' value='" . $_POST['pmethod'] . "'>"; ?>

<table>
<tr>
<td colspan=2>							
	<h2>Payment</h2>							
	<input type=hidden name="s_full_name" value=<?php echo $_POST['s_full_name']; ?>>							
	<input type=hidden name="s_address_1" value=<?php echo $_POST['s_address_1']; ?>>							
	<input type=hidden name="s_address_2" value=<?php echo $_POST['s_address_2']; ?>>							
	<input type=hidden name="s_city" value=<?php echo $_POST['s_city']; ?>>							
	<input type=hidden name="s_state" value=<?php echo $_POST['s_state']; ?>>							
	<input type=hidden name="s_zip" value=<?php echo $_POST['s_zip']; ?>>							
	<input type=hidden name="s_country" value=<?php echo $_POST['s_country']; ?>>							
	<input type=hidden name="sac_email" value=<?php echo $_POST['sac_email']; ?>>							
	<input type=hidden name="s_phone" value=<?php echo $_POST['s_phone']; ?>><br>							
</td>
</tr>							

<?php if ($_POST['pay_method'] == 0) 
{ 
?>
<tr><td colspan=2><strong>paypal Email</strong></td>
</tr>
<tr><td colspan=2><input type=text name="spal_email"></td>
</tr>							
<?php 
} 
?>                       							
<tr rowspan=5><td colspan=2><strong>Note</strong> </td>
</tr>							
<tr rowspan=5><td colspan=2><textarea style="width:250; height:200" name="note"></textarea></td>
</tr> 							
<tr>
	<td>
	<?php echo "<input type=hidden value=" . $total_price . " name=total_price>";
	echo "<input type=hidden value=" . $postage_price . " name=postage_price>";
	echo "<input type=hidden value=" . $final_bill . " name=final_bill>";
	echo "<input type=submit name=subBtn value=Submit />";
	if ($_POST['pay_method'] == 0) {
		echo "<input type=hidden name=pay_method value=0>";
	} elseif ($_POST['pay_method'] == 1) {
		echo "<input type=hidden name=pay_method value=1>";
	} elseif ($_POST['pay_method'] == 19) {
		echo "<input type=hidden name=pay_method value=19>";
	} 
	?>                              
	</td>
	<td>
	</td>
</tr>												    
</table>				    
</form>			   

</div>

</div><!-- rightcontent2 end --> 
  
</div><!-- maincontent end -->  
	
</div>
	
</body>
</html>