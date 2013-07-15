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

<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>


<h1 class="desktop_element product_header">Product - <span>Title</span></h1>


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

<div class="desktop_page_container_bottomless desktop_element">

<div class="purchase_nav_container">
	<ol class="purchase_nav_ml">
		<li class="purchase_step_1">1. Choose Amount</li>
        <li class="purchase_step_2">2. Options</li>
        <li class="purchase_step_3">3. Your Details</li>
        <li class="purchase_step_4">4. Payment Method</li>
        <li class="purchase_step_5 active_step">5. Confirmation</li>
    </ol>
</div>

</div>

<div class="purchase_page_container desktop_element">






<div class="purchase_page_container desktop_element">



<div class="payment_container">
 	<div class="section-2">
	<h2 class="success_message" style="float: left; font-size: 3em;">Thank You!</h2>
    <div class="clear"></div>                        
    	<div class="blue_information_box">
        	<h4 style="font-family: GothamBook;">&pound;10 has been added to your account, PLUS a free credit of &pound;2.50</h4>
            <div class="clear"></div>
        </div>
    </div>
<p class="psp_para">Your order number for reference is xxxxxxxxx. If you have any problems with your top-up you can contact <a href="contact_us.php">customer services here</a>.</p>
<p>Your current balance:</p>
<h4 style="font-size: 2em; color: #00a6eb; font-family: GothamBold;">&pound;29.30 <span style="color: #000000; font-size: 0.5em;">credit</span></h4>
<h4 style="font-size: 2em; color: #00a6eb; font-family: GothamBold;">&pound;2.50 bonus <span style="color: #000000; font-size: 0.5em;">(expires in xx days)</span></h4>
                            
<div class="confirmation_upsells">
	<h4>Popular products you might be interested in:</h4>
	<a href="uk_plus_loggedin.php" class="upsell_1">
    <h5>UK Plus</h5>
    <h6>One SIM for all your needs</h6>
    <p>Call friends in UK, browse internet and get discounts on international calls for just <span>&pound;7.95</span></p>
    </a>
	<a href="data_passes_loggedin.php" class="upsell_2">
    <h5>Mobile Internet</h5>
    <h6>Connected on the go</h6>
    <p>Stay connected on the go with our great value Mobile Internet passes - <span>10MB, 500MB</span> and <span>1GB</span></p>
    </a>
</div>
                            
                            
<div class="clear"></div>
</div>



<div class="payment_container_bottom"></div><a id="customer_popup_trigger_prod" class="purchase_options_container_continue" href="index_loggedin.php" style="padding-right: 80px; width: 158px;">FINISH</a>

</div>

<div class="clear"></div>
</div>

<?php include($DOCUMENT_ROOT . "./includes/page_rate.php"); ?>


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
