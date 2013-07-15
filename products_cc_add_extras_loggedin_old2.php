<!DOCTYPE HTML>
<html>

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



<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>


<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

<h1 class="desktop_element product_header">Pay As You Go - <span>Top Up</span></h1>

<div class="clear"></div>

<!-- Desktop Content to Follow -->

<div class="desktop_page_container_bottomless desktop_element">

<div class="purchase_nav_container">
	<ol class="purchase_nav_ml_threestep">
		<li class="purchase_step_1">1. Choose Amount</li>
        <li class="purchase_step_2 active_step">2. Options</li>
        <li class="purchase_step_3">3. Payment Method</li>
        <li class="purchase_step_4">4. Confirmation</li>
    </ol>
</div>

</div>

<div class="purchase_page_container desktop_element">
<div class="payment_container">
	<h2>Would you like any extras?</h2><div class="upsell_instruction">(tick box to add product)</div>
<div class="upsell_container">
    
    <div class="upsell_module uk_plus_upsell">
    	<h3>UK Plus</h3>
        <div class="upsell_benefits">Even better international rates, internet, and more.</div>
        <div class="purchase_upsell"><span>&pound;7.95</span> Valid for 30 days <input type="checkbox" id="checkbox_1" name="purchase_ukplus" value="true"></div>
        <div class="clear"></div>
        <div class="autorenew_upsell">Auto renew?** <input type="checkbox" name="autorenew_ukplus" id="box"></div>
    </div>
    
    <div class="upsell_module datapass_upsell">
    	<h3>Data Pass</h3>
        <div class="upsell_benefits">Full mobile internet for 30 days.</div>
        <div class="purchase_upsell"><span>&pound;2.50</span> 500MB<input type="radio" id="checkbox_2" name="purchase_datapass">&nbsp;<span>&pound;5.00</span> 1GB<input type="radio" id="checkbox_4" name="purchase_datapass"></div>
        <div class="clear"></div>
        <div class="autorenew_upsell">Auto renew?** <input type="checkbox" name="autorenew_datapass" id="box2"></div>
    </div>
    
    <div class="upsell_module autotopup_upsell">
    	<h3>Auto Top Up</h3>
        <div class="upsell_benefits">Never run out of credit again.</div>
        <div class="clear"></div>
        <div class="upsell_benefits">Opt out at any time.</div>
        <div class="clear"></div>
        <div class="autorenew_upsell">Top up with
        <select>
  			<option value="5">&pound;5</option>
  			<option value="10">&pound;10</option>
  			<option value="20">&pound;20</option>
  			<option value="30">&pound;30</option>
		</select>
        when my balance reaches &pound;2 <input type="checkbox" id="checkbox_3" name="autorenew_topup" id="box3"></div>
    </div>
    
    <div class="product_upsell_smallprint">
    	<p>*Free credit valid for 30 days from date of purchase.</p>
        <p>**Product will continue to renew automatically upon expiry, unless cancelled.</p>
        <p>View the <a href="#">terms and conditions</a>.</p>
    </div>

</div>

<div class="product_summary_container">
<h3 style="margin-bottom: 10px;">Your Number:</h3>
<div class="phone_choice_dropdown">
	<select>
  	<option value="number_1">07967 123 456 (My Phone)</option>
  	<option value="number_2">07986 654 321 (My Second Phone)</option>
	</select>
 </div>
<h3>Your Products:</h3>
	
    <div class="product_chosen topup_summary">
		<div class="product_summary_description">Top Up &pound;20<br><span>plus FREE &pound;10 call credit</span></div>
   	 	<div class="product_summary_price">&pound;20.00</div>
	</div>
    
    <div class="product_chosen"  id="ukplus_summary" style="display: none;">
		<div class="product_summary_description">UK Plus</div>&nbsp;<a id="remove_item1">x</a>
   	 	<div class="product_summary_price">&pound;7.95</div>
	</div>
    
    <div class="product_chosen"  id="datapass_summary" style="display: none;">
		<div class="product_summary_description">500MB Data Pass</div>&nbsp;<a id="remove_item2">x</a>
   	 	<div class="product_summary_price">&pound;2.50</div>
	</div>
    
    <div class="product_chosen"  id="datapass_summary2" style="display: none;">
		<div class="product_summary_description">1GB Data Pass</div>&nbsp;<a id="remove_item4">x</a>
   	 	<div class="product_summary_price">&pound;5.00</div>
	</div>
    
    <div class="product_chosen" id="autotopup_summary" style="display: none;">
		<div class="product_summary_description">Auto Top Up</span></div>&nbsp;<a id="remove_item3">x</a>
   	 	<div class="product_summary_price">Active</div>
	</div>

	<div class="product_summary_promo_box">Have a promo code? You can enter it here: <input type="text" name="promo_code" /><div id="verified" style="display: none;"><img src="./images/small_green_tick.gif" alt="Verified"></div>
		<a onClick="toggle_visibility('verified');">APPLY</a>
	</div>

    <div class="promo_discount_total">Promo Discount<span>&pound;0</span></div>
    <div class="products_total">Total due: <span>&pound;20.00</span></div>


</div>


<div class="clear"></div>
</div>



<div class="payment_container_bottom"></div><a id="customer_popup_trigger_prod" class="purchase_options_container_continue" href="payment_details_cc_loggedin.php">CONTINUE</a>

</div>


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
