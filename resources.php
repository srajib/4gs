<?php error_reporting(E_ERROR);	session_start(); 
	include('admin/lib/connect.php');
    if(!isset($_SESSION['Username'])){
    } 
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Resources | Genius Technology Ltd</title>
	<?php include('somelinks.php'); ?>	
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<?php include('slider.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>

<div id="rightcontent2">

<div class="leftcat1list1">Resources
</div>



<!-- dynamism will be here -->



</div><!-- rightcontent2 end -->      
</div><!-- maincontent end -->  	

</div>
	
</body>
</html>