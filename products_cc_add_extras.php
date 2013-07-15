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
function autoTopUp(){
    if( document.getElementById("boxAutoRenew").checked==true )
	{
        window.location="customer_or_not_topup_plusauto.php";
    }
	else if( document.getElementById("box").checked==true )
	{
        window.location="products_cc_customer_details.php";
    } else { window.location="customer_or_not_topup.php"; };
}
</script>


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
$(document).ready(function(){
  $(".sim_choice_selector_product").click(function(){
    $("#toggleTextSimChoice").slideToggle("200");
	$("#opacity").toggleClass("opacity_on");
	$(".option_disallowed").toggle();
	$(".option_disallowed_message").toggle();
  });
});
</script>

<script> 
$(document).ready(function(){
  $("#boxAutoRenew").click(function(){
	$("#opacity2").toggleClass("opacity_on");
	$(".option_disallowed2").toggle();
	$(".option_disallowed_message2").toggle();
  });
});
</script>




<?php include($DOCUMENT_ROOT . "./includes/main_header.php"); ?>


<?php include($DOCUMENT_ROOT . "./includes/nav.php"); ?>

<h1 class="desktop_element product_header">Pay As You Go - <span>Top Up</span></h1>

<div class="clear"></div>

<!-- Desktop Content to Follow -->

<div class="desktop_page_container_bottomless desktop_element">

<form method="post" onSubmit="autoTopUp(); return false;">

<div class="purchase_nav_container">
	<ol class="purchase_nav_ml">
		<li class="purchase_step_1">1. Choose Amount</li>
        <li class="purchase_step_2 active_step">2. Options</li>
        <li class="purchase_step_3">3. Your Details</li>
        <li class="purchase_step_4">4. Payment Method</li>
        <li class="purchase_step_5">5. Confirmation</li>
    </ol>
</div>

</div>

<div class="purchase_page_container desktop_element payg_options">
<div class="payment_container">

 <div class="purchase_options_module_payg" id="opacity">
            	<h2>Auto Top Up</h2>
                <p>This product has the ability to auto Top Up</p>
                <p class="option_disallowed">Top up with
        			<select>
  						<option value="5">&pound;5</option>
  						<option value="10">&pound;10</option>
  						<option value="20">&pound;20</option>
  						<option value="30">&pound;30</option>
					</select>
        		when my balance reaches &pound;2 <input type="checkbox" name="autorenew_product" id="boxAutoRenew"></p>
                <p class="option_disallowed_message" style="display: none;">Sorry, auto Top Up cannot be added to a free SIM at this time.</p>
                <p class="purchase_options_smallprint option_disallowed">(This can be turned off at any time)</p>
            </div>
            
            <div class="purchase_options_module_payg second" id="opacity2">
            	<h2>Free SIM</h2>
                <p>Why not add a FREE Lebara SIM to your order</p>
                <p class="option_disallowed2"><input type="checkbox" value="true" name="buy_sim" id="box" class="sim_choice_selector_product"> Tick box to include a FREE Lebara SIM</p>
            	<p class="option_disallowed_message2" style="display: none;">Sorry, we can't include a free SIM<br>with auto Top Up at this time.</p>
                <div id="toggleTextSimChoice" style="display: none; margin: 20px 0px 0px 0px;">
            	<p>Choose the type of SIM you require then click 'Buy Now'.</p>
            	<input type="radio" name="sim1_type" value="regular"> Standard SIM (most phones)<br>
                <input type="radio" name="sim1_type" value="micro"> MicroSim (first iPhone 4)<br>
                <input type="radio" name="sim1_type" value="nano"> Nano (iPhone 5, iPad Mini)
            	</div>
            </div>
            
            <div class="purchase_options_module_payg last">
            	<h2>Promo Code</h2>
                <p>Have a promo code? You can enter it here:</p>
                <p><input type="text" name="promo_code" /><!--<div id="verified" style="display: none;"><img src="./images/small_green_tick.gif" alt="Verified" style="margin-top: 3px;"></div><a class="promo_code_apply" onClick="toggle_visibility('verified');">APPLY</a>--></p>
            </div>
            

<div class="clear"></div>
</div>


<div class="payment_container_bottom" style="width: 634px;"></div>
<input type="submit" class="purchase_options_container_continue_form" style="padding: 20px 60px 0px 0px;" value="CONTINUE">

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
