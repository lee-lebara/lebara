<!DOCTYPE HTML>
<html>

<?php $pageTitle = "All In One";
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

     
<div class="desktop_page_container">

<div class="landingpage_subnav">
 	<h1 class="products_header">Shop</h1>
    	<ul>
            <li><a href="uk_plus.php">UK Plus+</a></li>
            <li><a href="unlimited_product.php">Lebara Freedom</a></li>
            <li><a href="data_passes.php">Data Passes</a></li>
            <li><a href="country_passes.php">Country Pass</a></li>
            <li><a href="#" id="landingpage_subnav_selected">All-In-One</a></li>
            <li><a href="blackberry_pass.php">BlackBerry Pass</a></li>
            <li><a href="http://www.lebara-money.com" target="_blank">Lebara Money</a></li>
        </ul>
</div>


	<div class="shop_page_container allinone_page">
    	<div class="lebara_logo_shop"><span>Lebara</span></div>
        <h2>All In One</h2>
        <ul class="shop_overview_benefits">
        	<li>Calls and SMS to the UK</li>
            <li>Calls to over 60 <span>international destinations</span></li>
            <li>International SMS</li>
            <li>0800, 0845 and voicemail</li>
            <li>Mobile internet</li>
        </ul>
        
        <div class="shop_sub_content">
        <p class="shop_product_small_para">Lebara <span>All-In-One</span> allows you to make mobile and landline calls to national UK and selected international destinations, send national UK and international SMS and use Mobile Internet (in the UK) all for one low rate.</p>
        <p class="shop_product_small_para">It is perfect for you if you regularly call the UK, send SMS and want to use your Lebara SIM foryour day-to-day use.</p>
        <p class="shop_product_small_para">All included destinations are charged at a simple flat rate of either 3.3p (online top ups) or 5p (in-store top ups). All other destinations are charged at the standard Pay As You Go rates out of the All-In-One balance.</p>
        
        <div class="all_in_one_rates">
        <h5>Pay As You Go - <span>Low cost international calls</span></h5>
        <div class="allinone_table_container">
        	<table cellpadding="0" cellspacing="0" width="100%">
            	<tr>
                	<td>Calls to <u>selected international</u> destinations</td><td class="allinone_price">From 1p/min</td>
                </tr>
                <tr>
                	<td>Calls to UK mobiles (07)</td><td class="allinone_price">10p/min</td>
                </tr>
                <tr>
                	<td>Calls to UK landlines (01,02,03)</td><td class="allinone_price">5p/min</td>
                </tr>
                <tr>
                	<td>National and International SMS</td><td class="allinone_price">12p</td>
                </tr>
                <tr>
                	<td>Mobile Internet</td><td class="allinone_price">15p/min</td>
                </tr>
                <tr>
                	<td>0800, 0845 toll-free numbers</td><td class="allinone_price">10p - 25p/min</td>
                </tr>
                <tr>
                	<td>Voicemail</td><td class="allinone_price">10p/min</td>
                </tr>
            </table>
        </div>
        </div>
        
        <div class="all_in_one_purchasing">
        <h5>All In One</h5>
        	<div class="allinone_prices_container">
            	<div class="allinone_price_detail">In Store Top Ups<br><span>5p</span><br>Per min, SMS or MB</div>
                <div class="dashed_line"></div>
                <div class="allinone_price_detail">Online Top Ups<br><span>3.3p</span><br>Per min, SMS or MB</div>
               	<div class="allinone_price_detail_small_print">Subject to a Fair Use Policy*</div>
                <a class="shop_buynow_button" href="customer_or_not_offer.php" style="margin-top: 5px;">Buy Now</a>
                <div class="clear"></div>
            </div>
        </div>
       
        
        
        <div class="clear"></div>
            
        </div>
        
     </div> 
   <p class="shop_tandcs_link">*Subject to a fair use policy. Valid for 30 days from top up.</p>


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
