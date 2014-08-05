

<?php session_start(); 

if(!isset($_SESSION['admin_id']))
{
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    exit();
}

if($_SESSION['authority']<3)
	{
	echo "<meta http-equiv='refresh' content='0; url=dashboard.php'>";
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


if(isset($_POST['address_id']))
{
$aid=$_POST['address_id'];
}



$result=mysql_query("UPDATE address	SET name='$_POST[s_full_name]', address1='$_POST[s_address_1]', address2='$_POST[s_address_2]', city='$_POST[s_city]',state='$_POST[s_state]',zip='$_POST[s_zip]', country='$_POST[s_country]', billing_add=$billing, delivery_add=$delivery,
user_add=$user,phone='$_POST[s_phone]',pemail='$_POST[spal_email]', uemail='$_POST[sac_email]'	   
	   WHERE address_id=$aid");		
header("location: address_list.php");




?>





