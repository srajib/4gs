<?php error_reporting(E_ERROR);	session_start(); include('admin/lib/connect.php');
    if(!isset($_SESSION['username'])){
    } 
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Order Status List | Genius Technology Ltd</title>
	<?php include('somelinks.php'); ?>	
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<?php include('slider.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>

<div id="rightcontent2">

<div class="leftcat1list1">Order Status List
</div>


<div class="aboutuscontent">


<table class="table table-striped table-bordered table-highlight" width="100%" id="example">
<thead>
	<tr>
		<th>Total Price</th>
		<th>Final Bill</th>		
		<th>Phone</th>
		<th>Address</th>
		<th>Order Status</th>		
		<th>View</th>		
	</tr>
</thead>

<tbody>

<?php 
$mp = $_SESSION['username'];
$sql2 = mysql_query("SELECT order_list.*, members.fname, members.lname, members.phone, members.address, members.email 
FROM order_list
LEFT JOIN members 
ON members.username = order_list.username WHERE members.username = '$mp'
ORDER BY order_list.ord_time DESC"); 

while($row2 = mysql_fetch_array($sql2))
{
?>                             
	<tr class="odd gradeX">		
		<td><?php echo $row2['total_price']; ?></td>
		<td><?php echo $row2['final_bill']; ?></td>		
		<td><?php echo $row2['phone']; ?></td>				
		<td><?php echo $row2['address']; ?></td>
		<td>
		<?php 
			if($row2['ord_status']=='0') { echo 'Pending';} 
			elseif($row2['ord_status']=='1') { echo 'Excepted';} 
			elseif($row2['ord_status']=='2') { echo 'Wait';} 
			elseif($row2['ord_status']=='3') { echo 'Sent';} 
			elseif($row2['ord_status']=='4') { echo 'Collect';} 
			elseif($row2['ord_status']=='5') { echo 'Return';} 
			elseif($row2['ord_status']=='6') { echo 'Refund';} 
			elseif($row2['ord_status']=='7') { echo 'Successfuly Received';} 
			elseif($row2['ord_status']=='8') { echo 'Successfuly Stocked';} 			
			else{echo 'Return to Origin';}
			?></td>
		<td>
			<a href="order_status_details.php?ordid=<?php echo $row2['ord_id']; ?>">Details</a>			
		</td>
	</tr>
<?php
}
?>

</tbody>
</table>

</div><!-- About Us conten end -->
</div><!-- rightcontent2 end -->      
</div><!-- maincontent end -->  	
</div>	
</body>
</html>