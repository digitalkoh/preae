<section>
	<div class="container clear">
		<nav>
			<ul>
				<li class="<?php if ($_GET["section"] == "results")echo "selected"; ?>"><a href="?section=results">Medical Plan Pricing Modeler</a></li>
				<li class="<?php if ($_GET["section"] == "summary")echo "selected"; ?>"><a href="?section=summary">Medical Cost Summary</a></li>
				<li class="<?php if ($_GET["section"] == "resource")echo "selected"; ?>"><a href="?section=resource">Medical Carrier Resources</a></li>
			</ul>
		</nav>
	</div>
	
	<script>
		$(document).ready(function(){
		
			// Equalize nav li height
			function equalNavHeight(){
				var navheight = []; //create array to store heights
				$("nav ul li a").each(function(){
					navheight.push($(this).height()); //push heights of li elements
				});
				navheight = Math.max.apply(Math, navheight); // get max height
				$("nav ul li a").height(navheight);	//apply to <a>
			}
			
			equalNavHeight();
		})
	</script>
</section>