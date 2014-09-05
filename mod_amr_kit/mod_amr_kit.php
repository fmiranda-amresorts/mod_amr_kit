<?php
	//don't allow other scripts to grab and execute our file
	defined('_JEXEC') or die('Direct Access to this location is not allowed.');
	JHTML::_('behavior.formvalidation');
	//echo 'REQUEST='; foreach ($_SERVER as $i=>$ii) echo $i.'='.$ii.' ';
?>

<div id="sidebar_mail">
	<div id="header_mail">KEEP IN TOUCH</div>
	<div id="text_mail">Learn about deals &amp; specials by email.</div>
	<a href="#gk_lightbox_room_test" rel="boxed" class="button_email_signup"><?php echo $params->get('anchor_text'); ?></a>

	<div style="display: none;">
		<div id="gk_lightbox_room_test">
			<div class="form_mail">
				<!--form action="http://www.amresorts.us/pms_wsdl/CaptureLeadSimple.php" method="post"-->
				<form class='mail_sign_up form-validate' onsubmit='submitOverride(); return false;'>
					<input name="nextpage" type="hidden" value="<?php echo JURI::current();?>" />
					<input name="lead_source" type="hidden" value="<?php echo $params->get('lead_source'); ?>" />
					<div class="formitem">
						<label>FIRST NAME:</label>
						<input name='QID2094' type="text" id="givenname" tabindex="1" title="first" value="" size="22" maxlength="100" required>
					</div>
					<div class="formitem">
						<label>LAST NAME:</label>
						<input name='QID2095' type="text" id="familyname" tabindex="2" title="givenname" value="" size="22" maxlength='150' required>
					</div>
					<div class="formitem">
						<label>EMAIL:</label>
						<input name='QID2096' type="text" id="input_mail" class="validate-email" tabindex="3"  title="email" value="" size="22" maxlength='150' required>
					</div>
					<div class="formitem">
						<label>ZIPCODE:</label>
						<input name='QID21914' type="text" id="zipcode" tabindex="4"  class="validate-numeric" title="zipcode" value="" size="10" maxlength='150' required>
					</div>
					<div class="checkbox">
						<input name='optin' type='checkbox' id='optin' value='1' required>
					</div>
					<div class="checkbox-text">
						<p>I agree to receive e-mail communications regarding AMResorts’ branded resorts as well as from affiliates of AMResorts within the Apple Leisure Group companies regarding 
							their travel and hospitality products and services, including Unlimited Vacation Club, AppleVacations, CheapCaribbean.com, Travel Impressions and Amstar. Once you have opted-in 
							to receive Email from us, you may choose to opt-out of Email communications at any time by updating your account.  For more information you can view our Privacy Policy.</p>
					</div>
                   <div class="formitem">
						<input type="image" name="but_img" class="content_button validate" src="images/button_sign_up.png">
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
				<center>Thank you!</center>You are now signed up to receive our latest news &amp; features, special promotions <br/>and subscribers-only limited offers and exclusive amenities. You can unsubscribe at any time.
			</div>
		</div>
	</div>        

	<script>
		jQuery("body").on( "click", "#sbox-overlay, #sbox-btn-close", function() {
			jQuery('.form_mail').show();
			jQuery('.form_mess').hide();
		});

		function submitOverride(){
			var $form = jQuery('.mail_sign_up'),
			$inputs = $form.find("input, select, button, textarea"),
			serializedData = $form.serialize();

			$inputs.attr("disabled", "disabled");

			jQuery.ajax({
				url: "http://esurvey.cendyn.com/eSurvey_Cendyn/SocialMediaAction.aspx?DisplayHeader=",
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
	</script>
</div>


