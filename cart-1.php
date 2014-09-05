<?php error_reporting(E_ERROR);	session_start(); include('admin/lib/connect.php');

if (isset($_GET['action'])) { //used for delete an item from cart
    if ($_GET['action'] == 'del') { //remove cart item
        $index_to_del = $_GET['cart_id'];

        $_SESSION['CartItemCount'] = $_SESSION['CartItemCount'] - $_SESSION["count"][$index_to_del]; //reduce it
        unset($_SESSION["cart"][$index_to_del]);
        unset($_SESSION["cartindex"][$index_to_del]);
        unset($_SESSION["count"][$index_to_del]);
        unset($_SESSION["postage_cost"][$index_to_del]);
        unset($_SESSION["price"][$index_to_del]);
        unset($_SESSION["product_name"][$index_to_del]);
        unset($_SESSION["picture"][$index_to_del]);
    }
}

if (isset($_POST['update_qty']) && isset($_POST['qty'])) { //when click to update quantity
    if ($_POST['qty'] >= 0) {
        $index_to_update = $_POST['item_index'];
        $quantity = $_SESSION["count"][$index_to_update];
        $_SESSION["count"][$index_to_update] = $_POST['qty'];
        $_SESSION['CartItemCount'] = $_SESSION['CartItemCount'] - $quantity + $_POST['qty']; //reduce it and add current
    }  // cart item need to be again counted
}

//set cart item
if (isset($_POST['id'])) { // come from different page
    $id = $_POST['id'];

    if (isset($_POST['qty'])) { //adding quantity
        if ($_POST['qty'] > 0) {
            
        } else {
            echo "quantity must greater than 0";
            echo "<meta http-equiv='refresh' content='0; url=product.php?id=" . $id . "'>";
            exit();
        }
        /*
          if(!isset($_SESSION['CartItemCount']))
          {
          $_SESSION['CartItemCount']=$_POST['quantity'];   //first time add total item in cart
          }
          else
          {
          $_SESSION['CartItemCount']=$_SESSION['CartItemCount']+$_POST['quantity'];
          }
         */
    } else {
        echo "Please give valid quantity";
        //header("Location:product.php?id=".$id);

        echo "<meta http-equiv='refresh' content='0; url=product.php?id=" . $id . "'>";
        exit();
    }


    if (!isset($_SESSION["cart"])) { //define all required sessions
        $_SESSION['CartItemCount'] = 0;
        $_SESSION["cartindex"] = array(); // index array start from 0
        $_SESSION["cart"] = array(); // id array
        $_SESSION["product_name"] = array(); // product name array
        $_SESSION["count"] = array(); // quantity
        $_SESSION["price"] = array(); //price array  	    
        $_SESSION["postage_cost"] = array();
        $_SESSION["picture"] = array();  // picture location array
    }
    //boolean $exist_item;
    $exist_item = FALSE;
    $index = count($_SESSION["cart"]); // total existing items 
    //check whether already in cart
    for ($j = 0; $j < $index; $j++) { //check whether same item is within the list 
        if ($_SESSION["cart"][$j] == $id) {
            if (isset($_SESSION["count"][$j]))
                $_SESSION["count"][$j] = $_SESSION["count"][$j] + $_POST['qty'];
            else
                $_SESSION["count"][$j] = $_POST['qty'];

            $exist_item = TRUE;
            $j = $index; // break loop
        }
    }

    if ($exist_item == FALSE) {// new product in cart
        if (isset($_SESSION["cartindex"]))
            $_SESSION["cartindex"][] = end($_SESSION["cartindex"]) + 1; // cartindex is always unique last cartindex + 1
        else {  // incase first time
            $_SESSION["cartindex"][] = 0;
        }
        $_SESSION["cart"][] = $id;
        $_SESSION["product_name"][] = $_POST['product_name'];
        $_SESSION["count"][] = $_POST['qty'];
        $_SESSION["price"][] = $_POST['price'];
        $_SESSION["postage_cost"][] = $_POST['postage_cost'];
        $_SESSION["picture"][] = $_POST['picture'];
    }
    $_SESSION['CartItemCount'] = $_SESSION['CartItemCount'] + $_POST['qty'];
}
$postage_price = 0;
?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">  
        <title>Cart | Genius Technology Ltd.</title>
		<?php include('somelinks.php'); ?>	
        <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
        <script type="text/JavaScript" language='Javascript'> 
            function formsubmit()
            {
				document.forms["postage_add"].submit();
            }
        </script>
    </head>

    <body>

    <div id="whole">

		<?php include('upper.php'); ?>
		<?php include('slider.php'); ?>

        <div id="maincontent"><!-- maincontent start -->   

		<?php include('leftlist.php'); ?>
            <div id="rightcontent2">
                <div class="leftcat1list1">Product on Cart
                </div>



<?php
$total_item = 0;
$total_price = 0;
if (isset($_SESSION["cartindex"])) {
    $total_item = count($_SESSION["cartindex"]);
}


$number_of_objects = 0;

$number = 0;
echo "<div class='tableincart' style='font-size:12px'><table width=65% align=left>";
echo "<tr border=1><td colspan=2></td><td>Name</td><td>Price</td><td>Quantity</td><td>Item total</td><td colspan=2>Action</td></tr>";
$express_postage_price = 0;

if ($total_item > 0) {
    for ($i = 0; $i <= end($_SESSION["cartindex"]); $i++) { // earlier it was $i=0, so the omitted first value!
        if (isset($_SESSION["cart"][$i])) {   // work with only valid values
            $number++;
            $item_price = 0;
            $item_price = $_SESSION["price"][$i] * $_SESSION["count"][$i];
            $item_postagecost = $_SESSION["postage_cost"][$i] * $_SESSION["count"][$i];

            $number_of_objects = $_SESSION["count"][$i] + $number_of_objects;
            echo "<tr><td>" . $number . ".</td>
			<td><img style='width:50px;' src=admin/" . $_SESSION['picture'][$i] . "></td>
			<td><a href=product.php?id=" . $_SESSION["cart"][$i] . ">" . $_SESSION["product_name"][$i] . "</a></td>
			<td> ৳" . $_SESSION["price"][$i] . "</td>
			<td>
			<form action=cart.php method=post>
			<input name=qty type=text title=Quantity value='" . $_SESSION["count"][$i] . "' size=2></td><td>৳"
            . $item_price . "
			<input type=hidden name=item_index value=" . $i . " size=1> </td><td>
			<input type=submit name=update_qty value=Update />
			</form></td>";

            echo "<td><a href=cart.php?cart_id=" . $i . "&action=del>Remove</a></td></tr>";
            $total_price = $total_price + $item_price;
            $postage_price = $postage_price + $item_postagecost;
        }
    }
    $express_postage_price = $postage_price;
    echo "<tr><td></td><td colspan=5 align=right style='border-bottom: solid 1px black;'></td><td colspan=2></td></tr>";

    //    echo "<tr><td colspan=2><strong>Total</td><td colspan=2></td><td>".$_SESSION['CartItemCount']."</td><td>: BDT ৳".$total_price."</strong></td><td></td></tr>";
    echo "<tr><td></td><td >Total</td><td colspan=2></td><td>" . $number_of_objects . "</td><td>BDT$ <B>" . $total_price . "</B></td><td colspan=2></td></tr>";
} else {
    echo "<tr><td colspan=5>There is no item in shopping cart</td></tr>";
}

echo "</table></div>";

if (isset($_POST['postage_method'])) {
    if ($_POST['postage_method'] == 1) {
        //use earlier posttage cost
    } else {// replace postage cost
        $postage_price = 0;

        //postage 	price come from prev calculation
    }
} else {

    $postage_price = 0;
}

$final_bill = $total_price + $postage_price;

echo "<table width=35% align=right cellspacing=7 bgcolor=#ECEFF8 style='font-size:13px'>
<tr><th colspan=2>SUMMARY</th></tr>
<tr><td colspan=2>" . $number . " Different Product </td></tr>
<tr><td>Sub Total (inc GST)</td><td align=right>BDT $" . $total_price . "</td></tr>
<tr><td>Postage (inc GST)</td><td align=right>BDT $" . $postage_price . "</td></tr>
<tr><td colspan=2 align=right style='border-bottom: solid 1px grey;'></td></tr>
<tr><td>Total (inc GST)</td><td align=right>BDT $" . $final_bill . "</td></tr>
<tr>
<td>";


echo "<form action=main_login.php method=post name=nextpage> 		<!-- checkout.php -->

            <input type='hidden' name='total_price' value='" . $total_price . "'>
			<input type='hidden' name='postage_price' value='" . $postage_price . "'>
			<input type='hidden' name='final_bill' value='" . $final_bill . "'>
		<input type='submit' name='checkout_delivery' value='Proceed Checkout' />
		
		</td><td>";

if (isset($_POST['postage_method'])) {

    $pm = $_POST['postage_method'];
} else {
    $pm = 0;
}
echo "<input type='hidden' name='pmethod' value='" . $pm . "'>";

echo "<a href=product_list.php>Continue Shopping</a></form>";


echo "</td></tr>
</table>";
?>



                    <div id="delivery_details">

                        <table width=100% align=left id=tbl_delivery>
                            <tr><td colspan=3>&nbsp;</td></tr>
                            <tr rowspan=2 bgcolor=#D7D7D7>
                                <td width="170">
                                    <strong>Delivery Method</strong>
                                    <noscript>
                                    <br /><input type="submit" name="submit_form" value="Save" />
                                    </noscript>
                                </td>

                                <td>
                                    <form action=cart.php method=post name=postage_add>
                                        <input type="radio" name="postage_method" onclick="formsubmit()" value="0" 
                    <?php
                    if ((!isset($_POST['postage_method'])) OR $_POST['postage_method'] == 0) {
                        echo 'checked="checked"';
                    }
                    ?>
                                               >Ecom Fast Post - FREE</input>
                                        Free
                                </td>

                                <td>
                                    <input type="radio" name="postage_method" onclick="formsubmit()" value="1" 
                    <?php
                    if ((isset($_POST['postage_method'])) AND $_POST['postage_method'] > 0) {
                        echo ' checked="checked"';
                    }
                    ?>
                                           >Express Post - Charges Apply BDT ৳</input>
                    <?php echo $express_postage_price; ?>
                                    </form>
                                </td>

                            </tr>
                            <tr class="postage_time">
                                <td>
                                    NY
                                </td>
                                <td>
                                    1-2 business days
                                </td>
                                <td>
                                    1-2 business days
                                </td>
                            </tr>

                        </table>

                    </div><!--Delivery end-->
                </div><!-- rightcontent2 end --> 
            </div><!-- maincontent end -->  
	
<?php include('footer.php'); ?>

</div><!-- whole end -->
	
</body>
</html>