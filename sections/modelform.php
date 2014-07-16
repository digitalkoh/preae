<section class="modelform">
	<div class="container clearfix">

		<div id="contact-form">
			<!-- 
				<ul id="errors" class="">
					<li id="info"><strong>Please fix the following Errors:</strong></li>
				</ul>
			 -->
			<!-- <p id="success" class="">Thank you, your message has been sent.</p> -->
			<form action="" method="post">
				<fieldset>
					<label for="status">Status<span class="req">*</span></label>
					<select id="status" name="status">
						<option value="">Select</option>
						<option value="1">Active Employee</option>
						<option value="2">COBRA</option>
						<option value="3">Retired Employee</option>
						<option value="4">Full Time Employee</option>
						<option value="5">Part Time Employee</option>
					</select>
					
					<label for="coverage">Coverage Level<span class="req">*</span></label>
					<select id="coverage" name="coverage">
						<option value="">Select</option>
						<option value="1">Employee Only</option>
						<option value="2">Employee + Spouse</option>
						<option value="3">Employee + Children</option>
						<option value="4">Employee + Family</option>
					</select>
					
					<label for="zipcode">Home Zip Code<span class="req">*</span></label>
					<input type="text" placeholder="Type in your home zip code" id="zipcode" name="zipcode">
					
					<input type="checkbox" id="sp-spouse" name="sp-spouse">
					<label for="sp-spouse">
						Include your spouse’s or partner’s plan in your comparison analysis 
						by entering his/her plan cost and key coverage factors. 
						<span class="caption">(Optional)</span>
					</label>
				</fieldset>
				
				<fieldset id="spousefields" class="hide">
					<label for="sp-contribution">Annual Employee Contribution</label>
					<input type="text" id="sp-contribution" name="sp-contribution">
					
					<label for="sp-hsa">Annual HSA Employer Contribution</label>
					<input type="text" id="sp-hsa" name="sp-hsa">
					
					<label for="sp-deductible">Annual Deductible</label>
					<input type="text" id="sp-deductible" name="sp-deductible">
					
					<label for="sp-oopmax">Annual Out-of-Pocket Maximum</label>
					<input type="text" id="sp-oopmax" name="sp-oopmax">
				</fieldset>
				
				
				<div class="btnContainer">
					<input id="contactSubmit" type="submit" name="submit" class="blueBtn" value="Window Shop Now">
				</div>
			</form>
		</div>
		
	</div>
</section>

