<div id="nav">
		
	<div class="container">
		
		<a href="javascript:;" class="btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        	<i class="icon-reorder"></i>
      	</a>
		
		<div class="nav-collapse">
			
			<ul class="nav">
		
				<li class="nav-icon active">
					<a href="dashboard.php">
						<i class="icon-home"></i>
						<span>Home</span>
					</a>	    				
				</li>
				<?php
				
				if($_SESSION['authority']>=5)
				{
				?>
				<li class="dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-th"></i>
						Category <!-- Management -->
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><a href="main_cat.php">Main Category</a></li>
						<li><a href="sub_cat.php">Sub Category</a></li>
					</ul>    				
				</li>
				
				<li class="dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-th"></i>
						Menu <!-- Management -->
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><a href="add_menu.php">Add New Menu</a></li>	
						<li><a href="main_menu.php">Menu List</a></li>
					</ul>    				
				</li>
				
				
				<li class="dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-th"></i>
						Slider <!-- Management -->
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><a href="add_slide.php">Add New Slide</a></li>	
						<li><a href="slide_list.php">Slide List</a></li>	
					</ul>    				
				</li>
				
				<?php
				}
				?>
				<?php
				
				if($_SESSION['authority']>=1)
				{
				?>
				<li class="dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-copy"></i>
						Product <!-- Management -->
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><a href="add_product.php">Add New Product</a></li>						
						<li><a href="product_list.php">Product List</a></li>						
						<!-- <li><a href="add_slide.php">Add New Slide</a></li>	
						<li><a href="slide_list.php">Slide List</a></li>						
						<li><a href="add_menu.php">Add New Menu</a></li>	-->
						<!-- <li><a href="menu_list.php">Menu List</a></li>	-->
					</ul>    				
				</li>
				<?php
				}
				?>
				
				<?php				
				if($_SESSION['authority']>=2)
				{
				?>
				<li class="dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-copy"></i>
						Address
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><a href="add_address_form.php">Add New Address</a></li>						
  				         <li><a href="address_list.php">Address List</a></li>						
					</ul>    				
				</li>
				<?php
				}
				?>
				
				<?php				
				if($_SESSION['authority']>=2)
				{
				?>
				<li class="dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-copy"></i>
						Order
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">				
  				        <li><a href="order_list.php">Order List</a></li>						
					</ul>    				
				</li>
				<?php
				}
				?>
				
				

<!--                
                <li class="dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-copy"></i>
						Customer Management
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><a href="./invoice.html">New Customer</a></li>
						<li><a href="./faq.html">Existing Customer</a></li>
						<li><a href="./calendar.html">Customer Analysis</a></li>
					</ul>    				
				</li>
				
				<li class="dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-external-link"></i>
						Settings
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">							
						<li><a href="g_settings.php">General Settings</a></li>
						<li><a href="./signup.html">Maintenance Settings</a></li>
						<li><a href="./error.html">Error</a></li>
						<li class="dropdown">
							<a href="javascript:;">
								Dropdown Menu									
								<i class="icon-chevron-right sub-menu-caret"></i>
							</a>
							
							<ul class="dropdown-menu sub-menu">
		                        <li><a href="javascript:;">Dropdown #1</a></li>
		                        <li><a href="javascript:;">Dropdown #2</a></li>
		                        <li><a href="javascript:;">Dropdown #3</a></li>
		                        <li><a href="javascript:;">Dropdown #4</a></li>
		                    </ul>
						</li>
					</ul>    				
				</li>
				
-->				
			<li class="dropdown">					
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-copy"></i>
						Customer
						<b class="caret"></b>
					</a>	
				
					<ul class="dropdown-menu">
						<li><a href="customer_list.php">Customer List</a></li>
					</ul>    				
				</li>
			</ul>
			<?php
			if($_SESSION['authority']>=1) 
				{
				?>

		  	 <ul class="nav pull-right">
		 
				<li class="">
					<form class="navbar-search pull-left" action="product_list.php" method="post">
						<input type="text" class="search-query" placeholder="Search"  name="searchterm" <?php if(isset($searchterm))
						{
						if($searchterm!="")
						echo 'value="'.$searchterm.'"';
						}
						?>>
						<button class="search-btn"><i class="icon-search"></i></button>
					</form>	    				
				</li>
				
			</ul>
			<?php
			  }
			?>
		</div> <!-- /.nav-collapse -->
		
	</div> <!-- /.container -->
	
</div> <!-- /#nav -->