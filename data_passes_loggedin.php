<!DOCTYPE HTML>
<html>

<?php $pageTitle = "Data Passes";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>


<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

<script>
function buyWithSim(){
     window.location="shop_cc_add_extras_loggedin.php";
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
    			<form action="" method="post" onSubmit="buyWithSim(); return false;">
            		<input type="submit" class="shop_buynow_button" value="Buy Now"></input>
            	</form>
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
    			<form action="" method="post" onSubmit="buyWithSim(); return false;">
            		<input type="submit" class="shop_buynow_button" value="Buy Now"></input>
            	</form>
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
    			<form action="" method="post" onSubmit="buyWithSim(); return false;">
            		<input type="submit" class="shop_buynow_button" value="Buy Now"></input>
            	</form>
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
