<div id="leftcontent1">
	<div class="leftcat1list1">Category List
	</div>
	
<?php $tree = mysql_query("SELECT * from cat1 WHERE cat1.status=1"); ?>	

<div style="float:left; margin:20px 10px">
<ul id="red" class="treeview-red">
<?php while($row = mysql_fetch_array($tree))
{
?>
	<li><span><a href="category.php?catid=<?php echo $row['cat1_id']; ?>"><?php echo $row['cat1_name']; ?></a></span>
		<ul>
		
<?php
	$divid = $row['cat1_id'];
	$dist = mysql_query("SELECT * FROM cat2 WHERE cat1_id='$divid'");
	while($rowdist = mysql_fetch_array($dist))
	{
?>		
		<li><span><a href="subcategory.php?subcatid=<?php echo $rowdist['cat2_id']; ?>"><?php echo $rowdist['cat2_name']; ?></a></span>				
		</li>
<?php
}
?>
		</ul>
	</li>
<?php
}
?>
</ul>
</div>

</div>