<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "View Balance";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>

<!-- Include dashboard js file on MyLebara -->
<script src="js/mylebara.dash.js"></script>

<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>



<!-- ADYEN POPUP -->
<div id="overlay_ml">
    <h2>ADYEN</h2>
	<p>Are you sure you want to make this change?:</p>     
	<a class="overlayClose_ml">YES</a>
    <a class="overlayClose_ml">NO</a>
</div>




<!-- MYPAY POPUP -->
<div id="overlay_ml2">
    <h2>MI-PAY</h2>
	<p>Are you sure you want to make this change? :</p>
	<a class="overlayClose_ml_yes">YES</a>
    <a class="overlayClose_ml_no">NO</a>
</div>


<div id="bgOverlay_ml"></div>

<h1 class="desktop_element product_header">My<span>Lebara</span></h1>


<!-- Add class .card-added-confirm -->
<div class="desktop_page_container card-added-confirm">

    <div id="card-added-success" class="alert-success">
        <h2><a id="closeThis" class="closeIcon right">X</a>Thank you, your card details are now saved.</h2>
    </div>

<div class="mylebara_page_header">
	<h2 class="mylebara_header">Hi John</h2><div class="last_login_details">Last login: 12 Jun-2013</div>
</div>

    <!-- Check if MyPay, if yes add ID #mypay-gateway to allow one item toggled else no ID to allow multiple -->

	<div id="mypay-gateway" class="mylebara_primary_content">
        
        <div class="mylebara_content_box">
    	<div class="mylebara_content_box_header">Manage Top Up / Auto Renew</div>
    	<table class="mylebara_table" width="100%" cellpadding="0" cellspacing="0">
            <tr class="autorenew_headers">
            	<td>Product</td><td>&nbsp;</td><td>Auto-renew:</td>
            </tr>

        	<tr class="odd">
              <td>Auto Top Up</td>
              <td>Auto Top Up with
                <select>
                  <option value="5">&pound;5</option>
                  <option value="10">&pound;10</option>
                  <option value="20">&pound;20</option>
                  <option value="30">&pound;30</option>
                </select> when my balance reaches &pound;2</td>
              <td>
                <div class="cb-bg_small">
                  <a class="auto_topup_switch">
                    <div class="cb-slider_small" cb-status="0"></div>
                  </a>
                </div>
                <a class="mylebara_save_button overlay_trigger_ml">SAVE</a>
              </td>
            </tr>
            <tr>
              <td>Unlimited L2L SMS</td>
              <td>Currently set to <a class="set_or_not" style="display: none;">NOT </a>auto renew on expiry</td>
              <td>
                <div class="cb-bg_small">
                  <a class="auto_topup_switch">
				  <!-- change cb-status to 1 for on state for default option when saved -->
                    <div class="cb-slider_small" cb-status="0"></div>
                  </a>
                </div>
                <a class="mylebara_save_button overlay_trigger_ml">SAVE</a>
              </td>
            </tr>

            <tr class="odd">
              <td>Data Pass</td>
              <td>Currently set to <a class="set_or_not" style="display: none;">NOT </a>auto renew on expiry</td>
              <td>
                <div class="cb-bg_small">
                  <a class="auto_topup_switch">
                    <div class="cb-slider_small" cb-status="0"></div>
                  </a>
                </div>
                <a class="mylebara_save_button overlay_trigger_ml">SAVE</a>
              </td>
            </tr>

          </table>
    </div>
    
    
    
	</div>
    
    


<div class="mylebara_summary_panel">
	<p>Your PAYG Balance:</p>
    <div class="summary_total">&pound;25.42</div>
    <p>Your All-In-One Balance:</p>
    <div class="summary_total">&pound;10.00</div>
    <a href="products_cc_loggedin.php" class="mylebara_topup_button">TOP UP NOW</a>
    	<ul>
        	<li><a href="#"><img src="./images/mylebara_icon_profile.gif" alt="Profile"><span>Profile</span></a></li>
            <li><a href="#"><img src="./images/mylebara_icon_settings.gif" alt="Settings"><span>Settings</span></a></li>
            <li><a href="#"><img src="./images/mylebara_icon_password.gif" alt="Change Password"><span>Change Password</span></a></li>
        </ul>
</div>


<div class="mylebara_primary_content">
        
        <div class="mylebara_content_box">
    	<table class="mylebara_table" width="100%" cellpadding="0" cellspacing="0">
            <tr class="autorenew_headers">
            	<td>Bundles</td><td>Remaining</td><td>Expires</td>
            </tr>
            <tr>
            	<td>Unlimited L2L Mins</td><td>Currently set to <a class="set_or_not" style="display: none;">NOT </a>Unlimited</td><td>2013-07-13</td>
            </tr>
            <tr class="odd">
            	<td>Unlimited L2L SMS</td><td>Currently set to <a class="set_or_not" style="display: none;">NOT </a>Unlimited</td><td>2013-07-13</td>
            </tr>
        </table>
    </div>
    
    
    
	</div>


<div class="clear"></div>
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
