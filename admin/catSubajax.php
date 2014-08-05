<?php

$catG  = $_GET['q'];
include('lib/connect.php');

echo '<select name="cat2" onchange="ChooseSubSelect(this.value)" id="selectedsub">
<option value="0">-- Select Sub-Category --</option>';

$sql1 = mysql_query("SELECT * FROM cat2 WHERE cat1_id='$catG'");
while($row1 = mysql_fetch_array($sql1))
{
	echo '<option value="'.$row1['cat2_id'].'">'.$row1['cat2_name'].'</option>';
}
echo '</select>';
  $selected_cat = $_GET['q'];
   
?>



