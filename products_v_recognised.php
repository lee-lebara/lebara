<!DOCTYPE HTML>
<html>

<?php $pageTitle = "Enter Voucher Code";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header_recognised.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav_recognised.php"); ?>


<div class="content_box">
	<h2>Enter mobile number</h2>
    <p class="margin_bottom">Please enter the mobile number you would like to top up.</p>
	<div class="default_input_field"><input type="tel" name="mobile_number" value="07563372163" /></div>
</div>

<div class="content_box">
	<h2>Enter voucher code</h2>
    <p class="margin_bottom">Please enter a Lebara Mobile voucher code, then press 'continue to next step'</p>
	<div class="default_input_field"><input type="text" name="voucher_code" value="" /></div>
</div>

<div class="content_box_invisible">
	<div class="wide_button blue"><a href="payment_confirmation_v_recognised.php"><span>CONTINUE TO NEXT STEP</span></a></div>
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
