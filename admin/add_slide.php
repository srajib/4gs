<?php error_reporting(E_ERROR);
session_start(); 
if(!isset($_SESSION['admin_id']))
{
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
exit();
	}
include('lib/connect.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>New Slider | Genius</title>
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
xmlhttp.open("GET","catajax.php?q="+str,true);
xmlhttp.send();
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
  	
<?php include('header.php'); ?>
<?php include('menu.php'); ?>

<div id="content">		
	<div class="container">	
	
<?php extract($_POST);
$uid = time();
$con = "";
if(isset($_POST['submit']))
{
	$dt = date("YmdHis");
	// $post_cost=$_POST['post_cost'];
               
	// $dis_price=0.0;
//	$sql1 = mysql_query("INSERT INTO slider(id, slider_title) VALUES('$id','$name')");	

     
        $sql_last=mysql_query("SELECT * FROM slider order by id DESC LIMIT 0,1");

        while($rowlast = mysql_fetch_array($sql_last))
			{
			
		     $id_last= $rowlast['id']; 
		//     echo $id_last;
			}

	
	//uploading and saving pictures
	foreach ($_FILES['pic']['tmp_name'] as $key => $val )
	{
		
		$filename=$_FILES['pic']['name'][$key];
		$id_last=$id_last+1;
		$target = "slider/"; // $target = "../images/slider/";
		//$extension=end(explode(".",$filename));
		//echo $extension."<br>";
		$extension = pathinfo($filename, PATHINFO_EXTENSION);
         //echo $exten;
		//@$target1 = $target.basename($_FILES['pic']['name'][$key]);
		 $target1=$target.$id_last.".".$extension;
		 if(($_FILES['pic']['size'][$key] > 0 && $_FILES['pic']['size'][$key]<53000000) && !empty($_FILES['pic']['tmp_name'][$key])) 
		  {
              if ($_FILES['pic']['error'][$key] > 0)
					{
					$con .= $filename." cant uploaded! <br>Return Code: " . $_FILES['pic']['error'][$key]."<br>";
					} 			 
			 else
			      { 
			         move_uploaded_file($_FILES['pic']['tmp_name'][$key],$target1);		 
		             $sql1 = mysql_query("INSERT INTO slider (id, slider_title, slider_location) VALUES ('$id','$name','$target1')"); 	
                  }			  
		  }
		
	}
	
	if($sql1)
	{
		$con .= "<b><font face='Arial, Helvetica, sans-serif' size='2' color='#060'> Slide saved successfully. :)</font></b>";
	}
	else
	{
		$con .= "<b><font face='Arial, Helvetica, sans-serif' size='2' color='#F00'> Slide could not be saved. :(</font></b>";
	}
}
else
{
	$con = "";
}


?> 			

<div class="row">			
<div class="span8">	      		
<div id="horizontal" class="widget widget-form">	      			
<div class="widget-header">	      				
<h3>
<i class="icon-pencil"></i>
Add New Slide	      					
</h3>	
</div> <!-- /widget-header -->

<div class="widget-content">
<?php echo $con; ?>	
<form class="form-horizontal" enctype="multipart/form-data" action="add_slide.php" method="post">
<fieldset>


<div class="control-group">
<label class="control-label" for="input01">Slide Details</label>
<div class="controls">
	<input type="text" class="input-large" name="name" id="input01"/>
	<!-- <textarea style="width:150; height:100" name="name" class="ckeditor" cols="80" id="editor1" rows="10"></textarea> -->
</div>
</div>
                                                        
<div class="control-group">
<label class="control-label" for="input01">Slider Pictures</label>
<div class="controls">
	<input type="file" name="pic[]" id="my_id" multiple="true"/>
	<br><input type="file" name="pic[]" id="my_id" multiple="true"/>
	<br><input type="file" name="pic[]" id="my_id" multiple="true"/>
	<br><input type="file" name="pic[]" id="my_id" multiple="true"/>
</div>
</div>                              

<div class="form-actions">
<button type="submit" name="submit" class="btn btn-primary btn-large">Add Slide</button>
<button type="reset" class="btn btn-large">Cancel</button>
</div>

</fieldset>
</form>	

</div> <!-- /widget-content -->						
</div>	
</div>                				

</div> <!-- /.container -->
</div> <!-- /#content -->

<?php include('footer.php'); ?>

</body>
</html>