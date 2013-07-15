<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "Data Passes";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>


<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

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
function buyWithSim(){
    if( document.getElementById("box").checked==true ){
        window.location="products_cc_customer_details_product.php";
    } else { window.location="customer_or_not_offer.php"; }
}
</script>

     
<div class="desktop_page_container">

<div class="landingpage_subnav">
 	<h1 class="products_header">Shop</h1>
    	<ul>
            <li><a href="uk_plus_loggedin.php">UK Plus+</a></li>
            <li><a href="unlimited_product_loggedin.php">Lebara Freedom</a></li>
            <li><a href="#" id="landingpage_subnav_selected">Data Passes</a></li>
            <li><a href="country_passes_loggedin.php">Country Pass</a></li>
            <li><a href="all_in_one_loggedin.php">All-In-One</a></li>
            <li><a href="blackberry_pass_loggedin.php">BlackBerry Pass</a></li>
            <li><a href="http://www.lebara-money.com" target="_blank">Lebara Money</a></li>
        </ul>
</div>


	<div class="shop_page_container data_passes_page">
    	<div class="lebara_logo_shop"><span>Lebara</span></div>
        <h2>Data Passes</h2>
        <p class="shop_overview_benefits_para">Our <span>Mobile Internet</span> passes allow you to stay connected on the go. Access all your favourite websites from your smart phone</p>
        
        <div class="shop_sub_content">
        <p class="shop_product_small_para">Our standard rate for Mobile internet is 15p / MB. However, you can purchase one of our great Mobile Internet Passes, which gives you our best internet rats.</p>
        <h4>Even better value - Limited time only</h4>
        <p class="shop_product_small_para">&frac12; price Mobile Internet when you activate a 500MB or 1GB Data Pass between 16th May and 12th July 2013!<br><a href="#">Terms and conditions apply</a>.</p>
        
        <div class="shop_data_pass_module">
        	<div class="shop_product_description">
        		<div class="data_price">10MB<br><span>Data Pass</span></div>
        	</div>
        
        	<div class="shop_product_purchasing">
            	<div class="shop_price">50p</div>
            	<div class="shop_product_validity">Valid for a day</div>
    			<div class="fake_buynow_checkbox" style="padding-top: 20px; margin-left: 10px;">
            <h3 style="color: #00a6eb; margin-bottom: 5px; text-align: right;">Select your number:</h3>
				<div class="phone_choice_dropdown">
					<select style="width: 175px;">
  					<option value="number_1">07967 123 456 (My Phone)</option>
  					<option value="number_2">07986 654 321 (My Second Phone)</option>
					</select>
 				</div>
                <h3 style="color: #00a6eb; margin-bottom: 5px; text-align: right; float: left; width: 120px;">Auto Renew:</h3>
                <div class="cb-bg_small" style="margin: 0px; float: right; margin-left: 10px;">
    			<div class="cb-slider_small" cb-status="0"></div>
				</div>
                <div style="font-size: 0.8em; float: left; color: #717171; text-align: right; margin: 5px 0px 10px 0px;">Auto renew will be activated daily until cancelled</div>
            	<a href="payment_details_cc_loggedin.php" class="fake_buynow_button"  style="margin: 10px 0px 0px 0px; padding: 14px 7px; width: 150px; height: 20px; background-color: #d1005d; border: 0px; border-radius: 7px; color: #ffffff; font-size: 1.2em; font-family: GothamBook; text-align:center; text-decoration: none; float: right;">BUY NOW</a>
				<div class="clear"></div>
     		</div> 
        	</div>
                <div class="clear"></div>
        </div>
        
         <div class="shop_data_pass_module">
        	<div class="shop_product_description">
        		<div class="data_price">500MB<br><span>Data Pass</span></div>
                <div class="data_special_offer_info"><strike><strong>&pound;5</strong></strike>&nbsp;&nbsp;<span>NOW</span></div>
        	</div>
        
        	<div class="shop_product_purchasing">
            	<div class="shop_price">&pound;2.50</div>
            	<div class="shop_product_validity">Valid for 30 days</div>
    			<div class="fake_buynow_checkbox" style="padding-top: 20px; margin-left: 10px;">
            <h3 style="color: #00a6eb; margin-bottom: 5px; text-align: right;">Select your number:</h3>
				<div class="phone_choice_dropdown">
					<select style="width: 175px;">
  					<option value="number_1">07967 123 456 (My Phone)</option>
  					<option value="number_2">07986 654 321 (My Second Phone)</option>
					</select>
 				</div>
                <h3 style="color: #00a6eb; margin-bottom: 5px; text-align: right; float: left; width: 120px;">Auto Renew:</h3>
                <div class="cb-bg_small" style="margin: 0px; float: right; margin-left: 10px;">
    			<div class="cb-slider_small" cb-status="0"></div>
				</div>
                <div style="font-size: 0.8em; float: left; color: #717171; text-align: right; margin: 5px 0px 10px 0px;">Auto renew will be activated every 30 days from purchase date</div>
            	<a href="payment_details_cc_loggedin.php" class="fake_buynow_button"  style="margin: 10px 0px 0px 0px; padding: 14px 7px; width: 150px; height: 20px; background-color: #d1005d; border: 0px; border-radius: 7px; color: #ffffff; font-size: 1.2em; font-family: GothamBook; text-align:center; text-decoration: none; float: right;">BUY NOW</a>
				<div class="clear"></div>
     		</div> 
        	</div>
                <div class="clear"></div>
        </div>
        
         <div class="shop_data_pass_module">
        	<div class="shop_product_description">
        		<div class="data_price">1GB<br><span>Data Pass</span></div>
                <div class="data_special_offer_info"><strike><strong>&pound;10</strong></strike>&nbsp;&nbsp;<span>NOW</span></div>
        	</div>
        
        	<div class="shop_product_purchasing">
            	<div class="shop_price">&pound;5.00</div>
            	<div class="shop_product_validity">Valid for a 30 days</div>
    			<div class="fake_buynow_checkbox" style="padding-top: 20px; margin-left: 10px;">
            <h3 style="color: #00a6eb; margin-bottom: 5px; text-align: right;">Select your number:</h3>
				<div class="phone_choice_dropdown">
					<select style="width: 175px;">
  					<option value="number_1">07967 123 456 (My Phone)</option>
  					<option value="number_2">07986 654 321 (My Second Phone)</option>
					</select>
 				</div>
                <h3 style="color: #00a6eb; margin-bottom: 5px; text-align: right; float: left; width: 120px;">Auto Renew:</h3>
                <div class="cb-bg_small" style="margin: 0px; float: right; margin-left: 10px;">
    			<div class="cb-slider_small" cb-status="0"></div>
				</div>
                <div style="font-size: 0.8em; float: left; color: #717171; text-align: right; margin: 5px 0px 10px 0px;">Auto renew will be activated every 30 days from purchase date</div>
            	<a href="payment_details_cc_loggedin.php" class="fake_buynow_button"  style="margin: 10px 0px 0px 0px; padding: 14px 7px; width: 150px; height: 20px; background-color: #d1005d; border: 0px; border-radius: 7px; color: #ffffff; font-size: 1.2em; font-family: GothamBook; text-align:center; text-decoration: none; float: right;">BUY NOW</a>
				<div class="clear"></div>
     		</div> 
        	</div>
                <div class="clear"></div>
        </div>
        
        
        
        <div class="clear"></div>
        <p class="shop_product_small_print">The Lebara UK Plus auto-renews on expiry. To unsubscribe, send UK150*STOP to 65088</p>
            
        </div>
        
     </div> 
   <p class="shop_tandcs_link">View UK Plus full <a href="#">Terms and Conditions</a>.</p>


<div class="clear"></div>
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
