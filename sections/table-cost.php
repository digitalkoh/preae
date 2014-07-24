<section class="modelresult">
	<div class="container clearfix">

		<?php 
			//include 'inc/inc_backtoplanlink.php'; 
		?>
		
		<!-- Chart sample -->
		<!-- Chart image and events are for demo purposes only -->
		<div id="chart-cost">
			<p>Use these checkboxes to hide or show the comparison points of eligible plans below.</p>
			<form id="chart-cost-control">
				<fieldset>
					<ol>
						<li>
							<input type="checkbox" id="barcheck1" checked="checked" name="" />
							<label for="" class="">Your Annual Price</label>	
						</li>
						<li>
							<input type="checkbox" id="barcheck2" checked="checked" name="" />
							<label for="" class="">Deductible</label>
						</li>
						<li>
							<input type="checkbox" id="barcheck3" checked="checked" name="" />
							<label for="" class="">Coinsurance/Copay Maximum</label>
						</li>
					</ol>
				</fieldset>	
			</form>
			<div class="clear"></div>
			
			<div id="chart-temp-image">
				<img src="img/cost_table_base.png" />
				<img class="overlay" src="img/cost_table_grid.png" />
				<img class="overlay" id="bar1" src="img/cost_table_blue.png" />
				<img class="overlay" id="bar2" src="img/cost_table_green.png" />
				<img class="overlay" id="bar3" src="img/cost_table_orange.png" />
			</div><!-- /#chart-temp-image-->
		</div>
		<!-- /Chart sample-->
		
		<script>
			$('#barcheck1').click(function(){$('#bar1').toggle();});
			$('#barcheck2').click(function(){$('#bar2').toggle();});
			$('#barcheck3').click(function(){$('#bar3').toggle();});
		</script>
		
		<h2 class="tbltitle"><a href="?section=resource#BCBS of Illinois">Carrier 1</a></h2>
		<table class="cost-table">
			<!-- 
<thead>
				<tr>
					<th colspan="6">Blue Cross Blue Shield</th>
				</tr>
			</thead>
 -->
			<tbody>
				<tr>
					<th class="levelname">Plan Level</th>
					<th>Your Annual Price</th>
					<th>Deductible</th>
					<th>Coinsurance/<br>Copay Maximum</th>
					<th>Total</th>
				</tr>
				<tr>
					<td class="levelname">Carrier 1 <span>Bronze</span></td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
				</tr>
				<tr>
					<td class="levelname">Carrier 1 <span>Bronze+</span></td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
				</tr>
				<tr>
					<td class="levelname">Carrier 1 <span>Silver</span></td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
				</tr>
				<tr>
					<td class="levelname">Carrier 1 <span>Gold</span></td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
				</tr>
				<tr>
					<td class="levelname">Carrier 1 <span>Platinum</span></td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
				</tr>
			</tbody>
		</table>
		
		<h2 class="tbltitle"><a href="?section=resource#Aetna">Carrier 2</a></h2>
		<table class="cost-table">
			<!-- 
<thead>
				<tr>
					<th colspan="6">Aetna</th>
				</tr>
			</thead>
 -->
			<tbody>
				<tr>
					<th class="levelname">Plan Level</th>
					<th>Your Annual Price</th>
					<th>Deductible</th>
					<th>Coinsurance/<br>Copay Maximum</th>
					<th>Total</th>
				</tr>
				<tr>
					<td class="levelname">Carrier 2 <span>Bronze</span></td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
				</tr>
				<tr>
					<td class="levelname">Carrier 2 <span>Bronze+</span></td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
				</tr>
				<tr>
					<td class="levelname">Carrier 2 <span>Silver</span></td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
				</tr>
				<tr>
					<td class="levelname">Carrier 2 <span>Gold</span></td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
				</tr>
				<tr>
					<td class="levelname">Carrier 2 <span>Platinum</span></td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
				</tr>
			</tbody>
		</table>
		
		<h2 class="tbltitle"><a href="?section=resource#UnitedHealthcare">Carrier 3</a></h2>		
		<table class="cost-table">
			<!-- 
<thead>
				<tr>
					<th colspan="6">UnitedHealthCare</th>
				</tr>
			</thead>
 -->
			<tbody>
				<tr>
					<th class="levelname">Plan Level</th>
					<th>Your Annual Price</th>
					<th>Deductible</th>
					<th>Coinsurance/<br>Copay Maximum</th>
					<th>Total</th>
				</tr>
				<tr>
					<td class="levelname">Carrier 3 <span>Bronze</span></td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
				</tr>
				<tr>
					<td class="levelname">Carrier 3 <span>Bronze+</span></td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
				</tr>
				<tr>
					<td class="levelname">Carrier 3 <span>Silver</span></td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
				</tr>
				<tr>
					<td class="levelname">Carrier 3 <span>Gold</span></td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
				</tr>
				<tr>
					<td class="levelname">Carrier 3 <span>Platinum</span></td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
					<td>$XXXX</td>
				</tr>
			</tbody>
		</table>
		
	</div>
</section>


