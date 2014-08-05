<div id="slidercontainer"><!-- slidercontainer start -->        
    <div id="banner-fade">      
    <ul class="bjqs">
	
<?php $sqlSlider = mysql_query("SELECT * from slider");  	
while($rowSlider = mysql_fetch_assoc($sqlSlider))	
{
?>		
		<li><img src="admin/<?php echo $rowSlider['slider_location']; ?>" title="<?php echo $rowSlider['slider_title']; ?>"></li>		  
<?php
}
?>		  
        </ul>
        <!-- end Basic jQuery Slider -->
      </div>
      <!-- End outer wrapper -->
	  
      <script class="secret-source">
        jQuery(document).ready(function($) {
          $('#banner-fade').bjqs({
            height      : 222,
            width       : 990,
            responsive  : true
          });

        });
      </script>	  
</div><!-- slidercontainer end -->