<?php
session_start();
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>General Settings | ADMIN 2.0</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">

<!-- Styles -->
<link href="./css/bootstrap.css" rel="stylesheet">
<link href="./css/bootstrap-responsive.css" rel="stylesheet">
<link href="./css/bootstrap-overrides.css" rel="stylesheet">

<link href="./css/ui-lightness/jquery-ui-1.8.21.custom.css" rel="stylesheet">

<link href="./css/slate.css" rel="stylesheet">
<link href="./css/slate-responsive.css" rel="stylesheet">
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script type="text/javascript">
function validation(thisform)
{
	with(thisform)
	{
		if(validateFileExtension(file, "valid_msg", "pdf/office/image files are only allowed!",
		new Array("jpg","pdf","jpeg","gif","png","doc","docx","xls","xlsx","ppt","txt")) == false){
			return false;
		}
		if(validateFileSize(file,1048576, "valid_msg", "Document size should be less than 1MB !")==false){
			return false;
		}
	}
}
</script>			

<!-- Javascript -->
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

<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
</head>

<body>
 	
  	
<div id="header">
	
	<div class="container">			
		
		<img src="img/logo.png" height="70" width="400" style="position:relative; top:20px">			
		
		<div id="info">				
			
			<a href="javascript:;" id="info-trigger">
				<i class="icon-cog"></i>
			</a>
			
			<div id="info-menu">
				
				<div class="info-details">
				
					<h4>Welcome back, <font color="#CC6600"><?php echo $_SESSION['name']; ?></font></h4>
					
					<p>
						
						<br>
						Want to logout, click <a href="logout.php">here.</a>
					</p>
					
				</div> <!-- /.info-details -->
				
				<!-- /.info-avatar -->
				
			</div> <!-- /#info-menu -->
			
		</div> <!-- /#info -->
		
	</div> <!-- /.container -->

</div> <!-- /#header -->


<?php include('menu.php'); ?>



<div id="content">
		
	<div class="container">
		
<div id="page-title" class="clearfix">
			
			<ul class="breadcrumb">
			  <li>
			    <a href="./">Home</a> <span class="divider">/</span>
			  </li>
			  <li class="active">General Settings</li>
			</ul>
			
		</div> <!-- /.page-title -->
<?php
include('lib/connect.php');
extract($_POST);

if(isset($_POST['slider']))
{
	
	
	 if($_FILES['pic']['size'] != 0 || !empty($_FILES['pic']['tmp_name'])) 
	  {
		  @$target = "slider/";
		  @$target1 = $target.basename($_FILES['pic']['name']);
		  
		  move_uploaded_file($_FILES['pic']['tmp_name'],$target1);
		  $sql1 = mysql_query("INSERT INTO slider(slider_title,slider_details,slider_location) VALUES('$title','$desc','$target1')");
		  
		  if($sql1)
		  {
			  $con1 = "<b><font face='Arial, Helvetica, sans-serif' size='2' color='#006600'>Image saved successfully.</font></b>";
		  }
		  else
		  {
			  $con1 = "<b><font face='Arial, Helvetica, sans-serif' size='2' color='#FF0000'>Image could not be saved.</font></b>";
		  }
	  }
	  else
	  {
		  $con1 = "<b><font face='Arial, Helvetica, sans-serif' size='2' color='#FF0000'>Please select an image to upload.</font></b>";
	  }
	
}
else
{
	$con1 = "";
}
?>		
		<div class="row">
			
			<div class="span8">
	      		
      		  <div id="horizontal" class="widget widget-form">
	      			
	      			<div class="widget-header">	      				
	      				<h3>
	      					<i class="icon-pencil"></i>
	      					Slider Uploading Panel	      					
      					</h3>	
      				</div> <!-- /widget-header -->
					
				  <div class="widget-content">
					<?php echo $con1; ?>	
						<form class="form-horizontal" method="post" action="g_settings.php" enctype="multipart/form-data">
					        <fieldset>
					          <div class="control-group">
					            <label class="control-label" for="input01">Image Title</label>
					            <div class="controls"><span id="sprytextfield1">
					              <input type="text" class="input-large" id="input01" name="title">
					              <span class="textfieldRequiredMsg">A value is required.</span></span>
					              <!--<p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>-->
					            </div>
					          </div>
                              <div class="control-group">
					            <label class="control-label" for="input01">Image Description</label>
					            <div class="controls">
					              <textarea name="desc"></textarea>
					              <!--<p class="help-block">In addition to freeform text, any HTML5 text-based input appears like so.</p>-->
					            </div>
					          </div>
                              <div class="control-group">
					            <label class="control-label" for="input01">Browse Image</label>
					            <div class="controls">
					              <input type="file" name="pic">
					              <p class="help-block">Upload 980 X 500 pixel image. File size is 2MB maximum.</p>
					            </div>
					          </div>
					         
					          <div class="form-actions">
					            <button type="submit" name="slider" class="btn btn-primary btn-large">Upload Image</button>
					            <button type="reset" class="btn btn-large">Cancel</button>
					          </div>
				          </fieldset>
				      </form>	
						
                    
                    
                    <div class="widget-header">	      				
	      				<h3>
	      					<i class="icon-pencil"></i>
	      					Slider List	      					
   					  </h3>	
      				</div> <!-- /widget-header -->
                    
                    <div class="widget widget-table">
					
					<div class="widget-content">
						
						<table class="table table-bordered table-striped">
					        <thead>
					          <tr>
					            <th>#</th>
					            <th>Image Title</th>
					            <th>Image Details</th>
					            <th>Image</th>
                                <th>Action</th>
					          </tr>
					        </thead>
					        <tbody>
<?php
$sql2 = mysql_query("SELECT * FROM slider");
while($row2 = mysql_fetch_assoc($sql2))
{
?>					         
                              <tr>
					            <td><?php echo $row2['id']; ?></td>
					            <td><?php echo $row2['slider_title']; ?></td>
					            <td><?php echo $row2['slider_details']; ?></td>
					            <td><img src="<?php echo $row2['slider_location']; ?>" height="50" width="90"></td>
                                <td><?php echo $row2['status']; ?></td>
					          </tr>
<?php
}
?>
				          </tbody>
				      </table>
						
						
					</div> <!-- /widget-content -->
						
				
				</div>	
				
                </div>
                </div>
                
                
                
         
                
                
				
				
				<div id="validation" class="widget highlight widget-form">
	      			
	      			<div class="widget-header">	      				
	      				<h3>
	      					<i class="icon-pencil"></i>
	      					Form Validation	      					
      					</h3>	
   				  </div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<div class="alert alert-block">
						  <a class="close" data-dismiss="alert" href="#">&times;</a>
						  <h4 class="alert-heading">Validation Example!</h4>
						  Submit the below form to view the live form validation with integrated Bootstrap error messages.
						</div>
						
						<form action="/" id="contact-form" class="form-horizontal" novalidate="novalidate">
							<fieldset>
							    <div class="control-group">
							      <label class="control-label" for="name">Your Name</label>
							      <div class="controls">
							        <input type="text" class="input-large" name="name" id="name">
							      </div>
							    </div>
							    <div class="control-group">
							      <label class="control-label" for="email">Email Address</label>
							      <div class="controls">
							        <input type="text" class="input-large" name="email" id="email">
							      </div>
							    </div>
							    <div class="control-group">
							      <label class="control-label" for="subject">Subject</label>
							      <div class="controls">
							        <input type="text" class="input-large" name="subject" id="subject">
							      </div>
							    </div>
							    <div class="control-group">
							      <label class="control-label" for="message">Your Message</label>
							      <div class="controls">
							        <textarea class="input-large" name="message" id="message" rows="3"></textarea>
							      </div>
							    </div>
							    
					          <div class="control-group">
					            <label class="control-label" for="validateSelect">Select list</label>
					            <div class="controls">
					              <select id="validateSelect" name="validateSelect">
					                <option value="">Select...</option>
					                <option value="1">1</option>
					                <option value="2">2</option>
					                <option value="3">3</option>
					                <option value="4">4</option>
					                <option value="5">5</option>
					              </select>
					            </div>
					          </div>
							    <div class="control-group">
					            <label class="control-label">Checkboxes</label>
					            <div class="controls">
					              <label class="checkbox">
					                <input type="checkbox" name="validateCheckbox" value="option1">
					                Option one is this and that-be sure to include why it's great
					              </label>
					              <label class="checkbox">
					                <input type="checkbox" name="validateCheckbox" value="option2">
					                Option two can also be checked and included in form results
					              </label>
					              <label class="checkbox">
					                <input type="checkbox" name="validateCheckbox" value="option3">
					                Option three can-yes, you guessed it-also be checked and included in form results
					              </label>
					              <p class="help-block"><strong>Note:</strong> Labels surround all the options for much larger click areas and a more usable form.</p>
					            </div>
					          </div>
					          <div class="control-group">
					            <label class="control-label">Radio buttons</label>
					            <div class="controls">
					              <label class="radio">
					                <input type="radio" name="validateRadio" id="validateRadio1" value="option1">
					                Option one is this and that-be sure to include why it's great
					              </label>
					              <label class="radio">
					                <input type="radio" name="validateRadio" id="validateRadio2" value="option2">
					                Option two can is something else and selecting it will deselect option one
					              </label>
					            </div>
					          </div>
					          
							    <div class="form-actions">
							      <button type="submit" class="btn btn-danger btn-large"><i class="icon-star"></i> Validate</button>
							      <button type="reset" class="btn btn-large">Cancel</button>
							    </div>
						  </fieldset>
					  </form>
						
					</div> <!-- /widget-content -->
						
			  </div>
				
				
				
				
				<div id="appendprepend" class="widget widget-form">
	      			
	      			<div class="widget-header">
	      				<h3>      					
	      					<i class="icon-pencil"></i>
	      					Append/Prepend	      					
      					</h3>	
      				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<form class="form-horizontal">
					        <fieldset>
					          
					          <div class="control-group">
					            <label class="control-label" for="prependedInput">Prepended text</label>
					            <div class="controls">
					              <div class="input-prepend">
					                <span class="add-on">@</span><input class="span2" id="prependedInput" size="16" type="text">
					              </div>
					              <p class="help-block">Here's some help text</p>
					            </div>
					          </div>
					          <div class="control-group">
					            <label class="control-label" for="appendedInput">Appended text</label>
					            <div class="controls">
					              <div class="input-append">
					                <input class="span2" id="appendedInput" size="16" type="text"><span class="add-on">.00</span>
					              </div>
					              <span class="help-inline">Here's more help text</span>
					            </div>
					          </div>
					          <div class="control-group">
					            <label class="control-label" for="appendedPrependedInput">Append and prepend</label>
					            <div class="controls">
					              <div class="input-prepend input-append">
					                <span class="add-on">$</span><input class="span2" id="appendedPrependedInput" size="16" type="text"><span class="add-on">.00</span>
					              </div>
					            </div>
					          </div>
					          <div class="control-group">
					            <label class="control-label" for="appendedInputButton">Append with button</label>
					            <div class="controls">
					              <div class="input-append">
					                <input class="span2" id="appendedInputButton" size="16" type="text"><button class="btn" type="button">Go!</button>
					              </div>
					            </div>
					          </div>
					          <div class="control-group">
					            <label class="control-label" for="appendedInputButtons">Two-button append</label>
					            <div class="controls">
					              <div class="input-append">
					                <input class="span2" id="appendedInputButtons" size="16" type="text"><button class="btn" type="button">Search</button><button class="btn" type="button">Options</button>
					              </div>
					            </div>
					          </div>
					         
					          <div class="form-actions">
					            <button type="submit" class="btn btn-primary btn-large">Save changes</button>
					            <button class="btn btn-large">Cancel</button>
					          </div>
					        </fieldset>
				      </form>
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /.widget -->
				
				
				
				
				<div id="control" class="widget widget-form">
	      			
	      			<div class="widget-header">
	      				<h3>	      					
	      					<i class="icon-pencil"></i>
	      					Control States	      					
      					</h3>	
      				</div> <!-- /widget-header -->
					
					<div class="widget-content">
						
						<form class="form-horizontal">
					        <fieldset>
					          <div class="control-group">
					            <label class="control-label" for="focusedInput">Focused input</label>
					            <div class="controls">
					              <input class="input-large focused" id="focusedInput" type="text" value="This is focused...">
					            </div>
					          </div>
					          <div class="control-group">
					            <label class="control-label">Uneditable input</label>
					            <div class="controls">
					              <span class="input-large uneditable-input">Some value here</span>
					            </div>
					          </div>
					          <div class="control-group">
					            <label class="control-label" for="disabledInput">Disabled input</label>
					            <div class="controls">
					              <input class="input-large disabled" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
					            </div>
					          </div>
					          <div class="control-group">
					            <label class="control-label" for="optionsCheckbox2">Disabled checkbox</label>
					            <div class="controls">
					              <label class="checkbox">
					                <input type="checkbox" id="optionsCheckbox2" value="option1" disabled="">
					                This is a disabled checkbox
					              </label>
					            </div>
					          </div>
					          <div class="control-group warning">
					            <label class="control-label" for="inputWarning">Input with warning</label>
					            <div class="controls">
					              <input type="text" id="inputWarning">
					              <span class="help-inline">Something may have gone wrong</span>
					            </div>
					          </div>
					          <div class="control-group error">
					            <label class="control-label" for="inputError">Input with error</label>
					            <div class="controls">
					              <input type="text" id="inputError">
					              <span class="help-inline">Please correct the error</span>
					            </div>
					          </div>
					          <div class="control-group success">
					            <label class="control-label" for="inputSuccess">Input with success</label>
					            <div class="controls">
					              <input type="text" id="inputSuccess">
					              <span class="help-inline">Woohoo!</span>
					            </div>
					          </div>
					          <div class="control-group success">
					            <label class="control-label" for="selectError">Select with success</label>
					            <div class="controls">
					              <select id="selectError">
					                <option>1</option>
					                <option>2</option>
					                <option>3</option>
					                <option>4</option>
					                <option>5</option>
					              </select>
					              <span class="help-inline">Woohoo!</span>
					            </div>
					          </div>
					          <div class="form-actions">
					            <button type="submit" class="btn btn-primary btn-large">Save changes</button>
					            <button class="btn btn-large">Cancel</button>
					          </div>
					        </fieldset>
				      </form>	
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /.widget -->
				
		    </div> <!-- /span8 -->
		    
		    
		    <div class="span4">
		    	
		    	<div id="formToc" class="widget highlight">
		    		
		    		<div class="widget-header">
		    			<h3>Flexible HTML and CSS</h3>		    			
		    		</div> <!-- /widget-header -->
		    		
		    		<div class="widget-content">
		    			<p>The best part about forms in Bootstrap is that all your inputs and controls look great no matter how you build them in your markup. No superfluous HTML is required, but we provide the patterns for those who require it.</p>
		    			
		    			<br>
		    			
		    			<p>Bootstrap's forms include styles for all the base form controls like input, textarea, and select you'd expect. But it also comes with a number of custom components like appended and prepended inputs and support for lists of checkboxes.</p>
		    			
		    			
		    		</div> <!-- /widget-content -->
		    		
		    	</div> <!-- /widget -->
		    	
		    	
		    	
		    	
		    </div> <!-- /.span4 -->
		    
		    
      		 		
		</div> <!-- /row -->
		
		
		
		
	</div> <!-- /.container -->
	
</div> <!-- /#content -->



<div id="footer">	
		
	<div class="container">
		
		&copy; 2012 Propel UI, all rights reserved.
		
	</div> <!-- /.container -->		
	
</div> <!-- /#footer -->





<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
</html>
