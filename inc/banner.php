<header>
	<div class="header-wrapper">
		<div class="container clearfix">
			<h1 id="logo"><a href="?section=home" title="Health Plan Identifier"><img src="img/ae_logo.png" alt="Health Plan Identifier"></a></h1>
			<div id="clientlogo"><img src="img/ae_client_logo.png" alt="Premier"></div>
			<nav id="main-nav"></nav>
			
		</div>
	</div>
</header>

<div class="clear"></div>

<section class="intro">
	<div class="container clear">
	
		<div id="dates" class="hide">
			<div class="datebox" id="startdate">
				<p>Open Enrollment starts</p>
				<p class="lg">November 4</p>
			</div>
			<div class="datebox" id="enddate">
				<p>Open Enrollment ends</p>
				<p class="lg">November 22</p>
			</div>
		</div><!-- /#dates-->
		
		<div id="dates2">
			<div class="datebox" id="startdate">
				<p>Open Enrollment</p>
				<p class="lg">November 4 ~ November 22</p>
			</div>
		</div><!-- /#dates2-->
		<div class="clear"></div>
		
		<?php
			if ($_GET["section"] == "home"){
		?>
		
		<div class="introtext">
			<h1>It’s that time of year when you get to shop for benefits that fit you!</h1>
			<p>Even if you think you have the right benefits, it’s always a good idea to shop around and see what may have changed. Who knows, you may find a better deal.</p>
		</div><!-- /.introtext-->
		
		<?php
			} else if($_GET["section"] == "results") {
		?>
		
		<div class="introtext results">
			<h1>Medical Plan Pricing Modeler</h1>
			
		</div><!-- /.introtext-->
		
		<?php					
			} else {
		?>
		
			<?php include 'sections/loginform.php'; ?>
			
		<?php					
			}
		?>
		
		
	</div>
</section>