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

<script>

$(document).ready(function(){
    initCheckBoxes();
});

var slideSpeed = 50;
var leftDist = 30.75;

function initCheckBoxes()
{
    $( ".cb-slider_small" ).attr('is_active', false);   //to track if the slider was dragged completely and released outside
    $( ".cb-slider_small" ).draggable({
         containment: "parent",
         stop: function(event, ui){
             //trigger a mouse up only if is_active is left at true
            if($(ui.helper).attr('is_active')) $(ui.helper).mouseup();
         }
    });

    $(".cb-slider_small").mousedown(function(){
        //set is active to true so that we can check on drag complete if its still true and take necessary action
        $(this).attr("is_active", true);
    });

    $(".cb-slider_small").mouseup(function(){

    var status = $(this).attr("cb-status");

    switch(status)
    {
        case "0":
        //its off, slide it by 41px;
        $(this).animate({left: leftDist}, slideSpeed);
        //change status to 1
        $(this).attr("cb-status", "1");
        break;

        case "1":
        //its 'on', slide it to 0px;
        $(this).animate({left: "0"}, slideSpeed);
        //change status to 0
        $(this).attr("cb-status", "0");

        break;
    }
    $(this).attr("is_active", false);  //reset
 });
}

</script>


<script> 
$(document).ready(function(){
  $("select").click(function(){
    $("#save_autotopup_button_showhide").show("100");
  });
});
</script>

<script> 
$(document).ready(function(){
  $(".auto_topup_switch").click(function(){
    $("#save_autotopup_button_showhide").show("100");
  });
});
</script>



<script>
	$(document).ready(function(){
    $('a#save_autotopup_settings').click(function(){
        $("#save_autotopup_button_showhide").hide("100");
    });
});
</script>

<script> 
$(document).ready(function(){
  $("#dropdown_reveal_button_un").click(function(){
    $("#toggleText_un").slideToggle("100");
  });
});
</script>





<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>



<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

<h1 class="desktop_element product_header">My<span>Lebara</span></h1>

<div class="desktop_page_container">


<div class="dashboard_top">
<form action="" method="post" onSubmit="changeSettings(); return false;">
	<div class="summary_info">
	<h2>Your Phone Number:</h2>
	<div class="phone_choice_dropdown">
		<select>
  		<option value="number_1">07967 123 456 (My Phone)</option>
  		<option value="number_2">07986 654 321 (My Second Phone)</option>
		</select>
 	</div>
    <h2>Your Current Balance:</h2>
    <div class="balance">&pound;29.30 <span>credit</span></div>
    <div class="balance">&pound;2.50 <span>bonus (expires in xx days)</span></div>
    <a class="dashboard_topup" href="payment_details_cc_loggedin.php" style="padding-top: 10px;">Top Up <strong style="font-size: 1.4em;">&pound;5</strong> Now</a>
    <a class="dashboard_topup" href="payment_details_cc_loggedin.php">Top Up <strong style="font-size: 1.4em;">&pound;10</strong> Now<br><span>with <strong style="font-size: 1.4em;">&pound;2.50</strong> FREE Credit</span></a>
    <a class="dashboard_topup" href="payment_details_cc_loggedin.php">Top Up <strong style="font-size: 1.4em;">&pound;20</strong> Now<br><span>with <strong style="font-size: 1.4em;">&pound;10</strong> FREE Credit - <strong style="font-size: 1.4em;">BEST OFFER</strong></span></a>
    <a class="dashboard_topup" href="payment_details_cc_loggedin.php">Top Up <strong style="font-size: 1.4em;">&pound;30</strong> Now<br><span>with <strong style="font-size: 1.4em;">&pound;10</strong> FREE Credit</span></a>
    <a href="#" style="color: #ffffff; float: right; margin-top: 30px; font-size: 0.8em;">Add another Lebara number</a>
</div>
    
    <div class="product_settings">
    	<h3>Your products on this number:</h3>
        <div class="controls_payg">
        	<h4>Pay As You Go</h4>
            <div class="controls_icon"><img src="./images/payg_dashboard.gif" alt="Pay As You Go"></div>
    		<!--<div class="controls_content">Top Up with 
        		<select>
  					<option value="5">&pound;5</option>
  					<option value="10">&pound;10</option>
  					<option value="20">&pound;20</option>
  					<option value="30">&pound;30</option>
				</select> when my balance reaches
            	<select>
  					<option value="2">&pound;2</option>
  					<option value="5">&pound;5</option>
  					<option value="10">&pound;10</option>
  					<option value="20">&pound;20</option>
				</select>
        	</div>-->
            <div class="controls_content">Auto Top Up is ON - set to add &pound;20 when your balance reaches &pound;2.</div>
        	<div class="renew_switcher_description">Set Auto Top Up:</div><div class="cb-bg_small" style="margin: 0px;"><a class="auto_topup_switch"><div class="cb-slider_small" cb-status="0"></div></a></div>
        </div>
        
        <div class="controls_unlimited">
        	<h4>Unlimited 29</h4>
            <div class="controls_icon"><img src="./images/unlimited_dashboard.gif" alt="Unlimited"></div>
    		<div class="controls_content">Your auto-renew take effect when your current pass expires on 30th July.</div>
             <div class="renew_switcher_description">Set Auto Renew:</div><div class="cb-bg_small" style="margin: 0px;"><a class="auto_topup_switch"><div class="cb-slider_small" cb-status="0"></div></a></div>
            <a id="dropdown_reveal_button_un"><span>MORE</span></a>
            <div class="dropdown_details" id="toggleText_un" style="display: none">
    			<table cellpadding="0" cellspacing="0" width="100%" style="font-size: 1.5em;">
        		<tr>
            		<td><span>Bundles</span></td><td><span>Remaining Credit</span></td><td><span>Expiry Date</span></td>
            	</tr>
        		<tr>
            		<td>Unlimited voice</td><td>Unlimited mins</td><td>03 Mar</td>
            	</tr>
        		<tr>
            		<td>Unlimited SMS</td><td>Unlimited texts</td><td>03 Mar</td>
            	</tr>
        		</table>
        		<p style="font-size: 1.1em;">For more information, please go to our <a href="terms_and_conditions.php" target="_blank">terms and conditions</a></p>
    		</div>
           
        </div>
        
        <h3 style="margin-top: 20px; float: left;">Products not yet activated:</h3>
        
        <div class="controls_suggested" style="margin-bottom: 20px;">
        	<h4>Data Pass</h4>
            <div class="controls_icon"><img src="./images/data_dashboard_inactive.png" alt="Data Passes"></div>
        	<h5>Suggested for you:</h5>
    		<div class="controls_suggested_content">Access your favourite sites, including Facebook, Google and Twitter and view maps, photos and videos on your phone. <a href="data_pass.php" class="activate_suggested">READ MORE</a></div>
        </div>
        
        <div class="controls_suggested">
        	<h4>UK Plus</h4>
            <div class="controls_icon"><img src="./images/ukplus_dashboard_inactive.png" alt="UK Plus"></div>
        	<h5>Suggested for you:</h5>
    		<div class="controls_suggested_content">Call your friends in the UK, browse the internet and get discounts on your international calls with one SIM. <a href="uk_plus_loggedin.php" class="activate_suggested">READ MORE</a></div>
        </div>
        
        <div class="clear"></div>
    <div id="save_autotopup_button_showhide" style="display: none;">
    	<a id="save_autotopup_settings" class=" blue"><span>SAVE SETTINGS</span></a>
    </div>
    
    </div>
</form>
    <div class="clear"></div>
    
</div>




<div id="dashboard_main" class="Hide">
<h3><a>My Account</a></h3><div class="last_login_details">Last login 21-May-2013</div>
<div class="clear"></div>
<div class="content_box">
    
    
    
    <div class="dashboard_feature_box">
    	<a data-type="dashboard_one" class="dashboard_feature_box_panel"><img src="./images/dashboard_panel_topuphistory.gif" alt="My Top Up History - see more"></a>
    </div>

	<div class="dashboard_feature_box">
    	<a data-type="dashboard_two" class="dashboard_feature_box_panel"><img src="./images/dashboard_panel_myusage.gif" alt="My Usage - see more"></a>
    </div>

	<div class="dashboard_feature_box">
    	<a data-type="dashboard_three" class="dashboard_feature_box_panel"><img src="./images/dashboard_panel_mysettings.gif" alt="My settings - see more"></a>
    </div>

	<div class="dashboard_feature_box">
    	<a data-type="dashboard_four" class="dashboard_feature_box_panel"><img src="./images/dashboard_panel_newsim.gif" alt="Do you need a new SIM? See more"></a>
    </div>
    
	<div class="dashboard_feature_box">
    	<a data-type="dashboard_five" class="dashboard_feature_box_panel"><img src="./images/dashboard_panel_newaccount.gif" alt="Do you need to add another account? See more"></a>
    </div>
    
    <div class="dashboard_feature_box">
    	<a href="#"><img src="./images/dashboard_offer.jpg" alt="Half Price Data"></a>
    </div>
    
    
    <!--<div class="dashboard_feature_box">
    	<div class="dashboard_feature_box_content">
    	<h4>My Top Up History</h4>
    	</div>
    	<a data-type="dashboard_one" class="dashboard_feature_box_bottom"><img src="./images/dashboard_feature_bottom.gif" alt="See All"></a>
    </div>

	<div class="dashboard_feature_box">
    	<div class="dashboard_feature_box_content">
    	<h4>My Usage</h4>
    	</div>
    	<a data-type="dashboard_two" class="dashboard_feature_box_bottom"><img src="./images/dashboard_feature_bottom.gif" alt="See All"></a>
    </div>

	<div class="dashboard_feature_box">
    	<div class="dashboard_feature_box_content">
    	<h4>My Settings</h4>
    	</div>
    	<a data-type="dashboard_three" class="dashboard_feature_box_bottom"><img src="./images/dashboard_feature_bottom.gif" alt="See All"></a>
    </div>

	<div class="dashboard_feature_box">
    	<div class="dashboard_feature_box_content">
    	<h4>Do you need a new SIM?</h4>
    	</div>
    	<a data-type="dashboard_four" class="dashboard_feature_box_bottom"><img src="./images/dashboard_feature_bottom.gif" alt="See All"></a>
    </div>
    
	<div class="dashboard_feature_box">
    	<div class="dashboard_feature_box_content">
    	<h4>Do you need to add another account?</h4>
    	</div>
    	<a data-type="dashboard_five" class="dashboard_feature_box_bottom"><img src="./images/dashboard_feature_bottom.gif" alt="See All"></a>
    </div>
    
    <div class="dashboard_feature_box">
    	<a href="#"><img src="./images/dashboard_offer.jpg" alt="Half Price Data"></a>
    </div>-->
    <div class="clear"></div>
</div>
</div>


<div id="dashboard_one" class="Hide" style="display: none;">
<h3><a class="dashboard_feature_box_panel underline" data-type="dashboard_main">My Account</a> > My Top Up History</h3><div class="last_login_details">Last login 21-May-2013</div>
<div class="clear"></div>
<div class="content_box">
	
    <div class="balance_box">
    	<div class="balance_box_header"><span>Lebara to Lebara</span>For more information, please refer to our <a href="terms_and_conditions.php" target="_blank">terms and conditions</a></div>
    	<table width="100%" cellpadding="0" cellspacing="0">
        	<tr class="balance_headers">
            	<td>Bundles</td><td>Remaining Credit</td><td>Expiry Date</td>
            </tr>
            <tr class="odd">
            	<td>Unlimited L2L Minutes</td><td>Unlimited</td><td>2013-06-10</td>
            </tr>
            <tr>
            	<td>Unlimited L2L SMS</td><td>Unlimited</td><td>2013-06-20</td>
            </tr>
            <tr class="odd last">
            	<td>Promotional Call Credit</td><td>20 Pounds</td><td>2013-06-20</td>
            </tr>
        </table>
    </div>
    
    <div class="balance_box">
    	<div class="balance_box_header"><span>Unlimited Pass</span>For more information, please refer to our <a href="terms_and_conditions.php" target="_blank">terms and conditions</a></div>
    	<table width="100%" cellpadding="0" cellspacing="0">
        	<tr class="balance_headers">
            	<td>Bundles</td><td>Remaining Credit</td><td>Expiry Date</td>
            </tr>
            <tr class="odd">
            	<td>Unlimited Minutes</td><td>Unlimited</td><td>2013-06-10</td>
            </tr>
            <tr class="last">
            	<td>Unlimited SMS</td><td>Unlimited</td><td>2013-06-20</td>
            </tr>
        </table>
    </div>
    
    <div class="balance_box">
    	<div class="balance_box_header"><span>Bonus</span>For more information, please refer to our <a href="terms_and_conditions.php" target="_blank">terms and conditions</a></div>
    	<table width="100%" cellpadding="0" cellspacing="0">
        	<tr class="balance_headers">
            	<td>Bundles</td><td>Remaining Credit</td><td>Expiry Date</td>
            </tr>
            <tr class="odd">
            	<td>Unlimited L2L Minutes</td><td>Unlimited</td><td>2013-06-10</td>
            </tr>
            <tr>
            	<td>Unlimited L2L SMS</td><td>Unlimited</td><td>2013-06-20</td>
            </tr>
            <tr class="odd last">
            	<td>Promotional Call Credit</td><td>20 Pounds</td><td>2013-06-20</td>
            </tr>
        </table>
    </div>
    <div class="clear"></div>
</div>
</div>
<div class="clear"></div>

<div id="dashboard_two" class="Hide" style="display: none;">
<h3><a class="dashboard_feature_box_panel underline" data-type="dashboard_main">My Account</a> > My Usage</h3><div class="last_login_details">Last login 21-May-2013</div>
<div class="clear"></div>
<div class="content_box">
	 <div class="usage_box">
    	<div class="usage_box_header"><span>Your calls made are displayed below </span><a href="#" target="_blank">Download</a>&nbsp;&nbsp;&nbsp;<a href="#" target="_blank">See More</a></div>
    	<table width="100%" cellpadding="0" cellspacing="0">
        	<tr class="usage_headers">
            	<td>Day / Date</td><td>Time</td><td>Number</td><td>Country / Zone</td><td>Type</td><td>Call Duration</td><td>Cost</td><td>Account Charged</td>
            </tr>
            <tr class="odd">
            	<td>Thu 11 Apr</td><td>17:49</td><td>4407639463546</td><td>United Kingdom</td><td>Mobile</td><td>05:34</td><td>0.25</td><td>PAYG</td>
            </tr>
            <tr>
            	<td>Sat 13 Apr</td><td>09:12</td><td>4407464367565</td><td>Pakistan</td><td>Mobile</td><td>10:34</td><td>1.05</td><td>PAYG</td>
            </tr>
            <tr class="odd last">
            	<td>Wed 08 May</td><td>12:32</td><td>4407639463546</td><td>United Kingdom</td><td>Mobile</td><td>01:34</td><td>0.07</td><td>PAYG</td>
            </tr>
        </table>
    </div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>

<div id="dashboard_three" class="Hide" style="display: none;">
<h3><a class="dashboard_feature_box_panel underline" data-type="dashboard_main">My Account</a> > My Settings</h3><div class="last_login_details">Last login 21-May-2013</div>
<div class="clear"></div>
<div class="content_box">
	<div class="settings_subnav">
    	<ul>
            <li><a href="#" id="settings_subnav_selected">Your Profile</a></li>
            <li><a href="#">Your Service Settings</a></li>
            <li><a href="#">Your Family &amp; Friends</a></li>
            <li><a href="#">Your Payment Details</a></li>
            <li><a href="#">Change Password</a></li>
            <li><a href="#">Manage Accounts</a></li>
            <li><a href="#">Manage SMS Top Up</a></li>
        </ul>
</div>

<div class="settings_main_content">
	<img src="./images/fake_settings_profile_info.jpg" alt="Profile info" />
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>

<div id="dashboard_four" class="Hide" style="display: none;">
<h3><a class="dashboard_feature_box_panel underline" data-type="dashboard_main">My Account</a> > Do you need a new SIM?</h3><div class="last_login_details">Last login 21-May-2013</div>
<div class="clear"></div>
<div class="content_box">
	<p>Fifth Content</p>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>

<div id="dashboard_five" class="Hide" style="display: none;">
<h3><a class="dashboard_feature_box_panel underline" data-type="dashboard_main">My Account</a> > Do you need to add another account?</h3><div class="last_login_details">Last login 21-May-2013</div>
<div class="clear"></div>
<div class="content_box">
	<p>Sixth Content</p>
</div>
<div class="clear"></div>
</div>
<div class="clear"></div>




</div>


<script>
$(".dashboard_feature_box_panel").click(function () {
    $(".Hide").hide();
    $("#" + $(this).data('type')).show(); 
});
</script>



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
