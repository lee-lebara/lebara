<!DOCTYPE HTML>
<html>

<?php $pageTitle = "Payment Confirmation";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav.php"); ?>

<h1 class="desktop_element product_header">Congratulations!</h1>



<!-- Desktop Content to Follow -->

<div class="desktop_page_container_bottomless desktop_element">

</div>

<div class="purchase_page_container desktop_element">


<div class="payment_container">
  <div class="section-2">
                            <div class="clear"></div>
                            <div class="confirmation_symbol"><img src="images/green_tick.jpg" alt="Green Tick" /></div>
                            <h2 style="font-family: GothamBook;">You have successfully created your MyLebara account.</h2>
                            <p class="psp_para">If you experience any problems contact <a href="contact_us.php">customer services here</a>.</p>
                            <p class="psp_para">You will receive an SMS verification code to activate your MyLebara account. Please input it here:</p>
                            <div class="sms-code-form-row">
                              <!-- Error field -->
                              <!--
                              <div class="input-error-message">The number is incorrect</div>
                              -->
         					  <div class="narrow_details_field" style="width: 75%; margin-bottom: 40px;"><span>*SMS Code</span>
    						  <div class="narrow_input_field" style="margin-top: 3px;">
    						    <input type="tel" name="sms_verify" value="" />
                                <div class="clear"></div>
    						  </div>
    						  <a href="" class="rates_table_button blue" style="width: 80px;">SUBMIT</a></div>
    						</div>
                            <div class="clear"></div>
 							<p class="psp_para">You will also receive an email confirmation which we will send to the email address you gave us.</p>	
                            
                            
<div class="confirmation_upsells">
	<h4>Popular products you might be interested in:</h4>
	<a href="uk_plus.php" class="upsell_1">
    <h5>UK Plus</h5>
    <h6>One SIM for all your needs</h6>
    <p>Call friends in UK, browse internet and get discounts on international calls for just <span>&pound;7.95</span></p>
    </a>
	<a href="data_passes.php" class="upsell_2">
    <h5>Mobile Internet</h5>
    <h6>Connected on the go</h6>
    <p>Stay connected on the go with our great value Mobile Internet passes - <span>10MB, 500MB</span> and <span>1GB</span></p>
    </a>
</div>
                            
<div class="clear"></div>
</div></div>


<div class="payment_container_bottom"></div><a id="customer_popup_trigger_prod" class="purchase_options_container_continue" href="index.php" style="padding-right: 80px; width: 158px;">FINISH</a>


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
