<script type="text/javascript">
function validateForm()
{
var n=document.forms["frm_valid"]["s_full_name"].value;


if (n==null || n=="")
  {
  alert("Name must be filled out");
  return false;
  }

  var adr=document.forms["frm_valid"]["s_address_1"].value;


if (adr==null || adr=="")
  {
  alert("Address must be filled out");
  return false;
  }

var city=document.forms["frm_valid"]["s_city"].value;

if (city==null || city=="")
  {
  alert("city must be filled out");
  return false;
  }
  
var country=document.forms["frm_valid"]["s_country"].value;

if (country==null || country=="")
  {
  alert("country must be filled out");
  return false;
  }

  var m=document.forms["frm_valid"]["s_phone"].value;
  
  if (m==null || m=="")
  {
  alert("phone number must be filled out");
  return false;
  }
  
  
var e=document.forms["frm_valid"]["sac_email"].value;
  
  if (e==null || e=="")
  {
  alert("Email must be filled out");
  return false;
  }
  
var atpos=e.indexOf("@");
var dotpos=e.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
  
  
}
 </script>