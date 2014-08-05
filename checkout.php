<?php error_reporting(E_ERROR);	session_start(); include('admin/lib/connect.php');
    if(!isset($_SESSION['username'])){
    } 
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">  
    <title>Checkout | Genius</title>
	<?php include('somelinks.php'); ?>	
	<?php include('checkout_validate.php'); ?>	
  </head>
  
<body>

<div id="whole">

<?php include('upper.php'); ?>
<?php include('slider.php'); ?>

<div id="maincontent"><!-- maincontent start -->   

<?php include('leftlist.php'); ?>

<div id="rightcontent2">

<div class="leftcat1list1">Checkout
</div>


<div id="p" style="float:left;font-size:12px;">
<input type="hidden" name="product_name" value="session"/>
<form action=checkout_payment.php method=post name=frm_valid  onsubmit="return validateForm()">
<?php
if(!isset($_SESSION["cart"]))
{
exit();
}
$total_item= count($_SESSION["cart"]);
$total_price=$_POST['total_price'];
$postage_price=$_POST['postage_price'];
$final_bill=$_POST['final_bill'];
echo "<input type='hidden' name='pmethod' value='".$_POST['pmethod']."'>";

$valid=0;

if(isset($_POST['checkout_delivery']) && $total_item>0 && $final_bill>=0 )
{
	include('calculate.php');
}
else
{
	exit();
}

?>


<table>
<tr><td colspan=2>
<div class="shipping" style="width:560px; float:left; margin-top:5em;" align=left>

<h2>Shipping address</h2>

<div class="tag1" style="width:240px;float:left;line-height:2.2em;margine-left:30em" align=left>
Full Name *<br>
Address 1 *<br>
Address 2<br>
City  *<br>
State/Province/Region<br>
Postal Code<br>
Country *<br>
email *<br>
Phone *<br>
</div>

<div class="tag2" style="width:320px;float:right" align=left>
<input type=text name="s_full_name" autocomplete="on"><br>
<input type=text name="s_address_1"><br>
<input type=text name="s_address_2"><br>
<input type=text name="s_city"><br>
<input type=text name="s_state"><br>
<input type=text name="s_zip"><br>

<select name="s_country" autocomplete="on">
      <option value="">Choose Country</option>
        <option value="BGD">Bangladesh</option>
        <option value="USA">United States</option>
        <option value="GBR">United Kingdom</option>
        <option value="CAN">Canada</option>
        <option value="AUS">Australia</option>
		<option disabled="">—</option>
        <option value="ALA">Åland Islands</option>
        <option value="AFG">Afghanistan</option>
        <option value="ALB">Albania</option>
        <option value="DZA">Algeria</option>
        <option value="ASM">American Samoa</option>
        <option value="AND">Andorra</option>
        <option value="AGO">Angola</option>
        <option value="AIA">Anguilla</option>
        <option value="ATA">Antarctica</option>
        <option value="ATG">Antigua and Barbuda</option>
        <option value="ARG">Argentina</option>
        <option value="ARM">Armenia</option>
        <option value="ABW">Aruba</option>
        <option value="AUS">Australia</option>
        <option value="AUT">Austria</option>
        <option value="AZE">Azerbaijan</option>
        <option value="BHS">Bahamas</option>
        <option value="BHR">Bahrain</option>
        <option value="BGD">Bangladesh</option>
        <option value="BRB">Barbados</option>
        <option value="BLR">Belarus</option>
        <option value="BEL">Belgium</option>
        <option value="BLZ">Belize</option>
        <option value="BEN">Benin</option>
        <option value="BMU">Bermuda</option>
        <option value="BTN">Bhutan</option>
        <option value="BOL">Bolivia</option>
        <option value="BES">Bonaire, Sint Eustatius and Saba</option>
        <option value="BIH">Bosnia and Herzegovina</option>
        <option value="BWA">Botswana</option>
        <option value="BVT">Bouvet Island</option>
        <option value="BRA">Brazil</option>
        <option value="IOT">British Indian Ocean Territory</option>
        <option value="BRN">Brunei Darussalam</option>
        <option value="BGR">Bulgaria</option>
        <option value="BFA">Burkina Faso</option>
        <option value="BDI">Burundi</option>
        <option value="KHM">Cambodia</option>
        <option value="CMR">Cameroon</option>
        <option value="CAN">Canada</option>
        <option value="CPV">Cape Verde</option>
        <option value="CYM">Cayman Islands</option>
        <option value="CAF">Central African Republic</option>
        <option value="TCD">Chad</option>
        <option value="CHL">Chile</option>
        <option value="CHN">China</option>
        <option value="CXR">Christmas Island</option>
        <option value="CCK">Cocos (Keeling) Islands</option>
        <option value="COL">Colombia</option>
        <option value="COM">Comoros</option>
        <option value="COG">Congo</option>
        <option value="COD">Congo, the Democratic Republic of the</option>
        <option value="COK">Cook Islands</option>
        <option value="CRI">Costa Rica</option>
        <option value="CIV">Cote D'ivoire</option>
        <option value="HRV">Croatia (Hrvatska)</option>
        <option value="CUB">Cuba</option>
        <option value="CYP">Cyprus</option>
        <option value="CZE">Czech Republic</option>
        <option value="DNK">Denmark</option>
        <option value="DJI">Djibouti</option>
        <option value="DMA">Dominica</option>
        <option value="DOM">Dominican Republic</option>
        <option value="ECU">Ecuador</option>
        <option value="EGY">Egypt</option>
        <option value="SLV">El Salvador</option>
        <option value="GNQ">Equatorial Guinea</option>
        <option value="ERI">Eritrea</option>
        <option value="EST">Estonia</option>
        <option value="ETH">Ethiopia</option>
        <option value="FLK">Falkland Islands (Malvinas)</option>
        <option value="FRO">Faroe Islands</option>
        <option value="FJI">Fiji</option>
        <option value="FIN">Finland</option>
        <option value="FRA">France</option>
        <option value="FXX">France, Metropolitan</option>
        <option value="GUF">French Guiana</option>
        <option value="PYF">French Polynesia</option>
        <option value="ATF">French Southern Territories</option>
        <option value="GAB">Gabon</option>
        <option value="GMB">Gambia</option>
        <option value="GEO">Georgia</option>
        <option value="DEU">Germany</option>
        <option value="GHA">Ghana</option>
        <option value="GIB">Gibraltar</option>
        <option value="GRC">Greece</option>
        <option value="GRL">Greenland</option>
        <option value="GRD">Grenada</option>
        <option value="GLP">Guadeloupe</option>
        <option value="GUM">Guam</option>
        <option value="GTM">Guatemala</option>
        <option value="GGY">Guernsey</option>
        <option value="GIN">Guinea</option>
        <option value="GNB">Guinea-Bissau</option>
        <option value="GUY">Guyana</option>
        <option value="HTI">Haiti</option>
        <option value="HMD">Heard Island and Mcdonald Islands</option>
        <option value="HND">Honduras</option>
        <option value="HKG">Hong Kong</option>
        <option value="HUN">Hungary</option>
        <option value="ISL">Iceland</option>
        <option value="IND">India</option>
        <option value="IDN">Indonesia</option>
        <option value="IRN">Iran, Islamic Republic of</option>
        <option value="IRQ">Iraq</option>
        <option value="IRL">Ireland</option>
        <option value="IMN">Isle of Man</option>
        <option value="ISR">Israel</option>
        <option value="ITA">Italy</option>
        <option value="JAM">Jamaica</option>
        <option value="JPN">Japan</option>
        <option value="JEY">Jersey</option>
        <option value="JOR">Jordan</option>
        <option value="KAZ">Kazakhstan</option>
        <option value="KEN">Kenya</option>
        <option value="KIR">Kiribati</option>
        <option value="PRK">Korea, Democratic People's Republic of</option>
        <option value="KOR">Korea, Republic of</option>
        <option value="UNK">UNK</option>
        <option value="KWT">Kuwait</option>
        <option value="KGZ">Kyrgyzstan</option>
        <option value="LAO">Lao People's Democratic Republic</option>
        <option value="LVA">Latvia</option>
        <option value="LBN">Lebanon</option>
        <option value="LSO">Lesotho</option>
        <option value="LBR">Liberia</option>
        <option value="LBY">Libyan Arab Jamahiriya</option>
        <option value="LIE">Liechtenstein</option>
        <option value="LTU">Lithuania</option>
        <option value="LUX">Luxembourg</option>
        <option value="MAC">Macao</option>
        <option value="MKD">Macedonia</option>
        <option value="MDG">Madagascar</option>
        <option value="MWI">Malawi</option>
        <option value="MYS">Malaysia</option>
        <option value="MDV">Maldives</option>
        <option value="MLI">Mali</option>
        <option value="MLT">Malta</option>
        <option value="MHL">Marshall Islands</option>
        <option value="MTQ">Martinique</option>
        <option value="MRT">Mauritania</option>
        <option value="MUS">Mauritius</option>
        <option value="MYT">Mayotte</option>
        <option value="MEX">Mexico</option>
        <option value="FSM">Micronesia, Federated States of</option>
        <option value="MDA">Moldova, Republic of</option>
        <option value="MCO">Monaco</option>
        <option value="MNG">Mongolia</option>
        <option value="MNE">Montenegro</option>
        <option value="MSR">Montserrat</option>
        <option value="MAR">Morocco</option>
        <option value="MOZ">Mozambique</option>
        <option value="MMR">Myanmar</option>
        <option value="NAM">Namibia</option>
        <option value="NRU">Nauru</option>
        <option value="NPL">Nepal</option>
        <option value="NLD">Netherlands</option>
        <option value="ANT">Netherlands Antilles</option>
        <option value="NCL">New Caledonia</option>
        <option value="NZL">New Zealand</option>
        <option value="NIC">Nicaragua</option>
        <option value="NER">Niger</option>
        <option value="NGA">Nigeria</option>
        <option value="NIU">Niue</option>
        <option value="NFK">Norfolk Island</option>
        <option value="MNP">Northern Mariana Islands</option>
        <option value="NOR">Norway</option>
        <option value="OMN">Oman</option>
        <option value="PAK">Pakistan</option>
        <option value="PLW">Palau</option>
        <option value="PSE">Palestinian Territory, Occupied</option>
        <option value="PAN">Panama</option>
        <option value="PNG">Papua New Guinea</option>
        <option value="PRY">Paraguay</option>
        <option value="PER">Peru</option>
        <option value="PHL">Philippines</option>
        <option value="PCN">Pitcairn</option>
        <option value="POL">Poland</option>
        <option value="PRT">Portugal</option>
        <option value="PRI">Puerto Rico</option>
        <option value="QAT">Qatar</option>
        <option value="REU">Reunion</option>
        <option value="ROU">Romania</option>
        <option value="RUS">Russian Federation</option>
        <option value="RWA">Rwanda</option>
        <option value="SHN">Saint Helena</option>
        <option value="KNA">Saint Kitts and Nevis</option>
        <option value="LCA">Saint Lucia</option>
        <option value="SPM">Saint Pierre and Miquelon</option>
        <option value="VCT">Saint Vincent and the Grenadines</option>
        <option value="WSM">Samoa</option>
        <option value="SMR">San Marino</option>
        <option value="STP">Sao Tome and Principe</option>
        <option value="SAU">Saudi Arabia</option>
        <option value="SEN">Senegal</option>
        <option value="SRB">Serbia</option>
        <option value="SCG">Serbia and Montenegro</option>
        <option value="SYC">Seychelles</option>
        <option value="SLE">Sierra Leone</option>
        <option value="SGP">Singapore</option>
        <option value="SVK">Slovakia</option>
        <option value="SVN">Slovenia</option>
        <option value="SLB">Solomon Islands</option>
        <option value="SOM">Somalia</option>
        <option value="ZAF">South Africa</option>
        <option value="SGS">South Georgia and the South Sandwich Islands</option>
        <option value="ESP">Spain</option>
        <option value="LKA">Sri Lanka</option>
        <option value="SDN">Sudan</option>
        <option value="SUR">Suriname</option>
        <option value="SJM">Svalbard and Jan Mayen Islands</option>
        <option value="SWZ">Swaziland</option>
        <option value="SWE">Sweden</option>
        <option value="CHE">Switzerland</option>
        <option value="SYR">Syrian Arab Republic</option>
        <option value="TWN">Taiwan</option>
        <option value="TJK">Tajikistan</option>
        <option value="TZA">Tanzania, United Republic of</option>
        <option value="THA">Thailand</option>
        <option value="TLS">Timor-Leste</option>
        <option value="TGO">Togo</option>
        <option value="TKL">Tokelau</option>
        <option value="TON">Tonga</option>
        <option value="TTO">Trinidad and Tobago</option>
        <option value="TUN">Tunisia</option>
        <option value="TUR">Turkey</option>
        <option value="TKM">Turkmenistan</option>
        <option value="TCA">Turks and Caicos Islands</option>
        <option value="TUV">Tuvalu</option>
        <option value="UGA">Uganda</option>
        <option value="UKR">Ukraine</option>
        <option value="ARE">United Arab Emirates</option>
        <option value="GBR">United Kingdom</option>
        <option value="USA">United States</option>
        <option value="UMI">United States Minor Outlying Islands</option>
        <option value="URY">Uruguay</option>
        <option value="UZB">Uzbekistan</option>
        <option value="VUT">Vanuatu</option>
        <option value="VAT">Vatican City State (Holy See)</option>
        <option value="VEN">Venezuela</option>
        <option value="VNM">Viet Nam</option>
        <option value="VGB">Virgin Islands, British</option>
        <option value="VIR">Virgin Islands, U.S.</option>
        <option value="WLF">Wallis and Futuna Islands</option>
        <option value="ESH">Western Sahara</option>
        <option value="YEM">Yemen</option>
        <option value="YUG">Yugoslavia</option>
        <option value="ZAR">Zaire</option>
        <option value="ZMB">Zambia</option>
        <option value="ZWE">Zimbabwe</option>
    </select>

<br>

<input type=text name="sac_email"><br>
<input type=text name="s_phone"><br>


</div>

</div>

</td></tr>

<!-- <br><br><input type="button" value="Paypal"> Or <input type="button" value="Visa Card"> -->
<tr rowspan=3><td colspan=2>
<br><br><b>Payment Method:</b>
<br><input type="radio" name="pay_method" value="0" checked>Paypal <input type="radio" name="pay_method" value="1"> Card
<input type="radio" name="pay_method" value="19"> Other
<!--<br><br><b>Transfer System:</b>
<br><input type="radio" name="shippingWay" value="0" checked>Courier <input type="radio" name="shippingWay" value="1">Leather Own Service-->
</td></tr>
<tr rowspan=5><td colspan=2>
<p>
Please ensure everything here is correct, after proceeding forward, your cart will be transferred to an order and no further items will be able to be placed on the order.

To pay via direct deposit, please call 1300 113 680 or email info@leatherbag.com.au to place your order.
</p>
</td></tr>
	<tr><td>


		<?php

		if($valid==9)
		{
		echo "<input type=hidden value=".$total_price." name=total_price>";	
		echo "<input type=hidden value=".$postage_price." name=postage_price>";
				
		echo "<input type=hidden value=".$final_bill." name=final_bill>"; 			      
		echo "<input type=submit name=subBtn value=Submit />";
		}
		else
		 {
		 echo "Calculated price seems inconsistent";
		 
		 } 					
		 ?>


</td><td></td></tr></table>

</form>
</div><!--p end-->

</div><!-- rightcontent2 end --> 
     
</div><!-- maincontent end -->  
	
<?php include('footer.php'); ?>

</div><!-- whole end -->
	
</body>
</html>