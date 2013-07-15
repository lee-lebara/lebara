<!DOCTYPE HTML>
<html>

<?php $pageTitle = "UK Plus";
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
            <li><a href="#" id="landingpage_subnav_selected">UK Plus+</a></li>
            <li><a href="unlimited_product_loggedin.php">Lebara Freedom</a></li>
            <li><a href="data_passes_loggedin.php">Data Passes</a></li>
            <li><a href="country_passes_loggedin.php">Country Pass</a></li>
            <li><a href="all_in_one_loggedin.php">All-In-One</a></li>
            <li><a href="blackberry_pass_loggedin.php">BlackBerry Pass</a></li>
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
            	<a href="products_cc_add_extras_loggedin.php" class="shop_buynow_button">BUY NOW</a>
				
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
