<!DOCTYPE HTML>
<html>

<?php $pageTitle = "Lebara Freedom";
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
            <li><a href="#" id="landingpage_subnav_selected">Lebara Freedom</a></li>
            <li><a href="data_passes_loggedin.php">Data Passes</a></li>
            <li><a href="country_passes_loggedin.php">Country Pass</a></li>
            <li><a href="all_in_one_loggedin.php">All-In-One</a></li>
            <li><a href="blackberry_pass_loggedin.php">BlackBerry Pass</a></li>
            <li><a href="http://www.lebara-money.com" target="_blank">Lebara Money</a></li>
        </ul>
</div>


	<div class="shop_page_container freedom_page">
    	<div class="lebara_logo_shop"><span>Lebara</span></div>
        <h2>Lebara Freedom</h2>
        <ul class="shop_overview_benefits">
        	<li><span>Unlimited</span> minutes &amp; texts to the countries shown</li>
            <li><span>Unlimited</span> UK calls&dagger; &amp; texts</li>
            <li><span>Unlimited</span> UK data</li>
            <li><span>Unlimited</span> Lebara to Lebara UK calls &amp; texts</li>
        </ul>
        
        <div class="shop_sub_content">
        <div class="shop_product_description">
        	<h3><span>Freedom</span> 29</h3>
            <ul class="freedom_flags">
            	<li><img src="./images/flag_canada.gif" alt="Canadian Flag"> <span>Canada</span></li>
                <li><img src="./images/flag_china.gif" alt="Chinese Flag"> <span>China</span></li>
                <li><img src="./images/flag_hongkong.gif" alt="Hong Kong Flag"> <span>Hong Kong</span></li>
                <li><img src="./images/flag_india.gif" alt="India Flag"> <span>India</span></li>
                <li><img src="./images/flag_malaysia.gif" alt="Malaysian Flag"> <span>Malaysia</span></li>
                <li><img src="./images/flag_singapore.gif" alt="Singaporean Flag"> <span>Singapore</span></li>
                <li><img src="./images/flag_thailand.gif" alt="Thai Flag"> <span>Thailand</span></li>
                <li><img src="./images/flag_usa.gif" alt="American Flag"> <span>USA</span></li>
            </ul>
        </div>
        
        <div class="shop_product_purchasing">
            <div class="shop_price">&pound;29</div>
            <div class="shop_product_validity">Valid for 30 days.</div>
    		<div class="fake_buynow_checkbox" style="padding-top: 20px; margin-left: 10px;">
            <h3 style="color: #00a6eb; margin-bottom: 5px; text-align: right;">Select your number:</h3>
				<div class="phone_choice_dropdown">
					<select style="width: 175px;">
  					<option value="number_1">07967 123 456 (My Phone)</option>
  					<option value="number_2">07986 654 321 (My Second Phone)</option>
					</select>
 				</div>
                <h3 style="color: #00a6eb; margin-bottom: 5px; text-align: right; float: left; width: 130px;">Auto Renew:</h3>
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
        
        
        
        <div class="shop_sub_content">
        <div class="shop_product_description">
        	<h3><span>Freedom</span> 38</h3>
            <ul class="freedom_flags">
            	<li><img src="./images/flag_belgium.gif" alt="Belgian Flag"> <span>Belgium</span></li>
                <li><img src="./images/flag_cyprus.gif" alt="Cypriot Flag"> <span>Cyprus</span></li>
                <li><img src="./images/flag_denmark.gif" alt="Danish Flag"> <span>Denmark</span></li>
                <li><img src="./images/flag_finland.gif" alt="Finnish Flag"> <span>Finland</span></li>
                <li><img src="./images/flag_france.gif" alt="French Flag"> <span>Franch</span></li>
                <li><img src="./images/flag_germany.gif" alt="German Flag"> <span>Germany</span></li>
                <li><img src="./images/flag_ireland.gif" alt="Irish Flag"> <span>Ireland</span></li>
                <li><img src="./images/flag_italy.gif" alt="Italian Flag"> <span>Italy</span></li>
                <li><img src="./images/flag_netherlands.gif" alt="Dutch Flag"> <span>Netherlands</span></li>
                <li><img src="./images/flag_norway.gif" alt="Norwegian Flag"> <span>Norway</span></li>
                <li><img src="./images/flag_portugal.gif" alt="Portuguese Flag"> <span>Portugal</span></li>
                <li><img src="./images/flag_spain.gif" alt="Spanish Flag"> <span>Spain</span></li>
                <li><img src="./images/flag_greece.gif" alt="Greek Flag"> <span>Greece</span></li>
                <li><img src="./images/flag_sweden.gif" alt="Swedish Flag"> <span>Sweden</span></li>
            </ul>
        </div>
        
        <div class="shop_product_purchasing">
            <div class="shop_price">&pound;38</div>
            <div class="shop_product_validity">Valid for 30 days.</div>
    		<div class="fake_buynow_checkbox" style="padding-top: 20px; margin-left: 10px;">
            <h3 style="color: #00a6eb; margin-bottom: 5px; text-align: right;">Select your number:</h3>
				<div class="phone_choice_dropdown">
					<select style="width: 175px;">
  					<option value="number_1">07967 123 456 (My Phone)</option>
  					<option value="number_2">07986 654 321 (My Second Phone)</option>
					</select>
 				</div>
                <h3 style="color: #00a6eb; margin-bottom: 5px; text-align: right; float: left; width: 130px;">Auto Renew:</h3>
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
        
        
        
        <div class="shop_sub_content">
        <div class="shop_product_description">
        	<h3><span>Freedom</span> 39</h3>
            <ul class="freedom_flags">
            	<li><img src="./images/flag_australia.gif" alt="Australian Flag"> <span>Australia</span></li>
                <li><img src="./images/flag_bangladesh.gif" alt="Bangladeshi Flag"> <span>Bangladesh</span></li>
                <li><img src="./images/flag_brazil.gif" alt="Brazilian Flag"> <span>Brazil</span></li>
                <li><img src="./images/flag_newzealand.gif" alt="New Zealand Flag"> <span>New Zealand</span></li>
                <li><img src="./images/flag_nigeria.gif" alt="Nigerian Flag"> <span>Nigeria</span></li>
                <li><img src="./images/flag_poland.gif" alt="Polish Flag"> <span>Poland</span></li>
                <li><img src="./images/flag_hungary.gif" alt="Hungarian Flag"> <span>Hungary</span></li>
                <li><img src="./images/flag_indonesia.gif" alt="Indonesian Flag"> <span>Indonesia</span></li>
                <li><img src="./images/flag_latvia.gif" alt="Latvian Flag"> <span>Latvia</span></li>
                <li><img src="./images/flag_russia.gif" alt="Russian Flag"> <span>Russia</span></li>
                <li><img src="./images/flag_southafrica.gif" alt="South African Flag"> <span>South Africa</span></li>
                <li><img src="./images/flag_vietnam.gif" alt="Vietnamese Flag"> <span>Vietnam</span></li>
                <li><img src="./images/flag_colombia.gif" alt="Colombian Flag"> <span>Colombia</span></li>
                <li><img src="./images/flag_romania.gif" alt="Romanian Flag"> <span>Romania</span></li>
                <li><img src="./images/flag_lithuania.gif" alt="Lithuanian Flag"> <span>Lithuania</span></li>
            </ul>
        </div>
        
        <div class="shop_product_purchasing">
            <div class="shop_price">&pound;39</div>
            <div class="shop_product_validity">Valid for 30 days.</div>
    		<div class="fake_buynow_checkbox" style="padding-top: 20px; margin-left: 10px;">
            <h3 style="color: #00a6eb; margin-bottom: 5px; text-align: right;">Select your number:</h3>
				<div class="phone_choice_dropdown">
					<select style="width: 175px;">
  					<option value="number_1">07967 123 456 (My Phone)</option>
  					<option value="number_2">07986 654 321 (My Second Phone)</option>
					</select>
 				</div>
                <h3 style="color: #00a6eb; margin-bottom: 5px; text-align: right; float: left; width: 130px;">Auto Renew:</h3>
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
