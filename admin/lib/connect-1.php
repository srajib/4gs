<?php $con = @mysql_connect("localhost", "wwwwebte_root", "srajib1234");
$db = mysql_select_db("wwwwebte_4gs", $con);

mysql_query("SET CHARACTER SET utf8");
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die (mysql_error());

?>