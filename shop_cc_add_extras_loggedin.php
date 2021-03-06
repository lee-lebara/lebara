<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "Select Extras";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<script>
    function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }
</script>

<script>
$(document).ready(function(){
  $("#checkbox_1").click(function(){
    $("#ukplus_summary").toggle();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#checkbox_2").click(function(){
    $("#datapass_summary").toggle();
	$("#datapass_summary2").hide();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#checkbox_3").click(function(){
    $("#autotopup_summary").toggle();
  });
});
</script>

<script>
$(document).ready(function(){
  $("#checkbox_4").click(function(){
    $("#datapass_summary2").toggle();
	$("#datapass_summary").hide();
  });
});
</script>

<script>
function autoRenew(){
    if( document.getElementById("boxAutoRenew").checked==true ){
         window.location="customer_or_not_topup_plusauto.php";
    };
	 if( document.getElementById("boxFreeSim").checked==true ){
         window.location="customer_or_not_topup_addregistration.php";
    } else { window.location="payment_details_cc_loggedin.php"; }
}
</script>



<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>


<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

<h1 class="desktop_element product_header">Other Options</h1>

<div class="clear"></div>

<!-- Desktop Content to Follow -->

<div class="desktop_page_container_bottomless desktop_element">

<form method="post" onSubmit="autoRenew(); return false;">

<div class="purchase_nav_container">
	<ol class="purchase_nav_ml_threestep">
		<li class="purchase_step_1">1. Choose Product</li>
        <li class="purchase_step_2 active_step">2. Options</li>
        <li class="purchase_step_3">3. Payment Method</li>
        <li class="purchase_step_4">4. Confirmation</li>
    </ol>
</div>

</div>

<div class="purchase_page_container desktop_element payg_options">
<div class="payment_container">
 <div class="purchase_options_module_payg">
            	<h2>Auto Renew</h2>
                <p>This product has the ability to auto renew after 30 days</p>
                <p><input type="checkbox" name="autorenew_product" id="boxAutoRenew"> Tick box to activate auto-renew feature</p>
                <p class="purchase_options_smallprint">(This can be turned off at any time)</p>
            </div>
            
            <!--<div class="purchase_options_module_payg">
            	<h2>Free SIM</h2>
                <p>Why not add a FREE Lebara SIM to your order</p>
                <p><input type="checkbox" value="true" name="buy_sim" id="boxFreeSim" class="sim_choice_selector_product"> Tick box to include a FREE Lebara SIM</p>
            	<div id="toggleTextSimChoice" style="display: none; margin: 20px 0px 0px 0px;">
            	<p>Choose the type of SIM you require then click 'Buy Now'.</p>
            	<input type="radio" name="sim1_type" value="regular"> Standard SIM (most phones)<br>
                <input type="radio" name="sim1_type" value="micro"> MicroSim (first iPhone 4)<br>
                <input type="radio" name="sim1_type" value="nano"> Nano (iPhone 5, iPad Mini)
            	</div>
            </div>-->
            
            <div class="purchase_options_module_payg second">
            	<h2>Promo Code</h2>
                <p>Have a promo code? You can enter it here:</p>
                <p><input type="text" name="promo_code" /><!--<div id="verified" style="display: none;"><img src="./images/small_green_tick.gif" alt="Verified" style="margin-top: 3px;"></div><a class="promo_code_apply" onClick="toggle_visibility('verified');">APPLY</a>--></p>
            </div>
            
            <div class="purchase_options_module_payg last">
            	<h2>Number Select</h2>
                <p>Do you have more than one Lebara number? Choose which one you would like this product applied to:</p>
                <p><div class="phone_choice_dropdown">
					<select>
  						<option value="number_1">07967 123 456 (My Phone)</option>
  						<option value="number_2">07986 654 321 (My Second Phone)</option>
					</select>
 					</div>
                </p>
            </div>

<div class="clear"></div>
</div>


<div class="payment_container_bottom" style="width: 569px;"></div>
<a href="payment_details_cc_loggedin.php" class="purchase_options_container_continue_form">CONTINUE</a>

</div>

</form>
<div class="clear"></div>


<script>
var remove = document.getElementById('remove_item1');
remove.onclick = function() {
    var div = document.getElementById('ukplus_summary');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
		$('#checkbox_1').prop('checked', false);
    }
    else {
        div.style.display = 'block';
		$('#checkbox_1').prop('checked', false);
    };
};
</script>

<script>
var remove = document.getElementById('remove_item2');
remove.onclick = function() {
    var div = document.getElementById('datapass_summary');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
		$('#checkbox_2').prop('checked', false);
		$('#checkbox_4').prop('checked', false);
    }
    else {
        div.style.display = 'block';
		$('#checkbox_2').prop('checked', false);
		$('#checkbox_4').prop('checked', false);
    }
};
</script>

<script>
var remove = document.getElementById('remove_item3');
remove.onclick = function() {
    var div = document.getElementById('autotopup_summary');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
		$('#checkbox_3').prop('checked', false);
    }
    else {
        div.style.display = 'block';
		$('#checkbox_3').prop('checked', false);
    }
};
</script>

<script>
var remove = document.getElementById('remove_item4');
remove.onclick = function() {
    var div = document.getElementById('datapass_summary2');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
		$('#checkbox_2').prop('checked', false);
		$('#checkbox_4').prop('checked', false);
    }
    else {
        div.style.display = 'block';
		$('#checkbox_2').prop('checked', false);
		$('#checkbox_4').prop('checked', false);
    }
};
</script>
       


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
