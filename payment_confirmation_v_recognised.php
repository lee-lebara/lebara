<!DOCTYPE HTML>
<html>

<?php $pageTitle = "Payment Confirmation";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header_recognised.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav_recognised.php"); ?>

<div id="customer_main_details">
	<div class="mobile_number">Mobile Number: <span>07563372163</span></div>
</div>

<div class="content_box">
<div class="confirmation_symbol"><img src="images/green_tick.jpg" alt="Green Tick" /></div>
	<h2>Payment Information</h2>
	<h3>Thank you!</h3>
    <p>Your top up voucher was successful and &pound;10 credit as been added to:<br />
    07563372163</p>
</div>

<div class="content_box">
	<h2>Your current balance:</h2>
	<div class="current_balance"><span>&pound;29.30</span> credit</div>
    <div class="current_balance"><span>&pound;2.50</span> bonus (expires in xx days)</div>
</div>

<div class="content_box">
	<h2>SPECIAL PROMOTIONS JUST FOR YOU:</h2>
	<div class="special_promotion"><a href="promotion_1_loggedin.php"><img src="images/special_promotion_1.jpg" alt="Special Promotion One" /></a></div>
    <div class="special_promotion promo_last"><a href="promotion_1_loggedin.php"><img src="images/special_promotion_2.jpg" alt="Special Promotion Two" /></a></div>
</div>


<div class="content_box_invisible">
	<a class="non_button_link" href="index_recognised.php">home</a>
	<a class="non_button_link_2" href="contact_us_recognised.php">contact customer services</a>
</div>

<script type="text/javascript">
   (function() {
       var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
       mf.src = "//cdn.mouseflow.com/projects/10238f32-7260-42b4-b8b5-eaff19eae982.js";
       document.getElementsByTagName("head")[0].appendChild(mf);
   })();
</script>

</body>
</html>
