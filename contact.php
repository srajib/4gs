<?php error_reporting(E_ERROR);	session_start(); 
	include('admin/lib/connect.php');
    if(!isset($_SESSION['Username'])){
    } 
?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Contact Us | Genius Technology Ltd</title>
	<?php include('somelinks.php'); ?>	
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<?php include('slider.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>

<div id="rightcontent2">

<div class="leftcat1list1">Contact Us
</div>

<div class="contactdesc" style="float:left; margin:20px; text-align:justify">Genius Technology Ltd.  develop value delivery chain to take a part of huge potential ICT market.  For raising repetitive customer GTL developed customer retention process. We always listen to what customer say, what customer's demand.
</div>

<div class="vdc">
	<img src="images/vdc.png">
</div>


<div class="heading7">Contact Us</div>
<br>Remarks: You can assess any sales throng clicking her/his picture.
<br>Your opinion is our way forward: Thanks a lot!




<div class="contactperson" style="float:left; padding:10px; width:660px; height:200px; ">

<div class="contactperson1" style="float:left; padding:10px; margin-left:20px; width:90px; height:200px; border:1px solid #777">
	<img src="images/sabbir.png">
</div>
<div class="contactperson" style="float:left; padding:10px; width:250px; height:200px; border:1px solid #777">
Customer Care Executive (CCE)
<br>E-mail: sales@4gshopping.com
<br>Tel: +88-02-8189261
<br>Cell: 01955534300-1
<br>Slogan: Try, Try and Try,
<br>Success Must Come to Hand. 
<br>Successful Story:


</div>
<div class="contactperson" style="float:left; padding:10px; width:200px; height:200px; border:1px solid #777">
<center>Chat with CCE</center>
<br>
	<center><img src="images/skype.png"></center>
	<br>	<center><img src="images/talk.png"></center>
		<br>	<center><img src="images/chat.png"></center>
</div>
</div>





<div class="contactformarea" style="float:left; margin:30px 0 10px 100px;">

<br>
<form name="contactform" method="post" action="send_form_email.php">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit"> 
 
 </td>
 
</tr>
 
</table>
 
</form>


</div><!-- contactformarea end -->      





</div><!-- rightcontent2 end -->      
</div><!-- maincontent end -->  	

</div>
	
</body>
</html>