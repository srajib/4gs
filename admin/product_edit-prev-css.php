<?php include('lib/connect.php');?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
<title>Edit Product | Ecom</title>    
<link rel="stylesheet" type="text/css" href="../css/ecomstyle.css" />
<link rel="stylesheet" href="../css/screen.css" type="text/css" media="screen" />
<link rel="stylesheet" href="../css/lightbox.css" type="text/css" media="screen" />
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<?php
$ckeditor->basePath = '/ckeditor/';
$ckeditor->config['filebrowserBrowseUrl'] = '/ckfinder/ckfinder.html';
$ckeditor->config['filebrowserImageBrowseUrl'] = '/ckfinder/ckfinder.html?type=Images';
$ckeditor->config['filebrowserFlashBrowseUrl'] = '/ckfinder/ckfinder.html?type=Flash';
$ckeditor->config['filebrowserUploadUrl'] = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
$ckeditor->config['filebrowserImageUploadUrl'] = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
$ckeditor->config['filebrowserFlashUploadUrl'] = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
?>

<script>
function showcat(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("catdiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","catSubajax.php?q="+str,true);
xmlhttp.send();
}
</script>


<meta charset="utf-8">
<title>Product List | Leather Bags</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="./css/bootstrap.css" rel="stylesheet">
<link href="./css/bootstrap-responsive.css" rel="stylesheet">
<link href="./css/bootstrap-overrides.css" rel="stylesheet">
<link href="./css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">
<link href="./css/slate.css" rel="stylesheet">
<link href="./css/slate-responsive.css" rel="stylesheet">
<script type="text/javascript">
$('input#my_id').change(function(){
    var files = $(this)[0].files;
    if(files.length > 2){
        alert("you can select max 2 files.");
    }else{
        alert("correct, you have selected less than 2 files");
    }
});
</script>

<script type="text/javascript">
function ChooseSubSelect(data)
{
   
   document.getElementById("subcatagory").value = data;
}
</script>



<script>
function showcat(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("catdiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","catSubajax.php?q="+str,true);
xmlhttp.send();
document.getElementById("subcatagory").value =0;
}
</script>

<script src="./js/jquery-1.7.2.min.js"></script>
<script src="./js/jquery-ui-1.8.21.custom.min.js"></script>
<script src="./js/jquery.ui.touch-punch.min.js"></script>
<script src="./js/bootstrap.js"></script>
<script src="./js/plugins/validate/jquery.validate.js"></script>
<script src="./js/Slate.js"></script>
<script src="./js/demos/demo.validate.js"></script>
<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<?php
// Make sure you are using a correct path here.
//include_once 'ckeditor/ckeditor.php';
//$ckeditor = new CKEditor();
$ckeditor->basePath = '/ckeditor/';
$ckeditor->config['filebrowserBrowseUrl'] = '/ckfinder/ckfinder.html';
$ckeditor->config['filebrowserImageBrowseUrl'] = '/ckfinder/ckfinder.html?type=Images';
$ckeditor->config['filebrowserFlashBrowseUrl'] = '/ckfinder/ckfinder.html?type=Flash';
$ckeditor->config['filebrowserUploadUrl'] = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
$ckeditor->config['filebrowserImageUploadUrl'] = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
$ckeditor->config['filebrowserFlashUploadUrl'] = '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
//$ckeditor->editor('CKEditor1');
?>


</head>

<body>

<div id="whole">
<?php include('header.php'); ?>
<?php include('menu.php'); ?>
<div id="content">
<!--<div id="middle" style="width:980px"> -->

<div id="contentarea">
<div id="productsarea" style="float:left; width:auto; height:auto;">
<div id="productphotos" style="float:left; width:400px; height:335px; background-color:#F7F7F7; border:1px solid #EEE">
<div class="imageRow" style="margin-top:0px; width:400px">
<div class="set">

<!-- get picture -->

<?php 

if(isset($_GET['id']))
{
	$id = $_GET['id'];
}
else
{
	$id = $_POST['id'];
}

if(isset($_GET['action']))
{
  

 
 if($_GET['action']=='del_pic')
   {
        $sqlPicDel=mysql_query("DELETE FROM picture where location='".$_GET['pic_location']."'"); 
        unlink($_GET['pic_location']);
   }
 if($_GET['action']=='update_pic')
   {
    
	// file type same holey database ay update kora proyojon nai
	//$temp = explode(".", $_FILES["file"]["name"]);
	
	
	// need to upload file with same file name
	
	
	// Upload new pic replace name
   
   }
   
   
   
}


if(isset($_POST['delete']))
{
	
    $uid=$_POST['unique_id'];
	$del_pro_sql=mysql_query("DELETE FROM product where id=$id");
    $sqlPicDel=mysql_query("DELETE FROM picture where unique_id=$uid"); 
    
	if($_POST['counter']>0)
	{
        for($c=1;$c<=$_POST['counter'];$c++)
     	{
           $loc='pic_loc_'.$c;
            echo $_POST[$loc];
 	    	if(isset($_POST[$loc]))
			 {
			   unlink($_POST[$loc]);
			 
			 }	
        }  
	
	}  
	//redirecting to the display page (index.php in our case)
	header("Location:product_list.php");


}

if(isset($_POST['update']))
{	
		$product_name=$_POST['product_name'];	
		$qty= $_POST['quantity'];
		$uid= $_POST['unique_id'];
		if(empty($product_name))
		{
			if(empty($product_name)){echo "<font color='red'>Product Name field is empty!</font><br/>";}				
		}	
		else
		{	
	    if(isset($_POST['cat2']))
		{
		$cat2=$_POST['cat2'];
		}
		else
		{
		$cat2 =$_POST['subcatagory'];
		}
		$result=mysql_query("UPDATE product	SET product_name='$product_name', quantity=".$qty.", cat1_id=".$_POST['cat1']."
		,cat2_id=".$cat2.",price=".$_POST['price'].",postage_cost=".$_POST['postage_cost'].", weight='".$_POST['weight']."', size='".$_POST['size']."', warranty='".$_POST['warranty']."',product_details='".$_POST['descri']."'	   
	   WHERE id=$id");				
	
		
		

		
		if($result)
		{
			$message = "<b><font face='Arial, Helvetica, sans-serif' size='2' color='#060'> Product has been updated. :)</font></b>";
		}
		else
		{
			$message = "<b><font face='Arial, Helvetica, sans-serif' size='2' color='#F00'> Product has not updated.</font></b>";
		}
		echo '<center>'.$message.'</center>';
		
	//	header("Location: product_list.php");
	}


     
	 //total counter 4 means everything need to be  update
	
   
	//------------------------PICTURE---------------------------------------------------------------------------------
	
	if($_POST["counter"]>0) //atleast one picture require to update pic
	{
		foreach ($_FILES['picU']['tmp_name'] as $k => $val )
		{
			
			$filename=$_FILES['picU']['name'][$k];
		
			//$id_last=$id_last+1;
			$target = "product/";

			 $p=$k+1;
			 
			$target1=$_POST["pic_loc_".$p];
			//echo $target1;
		   // echo $target1; 
		//	$target.$id_last.".".$extension;
			 if($_FILES['picU']['size'][$k] != 0 || !empty($_FILES['picU']['tmp_name'][$k])) 
			  {
				  
				 // 
				$pieces = explode(".", $target1);
				$front_side=$pieces[0];
				$old_ext= end($pieces);
				
				$new_ext = pathinfo($filename, PATHINFO_EXTENSION);
				if($old_ext!=$new_ext) // when file come with new extension
				{
				$new_target_name=$front_side.".".$new_ext;
				move_uploaded_file($_FILES['picU']['tmp_name'][$k],$new_target_name);
				unlink($target1); //delete past pic of different extension
				// database need to be updated
				$resultpic=mysql_query("UPDATE picture SET location='".$new_target_name."' WHERE location='$target1'");				
				
				}
				else
				 {
				 
				 move_uploaded_file($_FILES['picU']['tmp_name'][$k],$target1);		 // up the file
				 } 			

				//   $sql11 = mysql_query("INSERT INTO `picture`(unique_id,location) VALUES('$uid','$target1')"); 		  
			  }
		}
	
	}


	//-------------uploading and saving new pictures
	if($_POST["counter"]<4) //slot need to empty for insert
	{
		$sql_last=mysql_query("SELECT * FROM picture order by id DESC LIMIT 0,1");

        while($rowlast = mysql_fetch_array($sql_last))
			{
			
		     $id_last= $rowlast['id']; 
		
			}
		
		foreach ($_FILES['pic']['tmp_name'] as $key => $val )
		{
			
			$filename=$_FILES['pic']['name'][$key];
		
			$id_last=$id_last+1;
			$target = "product/";

			
			$extension = pathinfo($filename, PATHINFO_EXTENSION);
			

			$target1=$target.$id_last.".".$extension;
			 if($_FILES['pic']['size'][$key] != 0 || !empty($_FILES['pic']['tmp_name'][$key])) 
			  {
				  move_uploaded_file($_FILES['pic']['tmp_name'][$key],$target1);		 
					$sql11 = mysql_query("INSERT INTO `picture`(unique_id,location) VALUES('$uid','$target1')"); 		  
			  }
		}
	}

 
 
 }
//--------Make Product Live
if(isset($_GET['pval']))
{
		if ($_GET['pval']==0)
		{
		$result=mysql_query("UPDATE product	SET status=1 WHERE id=$id");
		}

		elseif ($_GET['pval']==1)
		{
		$result=mysql_query("UPDATE product	SET status=0 WHERE id=$id");
		}

}
elseif(isset($_GET['fval']))//make product featured
{
       if ($_GET['fval']==0)
		
       {
		$result=mysql_query("UPDATE product	SET feature=1 WHERE id=$id");
		}

		elseif ($_GET['fval']==1)
		{
		$result=mysql_query("UPDATE product	SET feature=0 WHERE id=$id");
		}


}

$sql_pic = mysql_query("SELECT picture.location, picture.unique_id  
FROM product
INNER JOIN picture ON product.id=".$id." AND product.unique_id=picture.unique_id");
// ,cat1.cat1_id, cat1.cat1_name LEFT JOIN cat1 ON product.cat1_id=cat1.cat1_id
$first_time=0;
$count=0;
	?>
	<form name="Update" action="product_edit.php" method="POST"  enctype="multipart/form-data">
	
	<?php
	while($pic_loc=mysql_fetch_array($sql_pic)) 
	{ 
		$count=$count+1;
		if($first_time==0)
		{
		$main_picture=$pic_loc['location'];
        $unique_id=$pic_loc['unique_id'];
		
		echo '<input type=hidden name=id value="'.$id.'">'; 
		} 
     ?>
	   
		<div class="single" style="float:left;width=200">
			<a href="<?php echo $pic_loc['location']; ?>" rel="lightbox[plants]" title="Click on the left or right side of the image to move previous or forward."><img src="<?php echo $pic_loc['location']; ?>" style="width:60px; height:60px; " title="image <?php echo $count; ?> 0f 4 thumb" /></a>
			<input type="file" name="picU[]" id="my_id" multiple="true"/><!--<a href=product_edit.php?id=<?php //echo $id.'&action=update_pic&pic_location='.$pic_loc['location'];?>>Update pic</a>-->
			<a href=product_edit.php?id=<?php echo $id.'&action=del_pic&pic_location='.$pic_loc['location'];?>>Delete pic</a>
		    <?php echo '<input type="hidden" name="pic_loc_'.$count. '" value="'.$pic_loc['location'].'"/>'; ?>
		</div>
	<?php 
	}//while end 	            
	echo '<input type=hidden name=counter value='.$count.'>';

	for($i=$count;$i<4;$i++)
    {	
	    
		echo '<div class="single"><input type="file" name="pic[]" id="my_id" multiple="true"/></div>';//<a href=>Add pic</a>';
	}
?>
 
  


</div>
</div>	
</div>

<div id="productdescription"> <!--style="float:left; margin-left:15px; width:350px; height:400px; color:#555; background-color:#FAFAFA; border:1px solid #EEE" -->

<table width="100%" class="itemdetails" style="float:left; padding:12px">

<?php 
		
$sql_product = mysql_query("SELECT product.id, product.product_name, product.product_details,product.quantity,product.price,product.postage_cost, product.weight, product.size, product.warranty, product.status, product.feature, product.unique_id,product.cat1_id,product.cat2_id  
FROM product
WHERE product.id='$id'");


while($desc=mysql_fetch_array($sql_product))
{ 
?> 

<tr><td colspan="3"><div style="margin-top:-5px; margin-bottom:5px; color:#C26D11; font-size:18px;">
<input type="text" name="product_name" value="<?php echo $desc['product_name'];?>">

<br>
</div></td></tr>

        <tr><td>Live</td>
		<td>:</td>
		<td>
		<?php 
			if($desc['status']==0)
			echo '<a href=product_edit.php?id='.$id.'&pval=0><img src="img/red.jpg" style="width:16px; height:16px"/></a>';
		 										
			else 
			echo '<a href=product_edit.php?id='.$id.'&pval=1><img src="img/green.jpg" style="width:16px; height:16px"/></a>';
				?>
		</td></tr>
		
<tr><td>Item ID (Shown in Order) </td><td> : </td><td>
<?php echo $id;?>
</td></tr>

<tr><td>Feature</td>
		<td>:</td>
		<td>
		<?php 
			if($desc['feature']==0)
			echo '<a href=product_edit.php?id='.$id.'&fval=0><img src="img/red.jpg" style="width:10px; height:10px"/></a>';
		 										
			else 
			echo '<a href=product_edit.php?id='.$id.'&fval=1><img src="img/green.jpg" style="width:10px; height:10px"/></a>';
				?>
		</td></tr>


<tr><td>Unique ID</td><td> : </td><td><?php echo $desc['unique_id']; ?></td></tr>
<input type=hidden name=unique_id value=<?php echo $desc['unique_id']; ?>

<tr><td>Price</td><td> : </td><td>$ <input type="text" style="width:45px" name="price" value="<?php echo $desc['price'];?>"> USD</td></tr>
<tr><td>Quantity</td><td> : </td><td><input type="text" style="width:45px" value="<?php echo $desc['quantity'];?>" name="quantity"></td></tr>
<tr><td>
<?php
 $selected_cat=$desc['cat1_id'];
  if(isset($_POST['cat2']))
  {
    $selected_subcat=$_POST['cat2'];
  }
  else
  { 
     $selected_subcat=$desc['cat2_id'];
  }

  ?>

<input type="hidden" name="id" value="<?php echo $id;?>">

<!--
<input type="hidden" name="quantity" value="<?php echo $desc['quantity'];?>">-->
<input type="hidden" name="picture" value="<?php echo $main_picture;?>">
</td><td></td><td></td></tr>
<?php $xeditor='<tr>
	<td colspan=3>
		<textarea style=width:150; height:100 name=descri class=ckeditor cols=80 id=editor1 rows=10>'.$desc['product_details'].'</textarea>		
	</td></tr>'; ?>
<tr><td>Weight</td><td> : </td><td>
<input type="text" name="weight" style="width:45px" value="<?php echo $desc['weight'];?>"></td></tr>
<tr><td>Size</td><td> : </td><td>
<input type="text" name="size" style="width:45px" value="<?php echo $desc['size'];?>">
</td></tr>
<tr><td>Warranty</td><td> : </td><td>
<input type="text" name="warranty" style="width:45px" value="<?php echo $desc['warranty'];?>">
</td></tr>
<tr><td>Postage Cost</td><td> : </td><td>$ <input type="text" style="width:45px" name="postage_cost" value="<?php echo $desc['postage_cost'];?>"> USD</td></tr>
	
	
	
	
<?php 
}
$cat_selectx='<div class="controls">
	<select name="cat1" onchange="showcat(this.value)">'; 
		   $sqlCat = mysql_query("SELECT * FROM cat1 order by cat1_id ASC");
			while($rowCat = mysql_fetch_assoc($sqlCat))
			{
			$selected_str='';
			if($selected_cat==$rowCat['cat1_id'])
			{
			$selected_str=' selected';
			}
			
			$cat_selectx=$cat_selectx.'<option value='. $rowCat['cat1_id'].$selected_str.'>'.$rowCat['cat1_name'].'</option>';
		
			}
	        $cat_selectx=$cat_selectx.'</select></div>';

echo'<tr><td>Catagory</td><td> : </td><td>'.$cat_selectx.'</td></tr>';
 
echo'<tr><td>Sub Catagory</td><td> : </td><td>';


 echo '<div id="catdiv"><select name="cat2">'; 

//$sqlsubcatagory = mysql_query("SELECT * FROM cat2 WHERE cat1_id=".$selected_cat);

$sqlsubcatagory = mysql_query("SELECT * FROM cat2 WHERE cat1_id=$selected_cat order by cat2_id ASC");
echo '<option value=0 selected>Select Sub catagory</option>';

//undefine sub cat also come from system
while($rowsubcat = mysql_fetch_array($sqlsubcatagory))
{

       
            $selected_substr='';
			if($selected_subcat==$rowsubcat['cat2_id'])
			{
			$selected_substr=' selected';
			}

	echo '<option value='.$rowsubcat['cat2_id'].$selected_substr.'>'.$rowsubcat['cat2_name'].'</option>';
}
echo '</select></div></td></tr></table>';
echo '<input type=hidden name="subcatagory" id="subcatagory">';


?>
		


</div>
</div>
</div>
	<div id="txteditor" style="bottom: 0;left:0">
	<?php echo '<table width=60% style="float:left;">'.$xeditor.'</table>'; ?>
       <div id="sub_form" style="float:left">
       <input type="submit" name="update" value="Update">
	       <input type="submit" name="delete" value="delete">
  	   </div>
	 
	</div>
    </form>
<!--</div> -->

<?php //include('../footer.php'); ?>

</div>

<script src="../js/jquery-1.7.2.min.js"></script>
<script src="../js/jquery-ui-1.8.18.custom.min.js"></script>
<script src="../js/jquery.smooth-scroll.min.js"></script>
<script src="../js/lightbox.js"></script>

<script>
  jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-2196019-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>
</html>