<header>
	<div class="header-wrapper">
		<div class="container clearfix">
			<h1 id="logo"><a href="?section=home" title="Health Plan Identifier"><img src="img/ah_logo.png" alt="Health Plan Identifier"></a></h1>
			<div id="clientlogo"><img src="img/ae_client_logo.png" alt="Premier"></div>
			<nav id="main-nav"></nav>
			
		</div>
	</div>
</header>

<div class="clear"></div>

<?php 
	if ($_GET["section"] == "results" || $_GET["section"] == "summary" || $_GET["section"] == "resource"){
		include 'inc/nav.php';
	}
?>

<section class="intro">
	<div class="container clear">
		
		<div id="dates">
			<div class="datebox">
				<p>Open Enrollment</p>
				<p class="lg">November 4 ~ November 22</p>
			</div>
		</div><!-- /#dates-->
		<div class="clear"></div>
		
		<?php
			if ($_GET["section"] == "home"){
		?>
		
		<div class="introtext">
			<h1>It's that time of year when you get to shop for benefits that fit you!</h1>
			<p>Even if you think you have the right benefits, it’s always a good idea to shop around and see what may have changed. Who knows, you may find a better deal. Start your decision making process and be better prepared when enrollment begins on November 4 on the Your Benefits Resources website.</p>
		</div><!-- /.introtext-->
		
		<?php
			} else if($_GET["section"] == "results") {
		?>
		
		<div class="introtext results">
			<h1>Medical Plan Pricing Modeler</h1>
			
		</div><!-- /.introtext-->
		
		<?php
			} else if($_GET["section"] == "resource") {
		?>
		
		<div class="introtext results">
			<h1>Medical Carrier Resources</h1>
			
		</div><!-- /.introtext-->
		
		<?php
			} else if($_GET["section"] == "summary") {
		?>
		
		<div class="introtext results">
			<h1>Medical Cost Summary</h1>
			
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