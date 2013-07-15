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

<div id="customer_main_details">
	<div class="mobile_number">Mobile Number: <span>07563372163</span></div>
</div>


<div class="content_box">
<div class="confirmation_symbol"><img src="images/green_tick.jpg" alt="Green Tick" /></div>
<h2>Payment Information</h2>
<h3>Success!</h3>
	<p>Your top up by card was successful and &pound;10 credit as been added to your account.</p>
	<p>We have also sent you an email with a validation link. To complete your registration, please click on this link and you will be able to log in to MyLebara.</p><br />
    <p>Your email validation is required to secure your identity and protect your information and SIM from fraudulent use.</p><br />
    <p>*Please check your inbox and your junk/spam folder as emails can occasionally go into junk/spam.</p><br />
    <p class="bolder_paragraph">You will shortly be receiving an email confirmation on this address: email@email.com</p><br />
    <p class="bolder_paragraph">The email will contain a link to verify you have signed up. Please select this to finalise the process.</p>
   <div class="clear"></div>
</div>

<!--<div class="content_box">
<div class="confirmation_symbol"><img src="images/green_tick.jpg" alt="Green Tick" /></div>
	<h2>Payment Information</h2>
	<h3>Great!</h3>
    <p>Your top up by card was successful and &pound;10 credit as been added to your account.</p>
</div>-->

<!--<div class="content_box renew">
	<h2>Auto Top Up:</h2>
    <div class="cb-bg">
    	<div class="cb-slider" cb-status="0"></div>
	</div>
    <div class="renew_content">
    	<p>Auto top up with: </p>
        <div class="renew_amount">
    		<select>
  				<option value="5">&pound;5</option>
  				<option value="10">&pound;10</option>
  				<option value="20">&pound;20</option>
  				<option value="30">&pound;30</option>
			</select>
       	</div>
    </div>
    <div class="balance_threshold_content">
    	<p>If my balance falls below: </p>
        <div class="balance_threshold_amount">
    		<select>
  				<option value="5">&pound;5</option>
  				<option value="10">&pound;10</option>
  				<option value="20">&pound;20</option>
  				<option value="30">&pound;30</option>
			</select>
       	</div>
    </div>
    <p><span>Payment wil be taken from your Default Card. If you'd like to change it, please <a href="#">click here</a>.</span></p>
</div>-->

<div class="content_box">
	<h2>Your current balance</h2>
	<div class="current_balance"><span>&pound;29.30</span></div>
    <div class="clear"></div>
</div>

<div class="content_box">
	<h2>SPECIAL PROMOTIONS JUST FOR YOU:</h2>
	<div class="special_promotion"><a href="promotion_1_loggedin.php"><img src="images/special_promotion_1.jpg" alt="Special Promotion One" /></a></div>
    <div class="special_promotion promo_last"><a href="promotion_1_loggedin.php"><img src="images/special_promotion_2.jpg" alt="Special Promotion Two" /></a></div>
    <div class="clear"></div>
</div>

<div class="content_box_invisible">
	<div class="wide_button blue"><a href="index_loggedin.php"><span>FINISH</span></a></div>
    <a class="non_button_link" href="index_loggedin.php">home</a>
	<a class="non_button_link_2" href="contact_us_loggedin.php">contact customer services</a>
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
