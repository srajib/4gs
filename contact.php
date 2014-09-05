<?php error_reporting(E_ERROR);	session_start(); include('admin/lib/connect.php');
    if(!isset($_SESSION['Username'])){
    } 
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Contact Us | Genius Technology Ltd</title>
	<?php include('somelinks.php'); ?>	
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<?php include('slider.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>

<div id="rightcontent2">

<div class="leftcat1list1">Contact Us
</div>


<div class="heading6" style="margin-top:25px">Customer Care</div>
<div class="contact6">
	Dhaka Trade Centre (Level - 9, Suit - JK)
	<br>99, Kawran Bazaar, Dhaka-1215
	<br>Phone: 02-8189261
	<br>Mobile: 01955534300-01
</div>

<div class="heading6">Sales & Marketing Team</div>
<div class="contact6">
You Can Call a Sales Team Member
<br>Mobile: 01955534302-10
</div>

<div class="heading6">Service Point</div>
<div class="contact6">
	Dhaka Trade Centre (Level - 9, Suit - JK)
	<br>99, Kawran Bazaar, Dhaka-1215
	<br>Phone: 02-8189261
	<br>Mobile: 01955534300-01
</div>

<div class="heading6">Branches In All Over Bangladesh</div>
<div class="contact6">
Click for Branches
</div>












</div><!-- rightcontent2 end -->      



</div><!-- maincontent end -->  
	
<?php include('footer.php'); ?>

</div><!-- whole end -->
	
</body>
</html>