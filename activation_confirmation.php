<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "Payment Confirmation";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav.php"); ?>

<h1 class="desktop_element product_header">My<span>Lebara</span></h1>

<div id="customer_main_details">
	<div class="mobile_number">Mobile Number: <span>07563372163</span></div>
</div>

<div class="content_box mobile_element">
<div class="confirmation_symbol"><img src="images/green_tick.jpg" alt="Green Tick" /></div>
	<h2>Payment Information</h2>
	<h3>Thank You!</h3>
    <p>Your payment of &pound;10 has been added to your account and we have given you an additional credit of &pound;2.50</p>
    <div class="clear"></div>
</div>

<div class="content_box mobile_element">
	<h2>Your current balance:</h2>
	<div class="current_balance"><span>&pound;29.30</span> credit</div>
    <div class="current_balance"><span>&pound;2.50</span> bonus (expires in xx days)</div>
</div>

<div class="content_box mobile_element">
	<h2>SPECIAL PROMOTIONS JUST FOR YOU:</h2>
	<div class="special_promotion"><a href="promotion_1_loggedin.php"><img src="images/special_promotion_1.jpg" alt="Special Promotion One" /></a></div>
    <div class="special_promotion promo_last"><a href="promotion_1_loggedin.php"><img src="images/special_promotion_2.jpg" alt="Special Promotion Two" /></a></div>
    <div class="clear"></div>
</div>


<div class="content_box_invisible mobile_element">
	<a class="non_button_link" href="index_loggedin.php">home</a>
	<a class="non_button_link_2" href="contact_us_loggedin.php">contact customer services</a>
    <div class="clear"></div>
</div>



<!-- Desktop Content to Follow -->


<div class="purchase_page_container desktop_element">


<div class="desktop_page_container activation_confirmation">
 <div class="section-2">
                            <h2 class="success_message" style="float: left; font-size: 3em;">Your Product Has Been Activated</h2>
                            <div class="clear"></div>
                            <div class="blue_information_box">
                            	<h4 style="font-family: GothamBook;">&pound;10 has been added to your account, PLUS a free credit of &pound;2.50</h4>
                                <div class="clear"></div>
                            </div>
                            <p class="psp_para">Your order number is xxxxxx, if you experience any problems contact <a href="contact_us.php">customer services here</a>.</p>
                            <div class="clear"></div>
                            <a href="/lebara/login.php" class="signin_button blue">View Your Lebara</a>
                                              
<div class="clear"></div>
</div></div>




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
