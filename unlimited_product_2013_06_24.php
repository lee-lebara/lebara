<!DOCTYPE HTML>
<html>

<?php $pageTitle = "Unlimited";
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
function buyWithSim2(){
    if( document.getElementById("box2").checked==true ){
        window.location="products_cc_customer_details_product.php";
    } else { window.location="customer_or_not_offer.php"; }
}

</script>

<script>
function buyWithSim3(){
    if( document.getElementById("box3").checked==true ){
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
            <li><a href="#" id="landingpage_subnav_selected">Lebara Freedom</a></li>
            <li><a href="data_passes.php">Data Passes</a></li>
            <li><a href="country_passes.php">Country Pass</a></li>
            <li><a href="all_in_one.php">All-In-One</a></li>
            <li><a href="blackberry_pass.php">BlackBerry Pass</a></li>
            <li><a href="http://www.lebara-money.com" target="_blank">Lebara Money</a></li>
        </ul>
</div>


	<div class="fake_page_content">
    		<form action="" method="post" onSubmit="buyWithSim(); return false;">
             <input type="submit" class="fake_buynow_button" style="padding: 7px; width: 150px; height: 40px; background-color: #d1005d; border: 0px; border-radius: 7px; color: #ffffff; font-size: 1.2em; font-family: GothamBook; margin: 310px 0px 0px 520px; position: absolute;" value="Buy Now"></input>
             <div class="clear"></div>
            <div class="fake_buynow_checkbox" style="margin-top: 360px; position: absolute;"><input type="checkbox" value="true" name="buy_sim" id="box" class="sim_choice_selector_product"> Tick box to include a FREE Lebara SIM</div>
            <div class="clear"></div>
            <div id="toggleTextSimChoice" style="display: none; position: absolute; margin: 410px 0px 0px 480px; ">
            	<p>Choose the type of SIM you require then click 'Buy Now'.</p>
            	<input type="radio" name="sim1_type" value="regular"> Ordinary SIM / MicroSim (most phones)<br>
                <input type="radio" name="sim1_type" value="micro"> MicroSim (first iPhone 4)<br>
                <input type="radio" name="sim1_type" value="nano"> Nano (iPhone 5, iPad Mini)
            </div>
           
            </form>
            
            <form action="" method="post" onSubmit="buyWithSim2(); return false;">
             <input type="submit" class="fake_buynow_button" style="padding: 7px; width: 150px; height: 40px; background-color: #d1005d; border: 0px; border-radius: 7px; color: #ffffff; font-size: 1.2em; font-family: GothamBook; margin: 530px 0px 0px 520px; position: absolute;" value="Buy Now"></input>
             <div class="clear"></div>
            <div class="fake_buynow_checkbox" style="margin-top: 580px; position: absolute;"><input type="checkbox" value="true" name="buy_sim" id="box2" class="sim_choice_selector_product2"> Tick box to include a FREE Lebara SIM</div>
            <div id="toggleTextSimChoice2" style="display: none; position: absolute; margin: 640px 0px 0px 480px;">
            	<p>Choose the type of SIM you require then click 'Buy Now'.</p>
            	<input type="radio" name="sim1_type" value="regular"> Ordinary SIM / MicroSim (most phones)<br>
                <input type="radio" name="sim1_type" value="micro"> MicroSim (first iPhone 4)<br>
                <input type="radio" name="sim1_type" value="nano"> Nano (iPhone 5, iPad Mini)
            </div>
           
            </form>
            
            <form action="" method="post" onSubmit="buyWithSim3(); return false;">
             <input type="submit" class="fake_buynow_button" style="padding: 7px; width: 150px; height: 40px; background-color: #d1005d; border: 0px; border-radius: 7px; color: #ffffff; font-size: 1.2em; font-family: GothamBook; margin: 750px 0px 0px 520px; position: absolute;" value="Buy Now"></input>
             <div class="clear"></div>
            <div class="fake_buynow_checkbox" style="margin-top: 800px; position:absolute"><input type="checkbox" value="true" name="buy_sim" id="box3" class="sim_choice_selector_product3"> Tick box to include a FREE Lebara SIM</div>
           	<div class="clear"></div>
            <div id="toggleTextSimChoice3" style="display: none; position: absolute; margin: 840px 0px 0px 480px;">
            	<p>Choose the type of SIM you require then click 'Buy Now'.</p>
            	<input type="radio" name="sim1_type" value="regular"> Ordinary SIM / MicroSim (most phones)<br>
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
