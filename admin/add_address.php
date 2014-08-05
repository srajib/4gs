<?php
 session_start(); 
if(!isset($_SESSION['admin_id']))
{
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    exit();
}

include('lib/connect.php');

 $billing=0;
 $delivery=0;
 $user=0;


if (isset($_POST['bill_add']))
 {
  $billing=1;
}

if (isset($_POST['delivery_add']))
 {
  $delivery=1;
}

if (isset($_POST['u_add']))
 {
  $user=1;
}



$sqlAddress = mysql_query("
INSERT INTO address(name,address1,address2,city,state,zip,country,billing_add,delivery_add,user_add,phone,pemail,uemail)
VALUES ('$_POST[s_full_name]','$_POST[s_address_1]','$_POST[s_address_2]','$_POST[s_city]','$_POST[s_state]','$_POST[s_zip]','$_POST[s_country]',$billing,$delivery,$user,'$_POST[s_phone]','$_POST[spal_email]','$_POST[sac_email]')");


header("Location: add_address_form.php");




?>





