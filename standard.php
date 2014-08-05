<?php include('admin/lib/connect.php');
	ob_start();
    session_start();
    if(!isset($_SESSION['Username'])){
    } 
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Product List | Genius</title>
	<?php include('somelinks.php'); ?>	
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<?php include('slider.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>

<div id="rightcontent2">

<div class="leftcat1list1">Featured Products
</div>


<!-- dynamism will be here -->


</div><!-- rightcontent2 end --> 


     
</div><!-- maincontent end -->  
	
	
</div>

	
</body>
</html>