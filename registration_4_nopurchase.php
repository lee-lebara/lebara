<!DOCTYPE HTML>
<html>

<?php $pageTitle = "Register with Lebara";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav.php"); ?>

<div class="desktop_page_container">

<script>
$(document).ready(function(){

if(!Modernizr.input.placeholder){

	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
		input.val('');
		input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
		input.addClass('placeholder');
		input.val(input.attr('placeholder'));
	  }
	}).blur();
	$('[placeholder]').parents('form').submit(function() {
	  $(this).find('[placeholder]').each(function() {
		var input = $(this);
		if (input.val() == input.attr('placeholder')) {
		  input.val('');
		}
	  })
	});

}

});
</script>

<script> 
$(document).ready(function(){
  $(".auto_address_button").click(function(){
    $("#toggleText").slideToggle("100");
  });
  $("#manual_address_button").click(function(){
    $("#toggleText2").slideToggle("100");
  });
});
</script>

<script>
	$(document).ready(function(){
    $('a.auto_address_button').click(function(){
        $(this).toggleClass("selected");
    });
});
	$(document).ready(function(){
    $('a#manual_address_button').click(function(){
        $(this).toggleClass("selected");
    });
});
</script>

<script>
function populateForm(){
  document.getElementById("address_1").value = "1 White City Road";
  document.getElementById("postcode").value = "W12 7EG";
 return true; //if you want to proceed with the submission or whatever your button does, otherwise return false
}
</script>


<div class="page_notification">Step 4 of 4</div>

<div class="content_box_invisible">
	<h3>Sign Up</h3>
	<p>We need your address to confirm your identity and to protect your account from fraudulent users. Simply enter your postcode and we'll fill in the rest.</p>
    <div class="clear"></div>
</div>

<div class="content_box">
    <h2>Personal Details</h2>
	<div class="narrow_details_field"><span>*First line of address</span><div class="narrow_input_field"><input type="text" name="address_1" id="address_1" value="" placeholder="e.g. 28" /></div></div>
    <div class="narrow_details_field"><span>*Postcode</span><div class="narrow_input_field"><input type="text" name="postcode" id="postcode" value="" placeholder="eg AL9 6BL" /></div></div>
    <div class="lookup_button blue"><a class="auto_address_button" ><span>LOOK UP</span></a></div>
    <div class="address_picker" id="toggleText" style="display: none">
    	<ul>
        	<li><a onClick="return populateForm();" class="auto_address_button">1 White City Road, LONDON, W12 7EG</a></li>
            <li><a onClick="return populateForm();" class="auto_address_button">2 White City Road, LONDON, W12 7EG</a></li>
            <li><a onClick="return populateForm();" class="auto_address_button">3 White City Road, LONDON, W12 7EG</a></li>
            <li><a onClick="return populateForm();" class="auto_address_button">4 White City Road, LONDON, W12 7EG</a></li>
            <li><a onClick="return populateForm();" class="auto_address_button">5 White City Road, LONDON, W12 7EG</a></li>
            <li><a onClick="return populateForm();" class="auto_address_button">6 White City Road, LONDON, W12 7EG</a></li>
            <li><a onClick="return populateForm();" class="auto_address_button">7 White City Road, LONDON, W12 7EG</a></li>
            <li><a onClick="return populateForm();" class="auto_address_button">8 White City Road, LONDON, W12 7EG</a></li>
        </ul>
    </div>
    <div class="clear"></div>
    <a class="manual_address_entry" id="manual_address_button"><span>Enter address manually</span></a>
    <div class="manual_fields" id="toggleText2" style="display: none;">
    	<div class="narrow_details_field"><span>*Street</span><div class="narrow_input_field"><input type="text" name="street" value="" /></div></div>
    	<div class="narrow_details_field"><span>*Town/City</span><div class="narrow_input_field"><input type="text" name="town_city" value="" /></div></div>
    </div>
    
    <div class="tandcs_checkbox"><input type="checkbox" name="tandcs" value="true"> I agree with the <a href="terms_and_conditions.php" target="_blank">terms and conditions.</a></div>
    <div class="tandcs_checkbox"><input type="checkbox" name="customer_communications" value="true"> Tick box if you do not wish to receive marketing emails and offers from Lebara Mobile.</div>
    <div class="clear"></div>
</div>

<div class="content_box_invisible">
	<div class="wide_button blue"><a href="registration_success_nopurchase.php"><span>CONTINUE TO NEXT STEP</span></a></div>
    <a class="non_button_link" href="index.php">home</a>
	<a class="non_button_link_2" href="contact_us.php">contact customer services</a>
    <div class="clear"></div>
</div>

</div>

<?php include($DOCUMENT_ROOT . "./includes/footer_desktop.php"); ?>

<script type="text/javascript">
   (function() {
       var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
       mf.src = "//cdn.mouseflow.com/projects/10238f32-7260-42b4-b8b5-eaff19eae982.js";
       document.getElementsByTagName("head")[0].appendChild(mf);
   })();
</script>

</body>
</html>
