<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "Get your Free SIM";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

<script type="text/javascript">
$(document).ready(function(){
$('.purchase_choice li').on('click', function(){
    $(this).addClass('chosen').siblings().removeClass('chosen');
});
});
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
function credit_or_not(){
    if( document.getElementById("box").checked==true ){
        window.location="free_sim_confirmation_loggedin.php";
    } else { window.location="payment_details_cc_paidsim_loggedin.php"; }
}
</script>



<!-- Desktop Content to Follow -->

<h1 class="desktop_element product_header">Get your <span>FREE SIM</span></h1>

<div class="desktop_page_container_bottomless desktop_element">

<div class="purchase_nav_container">
	<ol class="purchase_nav_ml">
		<li class="purchase_step_1">1. Your Details</li>
        <li class="purchase_step_2 active_step">2. Add Call Credit</li>
        <li class="purchase_step_3">3. Payment Details</li>
        <li class="purchase_step_4">4. Confirmation Page</li>
    </ol>
</div>

</div>


<div class="purchase_page_container desktop_element">
<form method="post" onSubmit="credit_or_not(); return false;">

<div class="payment_container">


<h2>Add call credit so you can start using your SIM as soon as you receive it:</h2>
 
 


<ul class="purchase_choice" style="width: 62%;">

<li class="product_box_desktop">
	<div class="product_box_details">
	<div class="product_amount">&pound;5</div>
    <span>plus</span>
    <div class="bonus_amount">&pound;2.50<br />FREE</div>
    <span>call credit*</span>
    </div>
    <div class="product_select_desktop">SELECT</div>
</li>

<li class="product_box_desktop">
	<div class="product_box_details">
	<div class="product_amount">&pound;10</div>
    <span>plus</span>
    <div class="bonus_amount">&pound;2.50<br />FREE</div>
    <span>call credit*</span>
    </div>
    <div class="product_select_desktop">SELECT</div>
</li>

<li class="product_box_desktop chosen">
	<div class="product_box_details">
	<div class="product_amount">&pound;20</div>
    <span>plus</span>
    <div class="bonus_amount">&pound;10.00<br />FREE</div>
    <span>call credit*</span>
    </div>
    <div class="product_select_desktop">SELECT</div>
</li>

<li class="product_box_desktop">
	<div class="product_box_details">
	<div class="product_amount">&pound;30</div>
    <span>plus</span>
    <div class="bonus_amount">&pound;10.00<br />FREE</div>
    <span>call credit*</span>
    </div>
    <div class="product_select_desktop">SELECT</div>
</li>
</ul>


<div class="promo_code_box" style="margin-top: 5px;">
	<div class="promo_code_box_detail">Promo code <input type="text" name="promo_code" /><div id="verified" style="display: none;"><img src="./images/small_green_tick.gif" alt="Verified"></div></div>
    <a onClick="toggle_visibility('verified');">APPLY</a>
</div>


<div class="product_recommend" style="margin-top: 170px;"><span>BEST VALUE</span></div>
<div class="narrow_details_field"><div class="product_no_credit"><input type="checkbox" value="true" name="buy_sim" id="box">No thanks, I'll add call credit <a href="http://www.lebara.co.uk/storefinder" target="_blank" style="color: #00a6eb;">in store</a></div></div>
<div class="top_up_small_print" style="margin: 20px 0px 0px 0px;">* valid for 30 days <span>&dagger;for terms and conditions <a href="terms_and_conditions.php" target="_blank">click here</a>.</span></div>
<div class="clear"></div>
</div>







<div class="clear"></div>
<div class="payment_container_bottom" style="width: 634px;"></div><input type="submit" class="purchase_options_container_continue_form" style="padding: 20px 60px 0px 0px;" value="CONTINUE">
</form>
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
