<!DOCTYPE HTML>
<html>

<?php $pageTitle = "Country Passes";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header.php"); ?>


<?php include($DOCUMENT_ROOT . "./includes/nav.php"); ?>

<script>
function buyWithSim(){
     window.location="customer_or_not_offer.php";
}
</script>

<script> 
$(document).ready(function(){
  $(".sim_choice_selector_product").click(function(){
    $("#toggleTextSimChoice").slideToggle("200");
  });
});
</script>

<script> 
$(document).ready(function(){
  $(".sim_choice_selector_product2").click(function(){
    $("#toggleTextSimChoice2").slideToggle("200");
  });
});
</script>

<script> 
$(document).ready(function(){
  $(".sim_choice_selector_product3").click(function(){
    $("#toggleTextSimChoice3").slideToggle("200");
  });
});
</script>


     
<div class="desktop_page_container">

<div class="landingpage_subnav">
 	<h1 class="products_header">Shop</h1>
    	<ul>
            <li><a href="uk_plus.php">UK Plus+</a></li>
            <li><a href="unlimited_product.php">Lebara Freedom</a></li>
            <li><a href="data_passes.php">Data Passes</a></li>
            <li><a href="#" id="landingpage_subnav_selected">Country Pass</a></li>
            <li><a href="all_in_one.php">All-In-One</a></li>
            <li><a href="blackberry_pass.php">BlackBerry Pass</a></li>
            <li><a href="http://www.lebara-money.com" target="_blank">Lebara Money</a></li>
        </ul>
</div>


	<div class="shop_page_container country_passes_page">
    
    <form action="" method="post" onSubmit="buyWithSim(); return false;">
    	<div class="lebara_logo_shop"><span>Lebara</span></div>
        <h2>Country Passes</h2>
        <ul class="shop_overview_benefits">
        	<li>Lebara's best international rates to mobiles and landlines.</li>
            <li>Simply choose one of the Passes below and send the keyword to <span style="color: #d1005d">65088</span> to activate.
        </ul>
        
        <div class="shop_sub_content">
        <div class="shop_product_description">
        	<h5>Calls to:</h5>
            <ul class="countrypass_flags">
            	<li><img src="./images/flag_austria.gif" alt="Austrian Flag"> <span>Austria</span></li>
                <li><img src="./images/flag_belgium.gif" alt="Belgian Flag"> <span>Belgium</span></li>
                <li><img src="./images/flag_brazil.gif" alt="Brazilian Flag"> <span>Brazil</span></li>
                <li><img src="./images/flag_colombia.gif" alt="Colombian Flag"> <span>Colombia</span></li>
                <li><img src="./images/flag_czech.gif" alt="Czechoslovakian Flag"> <span>Czech Republic</span></li>
                <li><img src="./images/flag_denmark.gif" alt="Danish Flag"> <span>Denmark</span></li>
                <li><img src="./images/flag_egypt.gif" alt="Egyptian Flag"> <span>Egypt</span></li>
                <li><img src="./images/flag_finland.gif" alt="Finnish Flag"> <span>Finland</span></li>
                <li><img src="./images/flag_france.gif" alt="French Flag"> <span>France</span></li>
                <li><img src="./images/flag_germany.gif" alt="German Flag"> <span>Germany</span></li>
                <li><img src="./images/flag_greece.gif" alt="Greek Flag"> <span>Greece</span></li>
                <li><img src="./images/flag_hungary.gif" alt="Hungarian Flag"> <span>Hungary</span></li>
                <li><img src="./images/flag_iceland.gif" alt="Icelandic Flag"> <span>Iceland</span></li>
                <li><img src="./images/flag_indonesia.gif" alt="Indonesian Flag"> <span>Indonesia</span></li>
                <li><img src="./images/flag_ireland.gif" alt="Isish Flag"> <span>Ireland</span></li>
                <li><img src="./images/flag_israel.gif" alt="Israeli Flag"> <span>Israel</span></li>
                <li><img src="./images/flag_turkey.gif" alt="Turkish Flag"> <span>Turkey</span></li>
                <li><img src="./images/flag_italy.gif" alt="Italian Flag"> <span>Italy</span></li>
                <li><img src="./images/flag_latvia.gif" alt="Latvian Flag"> <span>Latvia</span></li>
                <li><img src="./images/flag_lithuania.gif" alt="Lithuanian Flag"> <span>Lithuania</span></li>
                <li><img src="./images/flag_mexico.gif" alt="Mexican Flag"> <span>Mexico</span></li>
                <li><img src="./images/flag_netherlands.gif" alt="Dutch Flag"> <span>Netherlands</span></li>
                <li><img src="./images/flag_newzealand.gif" alt="New Zealand Flag"> <span>New Zealand</span></li>
                <li><img src="./images/flag_nigeria.gif" alt="Nigerian Flag"> <span>Nigeria</span></li>
                <li><img src="./images/flag_poland.gif" alt="Polish Flag"> <span>Poland</span></li>
                <li><img src="./images/flag_portugal.gif" alt="Portuguese Flag"> <span>Portugal</span></li>
                <li><img src="./images/flag_romania.gif" alt="Romanian Flag"> <span>Romania</span></li>
                <li><img src="./images/flag_russia.gif" alt="Russian Flag"> <span>Russia</span></li>
                <li><img src="./images/flag_spain.gif" alt="Spanish Flag"> <span>Spain</span></li>
                <li><img src="./images/flag_sweden.gif" alt="Swedish Flag"> <span>Sweden</span></li>
                <li><img src="./images/flag_taiwan.gif" alt="Taiwanese Flag"> <span>Taiwan</span></li>
                <li><img src="./images/flag_venezuela.gif" alt="Venezuelan Flag"> <span>Venezuela</span></li>
                <li><img src="./images/flag_vietnam.gif" alt="Vietnamese Flag"> <span>Vietnam</span></li>
            </ul>
        </div>
        
        <div class="shop_product_purchasing">
            <div class="shop_price_country_passes">&pound;5</div>
        	<div class="country_pass_quota">100 minutes<br>valid for 7 days</div>
            <div class="clear"></div>
    		
            <input type="submit" class="shop_buynow_button" value="Buy Now" style="margin-top: 0px;"></input>
           
            <div class="shop_sms_instructions">Or SMS 100 to 65088</div>
            <div class="clear"></div>
            <div class="shop_price_country_passes">&pound;20</div>
            <div class="country_pass_quota">500 minutes<br>valid for 30 days</div>
            <div class="clear"></div>
    		
            <input type="submit" class="shop_buynow_button" value="Buy Now" style="margin-top: 0px;"></input>
            
            <div class="shop_sms_instructions">Or SMS 500 to 65088</div>
        </div>
        <div class="clear"></div>
        </div>
        
        
        
        <div class="shop_sub_content">
        <div class="shop_product_description">
        	<h5>Calls to:</h5>
            <ul class="countrypass_flags">
            	<li><img src="./images/flag_bangladesh.gif" alt="Bangladeshi Flag"> <span>Bangladesh</span></li>
                <li><img src="./images/flag_canada.gif" alt="Canadian Flag"> <span>Canada</span></li>
                <li><img src="./images/flag_china.gif" alt="Chinese Flag"> <span>China</span></li>
                <li><img src="./images/flag_cyprus.gif" alt="Cypriot Flag"> <span>Cyprus</span></li>
                <li><img src="./images/flag_hongkong.gif" alt="Hong Kong Flag"> <span>Hong Kong</span></li>
                <li><img src="./images/flag_southkorea.gif" alt="South Korean Flag"> <span>South Korea</span></li>
                <li><img src="./images/flag_macau.gif" alt="Macau Flag"> <span>Macau</span></li>
                <li><img src="./images/flag_malaysia.gif" alt="Malaysian Flag"> <span>Malaysia</span></li>
                <li><img src="./images/flag_singapore.gif" alt="Singaporean Flag"> <span>Singapore</span></li>
                <li><img src="./images/flag_thailand.gif" alt="Thai Flag"> <span>Thailand</span></li>
                <li><img src="./images/flag_usa.gif" alt="American Flag"> <span>USA</span></li>
            </ul>
        </div>
        
        <div class="shop_product_purchasing">
            <div class="shop_price_country_passes">&pound;5</div>
        	<div class="country_pass_quota">200 minutes<br>valid for 7 days</div>
            <div class="clear"></div>
    		
            <input type="submit" class="shop_buynow_button" value="Buy Now" style="margin-top: 0px;"></input>
            
            <div class="shop_sms_instructions">Or SMS 100 to 65088</div>
            <div class="clear"></div>
            <div class="shop_price_country_passes">&pound;20</div>
            <div class="country_pass_quota">1000 minutes<br>valid for 30 days</div>
            <div class="clear"></div>
    		
            <input type="submit" class="shop_buynow_button" value="Buy Now" style="margin-top: 0px;"></input>
            
            <div class="shop_sms_instructions">Or SMS 500 to 65088</div>
        </div>
        <div class="clear"></div>
        </div>
        
        
        
        <div class="shop_sub_content">
        <div class="shop_product_description">
        	<h5>Calls to:</h5>
            <ul class="countrypass_flags">
            	<li><img src="./images/flag_albania.gif" alt="Albanian Flag"> <span>Albania</span></li>
                <li><img src="./images/flag_angola.gif" alt="Angolan Flag"> <span>Angola</span></li>
                <li><img src="./images/flag_australia.gif" alt="Australian Flag"> <span>Australia</span></li>
                <li><img src="./images/flag_iran.gif" alt="Iranian Flag"> <span>Iran</span></li>
                <li><img src="./images/flag_iraq.gif" alt="Iraqi Flag"> <span>Iraq</span></li>
                <li><img src="./images/flag_kuwait.gif" alt="Kuwait Flag"> <span>Kuwait</span></li>
                <li><img src="./images/flag_philippines.gif" alt="Phillipino Flag"> <span>Philippines</span></li>
                <li><img src="./images/flag_saudi.gif" alt="Saudi Arabian Flag"> <span>Saudi Arabia</span></li>
                <li><img src="./images/flag_slovakia.gif" alt="Slovakian Flag"> <span>Slovakia</span></li>
                <li><img src="./images/flag_southafrica.gif" alt="South African Flag"> <span>South Africa</span></li>
                <li><img src="./images/flag_uganda.gif" alt="Ugandan Flag"> <span>Uganda</span></li>
                <li><img src="./images/flag_ukraine.gif" alt="Ukrainian Flag"> <span>Ukraine</span></li>
                <li><img src="./images/flag_uae.gif" alt="United Arab Emirates Flag"> <span>U.A.E</span></li>
                <li><img src="./images/flag_zambia.gif" alt="Zambian Flag"> <span>Zambia</span></li>
            </ul>
        </div>
        
        <div class="shop_product_purchasing">
            <div class="shop_price_country_passes">&pound;20</div>
            <div class="country_pass_quota">250 minutes<br>valid for 30 days</div>
            <div class="clear"></div>
    		
            <input type="submit" class="shop_buynow_button" value="Buy Now" style="margin-top: 0px;"></input>
            
            <div class="shop_sms_instructions">Or SMS 500 to 65088</div>
        </div>
        <div class="clear"></div>
        </div>
        
         <p class="shop_product_small_print">The 7-Day passes (<span>100</span> minutes and <span>200</span> minutes) will automatically renew for your convenience.<br>
         To opt-out and prevent auto-renewal, text either <span>100*STOP</span> to <span>65088</span> or <span>200*STOP</span> to <span>65088</span>.</p>
        
     </div> 
     
     </form>
     
     
  


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
