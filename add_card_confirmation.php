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


<div id="customer_main_details">
	<div class="mobile_number">Mobile Number: <span>07563372163</span></div>
</div>

<div class="content_box">
<div class="confirmation_symbol"><img src="images/green_tick.jpg" alt="Green Tick" /></div>
	<h3>Success</h3>
    <p>You have added a new card to your account.</p>
    <p>Please <a href="payment_details_cc_loggedin.php">click here</a> to continue with your purchase.</p>
</div>

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


<div class="content_box_invisible">
	<div class="wide_button blue"><a href="products_cc_loggedin.php"><span>CONTINUE</span></a></div>
    <a class="non_button_link" href="index_loggedin.php">home</a>
    <a class="non_button_link_2" href="contact_us_loggedin.php">contact customer services</a>
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
