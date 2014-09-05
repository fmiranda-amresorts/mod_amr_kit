<?php
	//don't allow other scripts to grab and execute our file
	defined('_JEXEC') or die('Direct Access to this location is not allowed.');
	JHTML::script('modernizr_forms.js', 'modules/mod_amr_mcc_email/js/');
	//echo 'REQUEST='; foreach ($_SERVER as $i=>$ii) echo $i.'='.$ii.' ';
?>

<div id="sidebar_mail">
	<div id="header_mail">KEEP IN TOUCH</div>
	<div id="text_mail">Learn about deals &amp; specials by email.</div>
	<a href="#gk_lightbox_room_test" rel="boxed" class="button_email_signup"><?php echo $params->get('anchor_text'); ?></a>

	<div style="display: none;">
		<div id="gk_lightbox_room_test">
			<div class="form-validate form_mail">
				<div class="header_mail">SIGN UP TO RECEIVE<br />EXCLUSIVE OFFERS AND PROMOTIONS</div>
				<div id="formerror" class="error" style="color:red;text-align:center;width:100%;height:14px;size:12px;padding-bottom:5px;"></div>
				<form class='mail_sign_up form-validate' onsubmit='submitOverride(); return false;'>
					<div class="formitem">
						<label for="givenname">FIRST NAME:</label>
						<input name='QID2094' type="text" id="givenname" tabindex="1" title="givenname" value="" size="22" maxlength="150" placeholder="First Name" pattern="[a-zA-Z0-9]+">
					</div>
					<div class="formitem">
						<label for="familyname">LAST NAME:</label>
						<input name='QID2095' type="text" id="familyname" tabindex="2" title="familyname" value="" size="22" maxlength='150' placeholder="Last Name"  pattern="[a-zA-Z0-9]+">
					</div>
					<div class="formitem">
						<label for="input_mail">EMAIL:</label>
						<input name='QID2096' type="text" id="input_mail" tabindex="3"  title="input_mail" value="" size="22" maxlength='150' placeholder="Email Address">
					</div>
					<div class="formitem">
						<label for="zipcode">ZIPCODE:</label>
						<input name='QID21914' type="text" id="zipcode" tabindex="4"  title="zipcode" value="" size="10" maxlength='150' placeholder="Zip Code" pattern="[a-zA-Z0-9]+">
					</div>
					<div class="checkbox">
						<input name='optin' type='checkbox' id='optin' value='1' pattern="[1]">
					</div>
					<div class="checkbox-text">
						<p>AMResorts is requesting for itself and on behalf of its affiliates within the Apple Leisure Group collection of companies your consent to receive e-mail and other electronic 
							communications regarding the travel and hospitality products and services of the Apple Leisure Group companies.  For more on the companies and for contact information, 
							please see here: <a href="http://www.appleleisuregroup.com" target="_blank">www.appleleisuregroup.com. </a> You may withdraw this consent at any time by e-mailing us 
							at <a href="mailto: unsubscribe@amresorts.com" target="_blank">unsubscribe@amresorts.com. </a>For more information you can view our 
							<a href="privacy" target="_blank">Privacy Policy</a>.</p>
					</div>
					<div class="formitem">
						<input type="image" name="but_img" class="content_button validate" src="images/button_sign_up.png">
					</div>
					<div class="formbutton">
						<button type="submit">Submit form</button>
					</div>

					<!--  cendyn specific hidden form fields -->
					<input type='hidden' value='False' name='IsMemberAgent'>
					<input type='hidden' value='False' name='IsMemberSurveyPerence'>
					<input type='hidden' value='0' name='MemberID'>
					<input type='hidden' value='7' name='SourceCustomer'>
					<input type='hidden' value='True' name='isCreateProfile'>
					<input type='hidden' value='False' name='isUpdateProfile'>
					<input type='hidden' value='213' name='ProfileSurveyID'>
					<input type='hidden' value='343' name='EmailListID'>
					<input type='hidden' value='7055' name='CompanyID'>
					<input type='hidden' value='No' name='AdminOrOwnerEditResponse'>
					<input type='hidden' value='0' name='AdminOrOwnerResponseID'>
					<input type='hidden' value='n2KH587K' name='SurveyID'>
					<input type='hidden' value='0' name='EmailAddressID'>
					<input type='hidden' value='0' name='EmailMessageID'>
					<input type='hidden' value='' name='EID'>
					<input type='hidden' value='A' name='ResponseType'>
					<input type='hidden' value='' name='SurveyComplete'>
					<input type='hidden' value='0' name='DoneClicked'>
					<input type='hidden' value='' name='ItemIDValues'>
					<input type='hidden' value='key=vXaHfpdCGxmBHvosGi4cZpcLSq2hWBzH&email=sample@cendyn.com&QuestionOnly=True' name='PostedQueryString'>
					<input type='hidden' value='key=vXaHfpdCGxmBHvosGi4cZpcLSq2hWBzH&email=sample@cendyn.com&QuestionOnly=True' name='FirstPageQueryString'>
					<input type='hidden' value='1' name='DisplayPageNumber'>
					<input type='hidden' value='' name='ResponseStartDate'>
					<input type='hidden' value='1' name='ActualPageNumber'>
					<input type='hidden' value='False' name='loadSecondTemplate'>
					<input type='hidden' value='False' name='bypassLogin'>
					<input type='hidden' value='false' name='hdnUpdatingSurvey'>
					<input type='hidden' value='0' name='ResponseID'>
					<input type='hidden' value='5' name='QuestionNumber'>
					<input type='hidden' value=',' name='SP'>
					<input type='hidden' value='P' name='TypePoll'>

				</form>
			</div>
			<div class="form_mess" style="display:none;">
				<center>Thank you!</center>You are now signed up to receive our latest news &amp; features, special promotions and subscribers-only limited offers and exclusive amenities. You can unsubscribe at any time.
			</div>
		</div>
	</div>        

	<script>
		jQuery("body").on( "click", "#sbox-overlay, #sbox-btn-close", function() {
			jQuery('.form_mail').show();
			jQuery('.form_mess').hide();
		});

		var validationInfo = {
			'emailField' : {
				'pattern' :  '^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,6}$'
			},
			'checkBox' : {
				'pattern' : '[1]'
			}
		};

		function submitOverride(){
			if(validateEmail() && validateTerms()){
				var $form = jQuery('.mail_sign_up'),
				$inputs = $form.find("input, select, button, textarea"),
					serializedData = $form.serialize();

				$inputs.attr("disabled", "disabled");

				jQuery.ajax({
					url: "http://www.amresorts.us/pms_wsdl/CaptureLeadSimple.php",
					type: "get",
					data: serializedData,
					dataType: 'text',

					success: function(response, textStatus, jqXHR){
						//alert('!!'+response);
					},
					error: function(jqXHR, textStatus, errorThrown){
						//alert('??'+textStatus+' - '+errorThrown);
					},
					complete: function(){
						$inputs.removeAttr("disabled");
						jQuery('.form_mail').hide();
						jQuery('.form_mess').show();
						//jQuery('#sidebar_mail').addClass('active');
					}
				});
			}
		}//submitOverride
		
		function validateTerms(){
			var termsField = jQuery(".mail_sign_up .checkbox input");
			var errorField = jQuery(".error")[1];
			//console.log(termsField.is(':checked'));
			if(termsField.is(':checked')){
				errorField.innerHTML = " ";
				return true;
			}else{
				errorField.innerHTML = "Please accept terms and conditions."
				return false;
			}
		}
		function validateEmail(){
			var emailField = jQuery(".mail_sign_up .input_mail")[1];
			var errorField = jQuery(".error")[1];

			if(Modernizr.input.pattern){
				var myPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
			}else{
				var myPattern = validationInfo['emailField'].pattern;
				console.log(myPattern);
			}
			
			var isValid = emailField.value.search(myPattern) >= 0;
			console.log(isValid);
			if(isValid){
				errorField.innerHTML = " ";
				return true;
			}else{
				errorField.innerHTML = "Please enter a valid email address";
				return false;
			}
		}
	</script>
</div>


