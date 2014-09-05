<?php include('admin/lib/connect.php');
if(isset($_POST['submit']))
{
session_start();
$name = $_POST["username"];
$password = $_POST["psw"];
$password = md5($password);
$sql = "select * from members where username ='".$name."' and  password ='".$password."' ";
$result=mysql_query($sql);
$count = mysql_num_rows($result);
if($count==1)
{    
     while($row=mysql_fetch_row($result))
    {    
                   $_SESSION['username'] = $_POST['username'];
            header("Location: index.php");
       }
}
else
{
    header("Location: main_login.php");
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<script type="text/javascript">
function change(){
    
    var uname = document.getElementById("username").value;
    var psw = document.getElementById("psw").value;
    //alert(uname);
    if(uname == "")
    {    
        document.getElementById('u').innerHTML = 'Plese Enter User name';
    }
    else
    {
        document.getElementById('u').innerHTML = '';
    }
}
function changep(){
       var psw = document.getElementById("psw").value;
    if(psw == "")
    {
        document.getElementById('p').innerHTML = 'Plese Enter Password';
    }
    else
    {
        document.getElementById('p').innerHTML = '';
    }
}
</script>
</head>
<body><center>
<form action="" method="post">
<table width="503" height="117" border="0">
  <tr>
    <td width="117">User Name</td>
    <td width="160"><input type="text" id="username" name="username" onblur="change()"/></td>
    <td width="260"><label id="u"> </label></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="password" name="psw" id="psw" onblur="changep()" /></td>
    <td width="260"><label id="p"> </label></td>
  </tr>
   <tr>
    <td><input type="reset"  /></td>
    <td><input type="submit" value="submit" id="submit"  name="submit"/></td>
  </tr>
</table>
</form>
</center>
</body>
</html>