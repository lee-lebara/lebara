<!DOCTYPE HTML>
<html>

<?php $pageTitle = "Payment Details";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>
<script> 
$(document).ready(function(){
  $(".optional_create_account").click(function(){
    $(".toggleText_ca").slideToggle("200");
	$(".optional_create_account").hide("200");
	$(".create_account_intro_sentence").show("200");
  });
});
</script>

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

<script>
function autoRegister(){
    if( document.getElementById("boxRegistration").checked==true )
	{
        window.location="payment_details_cc_addregistration.php";
    } else { window.location="payment_details_cc.php"; };
}
</script>



<?php include($DOCUMENT_ROOT . "./includes/main_header.php"); ?>


<?php include($DOCUMENT_ROOT . "./includes/nav.php"); ?>

<h1 class="desktop_element product_header">Product - <span>Title</span></h1>

<div class="desktop_page_container mobile_element">

<div id="customer_main_details">
	<div class="mobile_number">Mobile Number: <span>07563372163</span></div>
</div>

<div class="content_box_invisible">
	<h3>Order Details</h3>
</div>

<div class="content_box">
	<h3><span>Amount due: </span>&pound;9.95</h3>
</div>

<div class="content_box">
	<h2>Payment Details</h2>
	<p>To pay securely enter your three-digit security code in the box below for the stored card number:<br />XXXX-XXXX-XXXX-2734</p>
    <div class="narrow_details_field"><span>Security Code</span>
    	<div class="security_code_field"><input type="text" pattern="[0-9]*" name="card_number" value="" /></div>
        <div class="security_code_whatis">
        	<input id="popup_trigger" value="What is this?" type="button" />
            <a href="choose_cc.php" class="new_card_link">Use a new or different card</a>
            	<div id="Popup">  
					<a id="popupClose">x</a>  
					<p>The security code is the last three digits that can be found on the back of your card:</p> 
                    <img src="images/lastthreedigits.jpg" alt="Back of Credit Card" />     
				</div>
                <!--<div class="tandcs_checkbox"><input type="checkbox" name="tandcs" value="true"> I agree with the <a href="terms_and_conditions.php" target="_blank">terms and conditions.</a></div>-->
				<div id="bgPopup"></div>  
         </div>
    </div>
    <div class="mi_pay_link">Payments powered by Mi-Pay Ltd.</div>
 <div class="clear"></div>
</div>


<div class="content_box_invisible">
	<div class="wide_button blue"><a href="payment_confirmation_cc.php"><span>COMPLETE MY PURCHASE</span></a></div>
    <a class="non_button_link" href="index.php">home</a>
	<a class="non_button_link_2" href="contact_us.php">contact customer services</a>
   <div class="clear"></div>
</div>
</div>


<!-- Desktop Content to Follow -->

<div class="desktop_page_container_bottomless desktop_element">

<div class="purchase_nav_container">
	<ol class="purchase_nav_ml">
		<li class="purchase_step_1">1. Choose Amount</li>
        <li class="purchase_step_2">2. Options</li>
        <li class="purchase_step_3 active_step">3. Your Details</li>
        <li class="purchase_step_4">4. Payment Method</li>
        <li class="purchase_step_5">5. Confirmation</li>
    </ol>
</div>

</div>

<div class="purchase_page_container desktop_element">

<form method="post" onSubmit="autoRegister(); return false;">

<div class="payment_container">
<h2>Your Details</h2>
<div class="customer_details_promo_box">
 <p>Make topping up quicker and easier next time by registering for MyLebara. It's simple to register and you can manage your account when it suits you.</p>
 <div class="optional_create_account"><a>Click here to add your password</a></div>
 <div class="create_account_intro_sentence" style="display: none;">Please add your password below</div>
 <div class="clear"></div>
    <div class="toggleText_ca" style="display: none;">
    <div class="narrow_details_field" style="margin-left: 0px; width: 100%;"><span style="width: 80px; margin-top: 3px;">Choose Password:</span><div class="narrow_input_field" style="width: 170px; margin-left: 10px;"><input type="password" name="password" /></div></div>
    <div class="narrow_details_field" style="margin-left: 0px; width: 100%;"><span style="width: 80px; margin-top: 3px;">Repeat password:</span><div class="narrow_input_field" style="width: 170px; margin-left: 10px;"><input type="password" name="repeat_password" /></div></div>
    <div class="tandcs_checkbox" style="width: 100%;"><input type="checkbox" name="tandcs" id="boxRegistration"> I agree with the <a href="terms_and_conditions.php" target="_blank">terms and conditions.</a></div>
    <p style="font-size: 0.7em; color: #b2b2b2;">[Development comment: this box only displayed if Lebara number entered on previous page not already registered to an account "primary or secondary"]</p>
    </div>
</div>

 <!--<p>You will receive an SMS verification code. Please input it here:</p>
<div class="narrow_details_field"><span>Name on Card</span><div class="narrow_input_field"><input type="text" name="card_name" value="" /></div></div>
    <div class="narrow_details_field"><span>*SMS Code</span><div class="narrow_input_field"><input type="tel" name="sms_verify" value="" /></div></div>-->

<p>Please input your name and email address:</p>
 <!--<div class="narrow_details_field"><span>Name on Card</span><div class="narrow_input_field"><input type="text" name="card_name" value="" /></div></div>-->
    <div class="narrow_details_field"><span>*First Name</span><div class="narrow_input_field"><input type="text" name="first_name" value="" /></div></div>
    <div class="narrow_details_field"><span>*Last Name</span><div class="narrow_input_field"><input type="text" name="first_name" value="" /></div></div>
	<div class="narrow_details_field"><span>*Email Address</span><div class="narrow_input_field"><input type="text" name="first_name" value="" /></div></div>
    <p>Please add the billing address (for your credit/debit card):</p>
	<div class="narrow_details_field"><span>*First line of address</span><div class="narrow_input_field"><input type="text" name="address_1" id="address_1" value="" placeholder="e.g. 28" /></div></div>
    <div class="narrow_details_field"><span>*Postcode</span><div class="narrow_input_field"><input type="text" name="postcode" id="postcode" value="" placeholder="eg AL9 6BL" /></div></div>
    <div class="clear"></div>
    <div class="lookup_button blue"><a class="auto_address_button" ><span>FIND ADDRESS</span></a></div>
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
    <div class="clear"></div>
    <div class="manual_fields" id="toggleText2" style="display: none;">
    	<div class="narrow_details_field"><span>*Street</span><div class="narrow_input_field"><input type="text" name="street" value="" /></div></div>
    	<div class="narrow_details_field"><span>*Town/City</span><div class="narrow_input_field"><input type="text" name="town_city" value="" /></div></div>
    </div>
    <p class="psp_para" style="width: 50%;">* This information is mandatory</p>
    <div class="tandcs_checkbox"><input type="checkbox" name="customer_communications" value="true"> Tick box if you do not wish to receive marketing emails and offers from Lebara Mobile.</div>
    <div class="clear"></div>
    <p class="psp_para" style="width: 50%;"><strong>Note:</strong> We only require your email address for the confirmation that we send. We will never contact you without your permission, or give your details to anyone else.</p>
    <div class="clear"></div>
    <!--<div class="horizontal_divider"></div>-->
    <!--<p class="psp_para"><a class="optional_create_account">Click here to create your MyLebara Account</a> to make purchases easier and quicker next time.</p>-->
    
<div class="clear"></div>
</div>

<div class="payment_container_bottom" style="width: 634px;"></div><input type="submit" class="purchase_options_container_continue_form"  style="padding: 20px 60px 0px 0px;" value="CONTINUE">


</form>
</div>

        <div class="clear"></div>

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
