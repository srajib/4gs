<div id="leftcontent1">
	<div class="leftcat1list1">Category List
	</div>
	
<div style="float:left; margin:20px 10px">

<?php $tree = mysql_query("SELECT * from cat1 WHERE cat1.status=1 ORDER BY cat1.cat1_id DESC LIMIT 14");
while($row = mysql_fetch_array($tree))
{
?>

<div class="leftcatlist">
	<a href="subcat.php?subcatid=<?php echo $row['cat1_id']; ?>"><?php echo $row['cat1_name']; ?></a>
</div>
	
<?php
}
?>

</div>

</div>