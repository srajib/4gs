<?php error_reporting(E_ERROR);	session_start(); include('admin/lib/connect.php'); 
	ob_start();    
    if(!isset($_SESSION['username'])){	//  header("Location: login.php");	
}	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">  
<title>Home | Genius Technology Ltd.</title>
<?php include('somelinks.php'); ?>	
<style>
#page_links{font-family: arial, verdana; font-size: 12px; border:1px #000 solid; padding: 6px; margin: 3px; background-color: #ccc; text-decoration: none;}
#page_a_link{font-family: arial, verdana; font-size: 12px; border:1px #000 solid; color: #f00; background-color: #ccc;
padding: 6px; margin: 3px; text-decoration: none;}
</style>	
</head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<?php include('slider.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>


<div id="rightcontent3">

<?php $sqlCat1 = mysql_query("SELECT * from cat1 WHERE cat1.status=1 ORDER BY cat1.cat1_id DESC LIMIT 14");  	
while($rowCat1 = mysql_fetch_assoc($sqlCat1))	
{
?>


<div class="catarea"> <!-- style="float:right; margin:0 0 0 30px; " -->
	<a href="subcat.php?subcatid=<?php echo $rowCat1['cat1_id']; ?>"><img src="images/cat1photos/<?php echo $rowCat1['cat1_photo']; ?>"/></a>
	<br>
	<a href="subcat.php?subcatid=<?php echo $rowCat1['cat1_id']; ?>"><?php echo $rowCat1['cat1_name']; ?></a>
</div>

<?php
}
?>

</div>

</div><!-- maincontent end -->  
	
<?php include('footer.php'); ?>

</div><!-- whole end -->
	
</body>
</html>