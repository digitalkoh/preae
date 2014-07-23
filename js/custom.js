$(document).ready(function() {
	
	//links
	$('#loginSubmit').click(function(){window.location = "?section=home";});
	$('#contactSubmit').click(function(){window.location = "?section=results";});
	$('#changeCriteria').click(function(){window.location = "?section=home";});
	$('#gotoSummary').click(function(){window.location = "?section=summary";});
	$('#gotoResources').click(function(){window.location = "?section=resource";});
	$('.backtoplan').click(function(){window.location = "?section=results";});
	
	
	// form option
	$("#sp-spouse").click(function(){
		$("#spousefields").toggle();
	});
	
	
	// Responsive DIV TABLE
	if ($('.divtable').length){ // if at least 1 divtable is on page

		$('.divtable').each(function(){ // loop each respTbl table
			var tbl = $(this);
			var tblName = $(tbl).attr('id');
			var tblName = []; // create array using (table ID) name

			$('.head .tcell' ,this).each(function(){  // loop each .head
				tblName.push($(this).html());  // populate array with label
			});
			
			// add attribute to each .tcell
			$('.trow' ,tbl).each(function(){  // loop each .trow
				$('.tcell', this).each(function(i){
					$(this).not('.keepLabel').prepend('<span>' + tblName[i] +'</span>');
				});
				
				$('.tcell', this).last().addClass('last');
			});
			
			
			function setWidth(){
				// Distribute width evenly only when in wide view (float state is 'left' in wide view)
				if($('.tcell', tbl).css('float') === 'left'){
					// assign width for each cell
					
					// offset should be defined on the DIV table itself. If not, use default 25.
					// offset is used to fine tune the width of cells.
					var offset = 25;
					if($(tbl).attr("var-offset")){
						offset = $(tbl).attr("var-offset");
					}
					
					// If 'var-labelsize' is defined, use it
					if($(tbl).attr("var-labelsize")){
						var keepAsLabelWidth = $(tbl).attr("var-labelsize");
						$('.tcell', tbl).css({'width': (($(tbl).width()-keepAsLabelWidth)/(tblName.length-1))-offset});
						
						// Apply first column width to all class with 'keepAsLabel'
						$('.tcell.keepAsLabel', tbl).css({'width': keepAsLabelWidth+'px'});
					} else {
						// If first column label isn't defined, distribute width as usual
						// normal width = parent's width divided by number of columns minus padding.
						$('.tcell', tbl).css({'width': $(tbl).width()/tblName.length-offset});
					}
				}else{
					$('.tcell', tbl).css({'width':'auto'});
				}
			}
			
			setWidth();
			
			$(window).resize(function(){
				setWidth();
			});
			
			// alternating row color
			$('.trow',tbl).filter(":even").addClass('altColor1').end().filter(":odd").addClass('altColor0');
		});
	}
	// /Responsive DIV TABLE
	
	
	// Append Level Description Lightbox call to tags
	if($(".tag a").length){
		$(".tag a").addClass("fancybox");
		
		var tags = $(".tag a");
		
		$.each(tags, function(i){
			var txt = $(this).html();  // extract existing text
			$(this).attr("href", "#leveldesc-" + txt); // rewrite href, append original text at end
		});
	};
	
	$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});
	
	$(".fancybox").fancybox({
		maxWidth	: 600,
		maxHeight	: 500
	});
	$(".fancybox-media").fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
	

	if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
		$("html").click(function(){  // Update class to point at the head of the list
			$("html").addClass(	'no-transitions'); 
		});
	}

		
	$('a').bind('click',function(event){
    var $anchor = $(this);
	
    $('html, body').stop().animate({
        scrollTop: $($anchor.attr("href")).offset().top
    }, 1500, "easeOutExpo");

    event.preventDefault();
		
	});
		$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
			$('.go-top').fadeIn(200);
		} else {
			$('.go-top').fadeOut(200);
		}
	});


	$('ul.sf-menu').superfish({
		delay: 100,
		speed: 'fast'
	});
});

$(function(){
    
	//set global variables and cache DOM elements for reuse later
	var form = $('#contact-form').find('form'),
		formElements = form.find('input[type!="submit"],textarea'),
		formSubmitButton = form.find('[type="submit"]'),
		errorNotice = $('#errors'),
		successNotice = $('#success'),
		loading = $('#loading'),
		errorMessages = {
			required: ' is a required field',
			email: 'You have not entered a valid email address for the field: ',
			minlength: ' must be greater than '
		}
	
	//feature detection + polyfills
	formElements.each(function(){

		//if HTML5 input placeholder attribute is not supported
		if(!Modernizr.input.placeholder){
			var placeholderText = this.getAttribute('placeholder');
			if(placeholderText){
				$(this)
					.addClass('placeholder-text')
					.val(placeholderText)
					.bind('focus',function(){
						if(this.value == placeholderText){
							$(this)
								.val('')
								.removeClass('placeholder-text');
						}
					})
					.bind('blur',function(){
						if(this.value == ''){
							$(this)
								.val(placeholderText)
								.addClass('placeholder-text');
						}
					});
			}
		}
		
		//if HTML5 input autofocus attribute is not supported
		if(!Modernizr.input.autofocus){
			if(this.getAttribute('autofocus')) this.focus();
		}
		
	});
	
	//to ensure compatibility with HTML5 forms, we have to validate the form on submit button click event rather than form submit event. 
	//An invalid html5 form element will not trigger a form submit.
	formSubmitButton.bind('click',function(){
		var formok = true,
			errors = [];
			
		formElements.each(function(){
			var name = this.name,
				nameUC = name.ucfirst(),
				value = this.value,
				placeholderText = this.getAttribute('placeholder'),
				type = this.getAttribute('type'), //get type old school way
				isRequired = this.getAttribute('required'),
				minLength = this.getAttribute('data-minlength');
			
			//if HTML5 formfields are supported			
			if( (this.validity) && !this.validity.valid ){
				formok = false;
				
				console.log(this.validity);
				
				//if there is a value missing
				if(this.validity.valueMissing){
					errors.push(nameUC + errorMessages.required);	
				}
				//if this is an email input and it is not valid
				else if(this.validity.typeMismatch && type == 'email'){
					errors.push(errorMessages.email + nameUC);
				}
				
				this.focus(); //safari does not focus element an invalid element
				return false;
			}
			
			//if this is a required element
			if(isRequired){	
				//if HTML5 input required attribute is not supported
				if(!Modernizr.input.required){
					if(value == placeholderText){
						this.focus();
						formok = false;
						errors.push(nameUC + errorMessages.required);
						return false;
					}
				}
			}

			//if HTML5 input email input is not supported
			if(type == 'email'){ 	
				if(!Modernizr.inputtypes.email){ 
					var emailRegEx = new RegExp("[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?", "g"); 
					if( !emailRegEx.test(value) ){	
						this.focus();
						formok = false;
						errors.push(errorMessages.email + nameUC);
						return false;
					}
				}
			}
			
			//check minimum lengths
			if(minLength){
				if( value.length < parseInt(minLength) ){
					this.focus();
					formok = false;
					errors.push(nameUC + errorMessages.minlength + minLength + ' characters');
					return false;
				}
			}
		});
		
		//if form is not valid
		if(!formok){
			
			//animate required field notice
			$('#req-field-desc')
				.stop()
				.animate({
					marginLeft: '+=' + 5
				},150,function(){
					$(this).animate({
						marginLeft: '-=' + 5
					},150);
				});
			
			//show error message 
			showNotice('error',errors);
			
		}
		//if form is valid
		else {
			loading.show();
			$.ajax({
				url: form.attr('action'),
				type: form.attr('method'),
				data: form.serialize(),
				success: function(){
					showNotice('success');
					form.get(0).reset();
					loading.hide();
				}
			});
		}
		
		return false; //this stops submission off the form and also stops browsers showing default error messages
		
	});

	//other misc functions
	function showNotice(type,data)
	{
		if(type == 'error'){
			successNotice.hide();
			errorNotice.find("li[id!='info']").remove();
			for(x in data){
				errorNotice.append('<li>'+data[x]+'</li>');	
			}
			errorNotice.show();
		}
		else {
			errorNotice.hide();
			successNotice.show();	
		}
	}
	
	String.prototype.ucfirst = function() {
		return this.charAt(0).toUpperCase() + this.slice(1);
	}
	
});




