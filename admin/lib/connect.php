<?php
$con = mysql_connect("localhost", "www4gsho_root", "genius4321");
$db = mysql_select_db("www4gsho_4gs", $con);

mysql_query("SET CHARACTER SET utf8");
mysql_query("SET SESSION collation_connection ='utf8_general_ci'") or die (mysql_error());

?>