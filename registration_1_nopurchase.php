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

<div class="page_notification">Step 1 of 4</div>

<div class="content_box_invisible">
	<h3>Sign Up</h3>
    <p>Now we need a few details from you to complete your sign-up.</p>
	<p>We'll store this information securely and won't share it with anyone else without asking you first.</p>
</div>

<div class="content_box">
	<h2>Your Lebara Phone Number</h2>
	<div class="default_input_field"><input type="tel" name="number" value="" /></div>
    <div class="clear"></div>
</div>

<div class="content_box_invisible">
	<div class="wide_button blue"><a href="registration_2_nopurchase.php"><span>CONTINUE TO NEXT STEP</span></a></div>
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
