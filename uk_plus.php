<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "UK Plus";
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
            <li><a href="#" id="landingpage_subnav_selected">UK Plus+</a></li>
            <li><a href="unlimited_product.php">Lebara Freedom</a></li>
            <li><a href="data_passes.php">Data Passes</a></li>
            <li><a href="country_passes.php">Country Pass</a></li>
            <li><a href="all_in_one.php">All-In-One</a></li>
            <li><a href="blackberry_pass.php">BlackBerry Pass</a></li>
            <li><a href="http://www.lebara-money.com" target="_blank">Lebara Money</a></li>
        </ul>
</div>


	<div class="shop_page_container uk_plus_page">
    	<div class="lebara_logo_shop"><span>Lebara</span></div>
        <h2>UK Plus</h2>
        <ul class="shop_overview_benefits">
        	<li><span>Even Better</span> International Rates</li>
            <li><span>Call your Friends</span> in the UK</li>
            <li><span>Browse</span> the Internet</li>
            <li><span>Get Discounts</span> on international calls</li>
        </ul>
        
        <div class="shop_sub_content">
        <div class="shop_product_description">
        	<h3><span>All for</span> ONE LOW PRICE</h3>
            <ul class="shop_specific_benefits">
            	<li>150 UK** Minutes to landlines and mobiles</li>
                <li>500MB Mobile internet</li>
                <li>Unlimited* UK texts</li>
                <li>Unlimited* Lebara UK calls and texts</li>
            </ul>
            <p>+ Plus discounted calls to selected countries, charged from your PAYG account.</p>
            <p><strong>Simply select your country below to see the rate:</strong></p>
            <div class="shop_rates_module">
            	<img src="./images/fake_shop_rates_finder.jpg" alt="Rates Finder">
            </div>
          
        </div>
        
        <div class="shop_product_purchasing">
            <div class="shop_price">&pound;7.95</div>
            <div class="shop_product_validity">Valid for 30 days.</div>
    		<form action="" method="post" onSubmit="buyWithSim(); return false;">
            <input type="submit" class="shop_buynow_button" value="Buy Now"></input>
            <div class="clear"></div>
            <!--<div class="buynow_checkbox"><input type="checkbox" value="true" name="buy_sim" id="box" class="sim_choice_selector_product"> Tick box to include a<br>FREE Lebara SIM</div>
            <div id="toggleTextSimChoice" style="display: none; margin: 20px 0px 0px 0px;">
            	<p>Choose the type of SIM you require then click 'Buy Now'.</p>
            	<input type="radio" name="sim1_type" value="regular"> Standard SIM (most phones)<br>
                <input type="radio" name="sim1_type" value="micro"> MicroSim (first iPhone 4)<br>
                <input type="radio" name="sim1_type" value="nano"> Nano (iPhone 5, iPad Mini)
            </div>-->
            
            </form>
            
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
