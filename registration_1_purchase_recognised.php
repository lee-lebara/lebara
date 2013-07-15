<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "Register with Lebara";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header_recognised.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav_recognised.php"); ?>

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

<div class="page_notification">Step 1 of 3</div>

<div class="content_box_invisible">
	<h3>Sign Up</h3>
</div>

<div class="content_box">
	<h2>Your Mobile Number</h2>
	<h3>07503 549 427</h3>
    <div class="clear"></div>
</div>

<div class="content_box_invisible">
	<p>Setting up your MyLebara account.<br />
    Your personal information is stored securely. Lebara Mobile will not share any of your information with anyone else without your explicit concent</p>
    <p>For successful registration, please enter and confirm your valid email address. We will send a validation link to your email address. If you don't receive the link, please check your Junk/Spam folder.</p>
	<div class="clear"></div>
</div>

<div class="content_box">
	<div class="narrow_details_field"><span>*Email</span><div class="narrow_input_field"><input type="text" name="email" value="" placeholder="enter your email" /></div></div>
    <div class="narrow_details_field"><span>*Password</span><div class="narrow_input_field"><input type="text" name="password" value="" placeholder="8 to 50 characters" /></div></div>
    <div class="narrow_details_field"><span>*Repeat Password</span><div class="narrow_input_field"><input type="text" name="password" value="" placeholder="repeat password" /></div></div>
    <div class="narrow_details_field"><span>*First Name</span><div class="narrow_input_field"><input type="text" name="first_name" value="" placeholder="enter your first name" /></div></div>
    <div class="narrow_details_field"><span>*Last Name</span><div class="narrow_input_field"><input type="text" name="last_name" value="" placeholder="enter your last name" /></div></div>
	<div class="clear"></div>
</div>


<div class="content_box_invisible">
	<div class="wide_button blue"><a href="registration_2_purchase_recognised.php"><span>CONTINUE TO NEXT STEP</span></a></div>
    <a class="non_button_link" href="index_recognised.php">home</a>
	<a class="non_button_link_2" href="contact_us_recognised.php">contact customer services</a>
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
