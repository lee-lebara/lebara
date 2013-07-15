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




<div id="wrapper" class="desktop_element">
            <!-- main contant -->
            <div id="sim-purchase-setp-1" class="sim-purchase">
                <h1 class="accessibility"> SIM Purchase - Step 1 of 3</h1>
                <!-- form contant -->
                <form name="step01" id="step01" >
                    <div class="form-elements">
                       <!-- <div class="section-1">
                            <ol class="stepList">
                                <li class="stepList-1">
                                    1. Select a SIM &amp; product
                                </li>
                                <li class="stepList-2">
                                    2. Personal Details
                                </li>
                                <li class="stepList-3">
                                    3. Payment Method
                                </li>
                                <li class="stepList-3 active_step">
                                    4. Confirmation page
                                </li>
                            </ol>
                        </div>-->
                        
                         <div class="section-1">
                            <ol class="stepList_ml">
                                <li class="stepList-1">
                                    1. Select your Top Up
                                </li>
                                <li class="stepList-2">
                                    2. Payment Method
                                </li>
                                <li class="stepList-3 active_step">
                                    3. Confirmation page
                                </li>
                            </ol>
                        </div>
                        
                        <div class="section-2">
                            <h2>Confirmation Page</h2>
                            
                            <div class="blue_information_box">
                            	<h3>Registration &amp; Payment are successful. Please confirm your registration via email.</h3>
                                <p style="color: #ffffff; margin: 5px 0px;">When you receive yoru new SIM card we will email you an E-PIN</p>
                                <p style="color: #ffffff; margin: 5px 0px;">Follow the instructions and enter your E-PIN to Top Up your phone.</p>
                                <p style="color: #ffffff; margin: 5px 0px;">If you don't receive your SIM card or E-PIN within 3 to 5 days, please contact <a href="#">customer services</a></p>
                                <div class="clear"></div>
                            </div>
                            
                            <p class="psp_para">Congratulations and thank you for your order. You have successfully ordered the following.</p>
                            <p class="psp_para">We have emailed you the receipt to the following email address: example@example.com</p>
                            
                            <table width="100%" class="product_confirmation_info">
                            	<tr class="underline_row"><td>Order</td><td>Date</td><td>Item(s)</td><td class="last">Price</td></tr>
                                <tr><td>123456 - 1354</td><td>12/04/2013</td><td>NanoSIM + Top Up Credit Call</td><td class="last">&pound;20</td></tr>
                                <tr><td>&nbsp;</td><td>&nbsp;</td><td>Auto Top Up (Pay &pound;20 Receive &pound;30)</td><td class="last">-</td></tr>
                                <tr class="underline_row"><td>&nbsp;</td><td>&nbsp;</td><td>NanoSIM (for iPhone 5 or iPad Mini)</td><td class="last">Free</td></tr>
                                <tr><td>&nbsp;</td><td>&nbsp;</td><td style="text-align:right">Discount</td><td class="last">-&pound;5</td></tr>
                                <tr class="total_row"><td>&nbsp;</td><td>&nbsp;</td><td style="text-align:right">Total Payment</td><td class="last">&pound;15</td></tr>
                            </table>
                        </div>
                    </div>
                    <div>
                        
                        <div class="form_bottom_styling_left">&nbsp;</div>
                    <div class="clear"></div>
                    	<div class="formbase_left_container">
                        </div>
                        <div class="continue_button_container">
                            <button type="button" class="ui-btn-primary btn-continue"  onClick="parent.location='index_loggedin.php'" >Home</button>
                        </div>
                       
                        
                        
                    </div>
                </form>
                <!-- /form contant -->
                <div class="payment-info">
                    <div class="payament-detail">
                        <h2>Payment Details</h2>
                        <div class="">
                            <span id="sim-error-detail" class=" error-message-holder hide">Select SIM Card Type</span>
                            <span id="product-error-detail" class="error-message-holder hide">Choose a product</span>
                        </div>
                        <div class="payament-detail-info">
                            <div class="level-1 line-hr">
                                <div class="payment-lbl">
                                    SIM card Type:
                                    <div class="payament-detail-content" id="sim-card-type">
                                        MicroSIM
                                    </div>
                                </div>
                                <div class="payment-lbl">
                                    Unlimited
                                    <div class="payament-detail-content">
                                        <span id="unlimited-value"> &pound; 9.95 </span>
                                    </div>
                                </div>
                                <div class="payment-lbl">
                                    Auto Renew (30 days)
                                    <div class="payament-detail-content">
                                        <span id="auto-renew-needed">OFF</span>
                                    </div>
                                </div>
                                <div class="payment-lbl hide">
                                    Extra NanoSIM
                                    <div class="payament-detail-content">
                                        <span id="extra-sim">No</span>
                                    </div>
                                </div>
                            </div>
                            
                        <h2 style="padding-top: 20px;">Name, email &amp; address</h2>
                            <div class="customer_info line-hr">
                                <div class="payment-lbl">
                                	<div id="payment_info_firstname">John</div>
                                </div>
                                <div class="payment-lbl">
                                	<div id="payment_info_lastname">Smith</div>
                                </div>
                                <div class="payment-lbl">
                                	<div id="payment_info_email">johnsmith@gmail.com</div>
                                </div>
                                <div class="payment-lbl">
                                	<div id="payment_info_address_1">1 White City Road</div>
                                </div>
                                <div class="payment-lbl">
                                	<div id="payment_info_address_2">W12 7EG</div>
                                </div>
                                <div class="payment-lbl">
                                	<div id="payment_info_address_3">United Kingdom</div>
                                </div>
                            </div>
                            <div class="level-1">
                                <div class="payment-lbl">
                                    Total Payment
                                    <div class="payament-detail-content" id="total-payment">
                                        &pound; 9.95
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
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
