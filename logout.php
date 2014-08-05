<?php session_start(); session_destroy(); header("Location:index.php"); ?>
<meta http-equiv="refresh" content="0; url=index.php">

<?php /* session_start();
unset($_SESSION["user_id"]);
unset($_SESSION["user_name"]);
header("Location:user_login_session.php");
*/
?>