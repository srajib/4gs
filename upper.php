<?php session_start(); ?>

<div id="header">
	<div id="headerleft">
		<a href="index.php"><img src="images/logo.png"/></a>
	</div>
	
<!--
	<div id="headerleft" style="float:left; margin:115px 0 0 30px; width:300px; height:auto; color:#555; font-size:13px; ">
		<?php if($_SESSION["username"]) 
		{
			echo "Welcome "; 
			echo $_SESSION["username"]; 			
		?>		
			| <a href="logout.php" style="color:#555; text-decoration:none" title="Logout">Logout</a>
		<?php
		}
		?>
	</div>
-->
	
<div id="headerright">	
<div class="cartarea">	
<div class="cartnumbers">	

<a href="cart.php">

<?php 
if(isset($_SESSION["cart"]))
{
	$diff_item=count($_SESSION["cart"]);  
	if($diff_item>0)
		echo $diff_item;
	else
		{
		unset($_SESSION["cart"]);
		unset($_SESSION["cartindex"]);
		unset($_SESSION["count"]);
		unset($_SESSION["postage_cost"]);
		unset($_SESSION["price"]);  
		unset($_SESSION["product_name"]);
		unset($_SESSION["picture"]);	
		unset($_SESSION['CartItemCount']);	
		}
}
echo " Item</a>"; 
?>	
</div>	


</div>

<div class="toplinks">
		
<?php	

	$k = $_SESSION['username'];
	if(!$_SESSION["username"])
	{
		echo "<a href='index.php'>Home</a> | <a href='main_login.php'>Login</a> | <a href='register.php'>Register</a>";
	}
	else{
		echo "Welcome $k";
		echo " | <a href='logout.php' style='color:#999; text-decoration:none' title='Logout'>Logout</a>";
	}
?>
	
</div>

<div class="selectoptionsearch">	
<form action="search.php" method="post">		
	<input type="submit" value="Search" class="searchbutton"/>
	<input type="text" name="searchterm" size="31" maxlength="255" value="" class="searcharea" style="float:right"/>
</form>
</div>

</div>

</div>


<div id="topmenuarea"><!-- topmenuarea start -->

<?php $sqlMenu = mysql_query("SELECT * FROM menu"); 

while($x = mysql_fetch_array($sqlMenu))
{ 
?>	
	<div class="topmenu"><a href="<?php echo $x['menu_link']; ?>"><?php echo $x['menu_name']; ?></a></div>
<?php 
} 
?>

</div><!-- topmenuarea end -->