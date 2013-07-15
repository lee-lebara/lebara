<!DOCTYPE HTML>
<html>

<?php $pageTitle = "BlackBerry Pass";
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

     
<div class="desktop_page_container">

<div class="landingpage_subnav">
 	<h1 class="products_header">Shop</h1>
    	<ul>
            <li><a href="uk_plus.php">UK Plus+</a></li>
            <li><a href="unlimited_product.php">Lebara Freedom</a></li>
            <li><a href="data_passes.php">Data Passes</a></li>
            <li><a href="country_passes.php">Country Pass</a></li>
            <li><a href="all_in_one.php">All-In-One</a></li>
            <li><a href="#" id="landingpage_subnav_selected">BlackBerry Pass</a></li>
            <li><a href="http://www.lebara-money.com" target="_blank">Lebara Money</a></li>
        </ul>
</div>


	<div class="shop_page_container blackberry_pass_page">
    	<div class="lebara_logo_shop"><span>Lebara</span></div>
        <h2>BlackBerry Pass</h2>
        <ul class="shop_overview_benefits" style="margin-bottom: 50px;">
        	<li>BBM&trade;</li>
            <li>Push e-mails</li>
            <li>Internet</li>
        </ul>
        
        <div class="shop_sub_content">
        <p class="shop_product_small_para">Lebara Pass for BlackBerry&reg; gives you access to the BlackBerry Internet Service on your BlackBerry smartphone for just &pound;5 every 30 days.</p>
        <p class="shop_product_small_para">When activated, you can browse the internet, check internet email, and use BlackBerry&reg; Messenger (BBM&trade;).</p>
        <h3 style="margin: 30px 0px 10px 0px;">What does this include?</h3>
        <h4>500MB BlackBerry Data to use:</h4>
        <ul class="shop_subcontent_list">
        	<li>BlackBerry&reg; Messenger (BBM)</li>
            <li>BlackBerry (push) internet email</li>
            <li>BlackBerry Internet (browsing including file downloads</li>
        </ul>
        <h4>What cannot be used as part of the 500MB BlackBerry Data?</h4>
        <ul class="shop_subcontent_list">
        	<li>Internet (video, music, etc.) streaming</li>
            <li>Other high bandwith activities</li>
        </ul>
        <p class="shop_product_small_para">You will be charged at the standard PAYG rate for these types of activities; however you will also be advised before you are charged.<br>
        You can purchase a Lebara Data Pass for this type of usage.</p>
        <h4 style="margin-top: 30px;">What is not included with Pass for BlackBerry&reg; at all?</h4>
        <ul class="shop_subcontent_list">
        	<li>BlackBerry Enterprise Services (ie: Corporate Email, Calendar Sync, etc.)</li>
            <li>MMS - you would be charged at standard PAYG rates for this type of usage</li>
        </ul>
        <p class="shop_product_small_para">Please note, you do not require a Pass for BlackBerry&reg; with a BlackBerry z10.</p>
        <p class="shop_product_small_para">Pass for BlackBerry&reg; auto-renews on expiry - to unsubscribe, call 40090 and follow the prompts to cancel auto-renewal</p>
            
            
            <div class="shop_product_purchasing">
            	<div class="shop_price">&pound;5</div>
            	<div class="shop_product_validity">Valid for 30 days</div>
    			<form action="" method="post" onSubmit="buyWithSim(); return false;">
            		<input type="submit" class="shop_buynow_button" value="Buy Now"></input>
            	</form>
        	</div>
            
            
       
        
        <div class="clear"></div>
        <p class="shop_product_small_print">* Subject to a fair use policy. Valid for 30 days from top up.</p>
            
        </div>
        
     </div> 
   <p class="shop_tandcs_link">View full BlackBerry Pass <a href="#">Terms and Conditions</a>.</p>


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
