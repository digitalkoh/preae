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
						<option value="One">One</option>
						<option value="Two">Two</option>
					</select>
					
					<label for="coverage">Coverage Level<span class="req">*</span></label>
					<select id="coverage" name="coverage">
						<option value="">Select</option>
						<option value="One">One</option>
						<option value="Two">Two</option>
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
					<label for="sp-status">Status</label>
					<input type="text" id="sp-status" name="sp-status">
					<label for="sp-coverage">Coverage Level</label>
					<input type="text" id="sp-coverage" name="sp-coverage">
					<label for="sp-zipcode">Home Zip Code</label>
					<input type="text" placeholder="Type in your home zip code" id="sp-zipcode" name="sp-zipcode">
				</fieldset>
				
				
				<div class="btnContainer">
					<input id="contactSubmit" type="submit" name="submit" class="blueBtn" value="Window Shop Now">
				</div>
			</form>
		</div>
		
	</div>
</section>

