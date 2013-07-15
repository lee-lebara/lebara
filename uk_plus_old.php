<!DOCTYPE HTML>
<html>

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
    if( document.getElementById("box").checked==true ){
        window.location="products_cc_customer_details_product.php";
    } else { window.location="customer_or_not_offer.php"; }
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


	<div class="fake_page_content_ukplus">
    		<form action="" method="post" onSubmit="buyWithSim(); return false;">
            <input type="submit" class="fake_buynow_button" style="padding: 7px; width: 150px; height: 40px; background-color: #d1005d; border: 0px; border-radius: 7px; color: #ffffff; font-size: 1.2em; font-family: GothamBook;;" value="Buy Now"></input>
            <div class="clear"></div>
            <div class="fake_buynow_checkbox" style="margin: 20px 0px 0px 0px;"><input type="checkbox" value="true" name="buy_sim" id="box" class="sim_choice_selector_product"> Tick box to include a FREE Lebara SIM</div>
            <div id="toggleTextSimChoice" style="display: none; position: absolute; margin: 20px 0px 0px 0px;">
            	<p>Choose the type of SIM you require then click 'Buy Now'.</p>
            	<input type="radio" name="sim1_type" value="regular"> Standard SIM (most phones)<br>
                <input type="radio" name="sim1_type" value="micro"> MicroSim (first iPhone 4)<br>
                <input type="radio" name="sim1_type" value="nano"> Nano (iPhone 5, iPad Mini)
            </div>
            
            </form>
     </div> 



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
