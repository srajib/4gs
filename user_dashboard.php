<?php session_start(); ?>

<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center">User Dashboard</td>
</tr>
<tr class="tablerow">
<td>

<?php if($_SESSION["username"]) 
{
?>

Welcome <?php echo $_SESSION["username"]; ?>. Click here to <a href="logout.php" title="Logout">Logout.

<?php
}
?>

</td>
</tr>
</body></html>