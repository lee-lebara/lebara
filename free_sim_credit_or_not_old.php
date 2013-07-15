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

<?php include($DOCUMENT_ROOT . "./includes/main_header.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav.php"); ?>

<div class="desktop_page_container">

<script>
$(document).ready(function(){

if(!Modernizr.input.placeholder){

	$('[placeholder]').focus(function() {
	  var input = $(this);
	  if (input.val() == input.attr('placeholder')) {
		input.val('');
		input.removeClass('placeholder');
	  }
	}).blur(function() {
	  var input = $(this);
	  if (input.val() == '' || input.val() == input.attr('placeholder')) {
		input.addClass('placeholder');
		input.val(input.attr('placeholder'));
	  }
	}).blur();
	$('[placeholder]').parents('form').submit(function() {
	  $(this).find('[placeholder]').each(function() {
		var input = $(this);
		if (input.val() == input.attr('placeholder')) {
		  input.val('');
		}
	  })
	});

}

});
</script>

<script> 
$(document).ready(function(){
  $(".auto_address_button").click(function(){
    $("#toggleText").slideToggle("100");
  });
  $("#manual_address_button").click(function(){
    $("#toggleText2").slideToggle("100");
  });
});
</script>

<script>
	$(document).ready(function(){
    $('a.auto_address_button').click(function(){
        $(this).toggleClass("selected");
    });
});
	$(document).ready(function(){
    $('a#manual_address_button').click(function(){
        $(this).toggleClass("selected");
    });
});
</script>

<script>
function populateForm(){
  document.getElementById("address_1").value = "1 White City Road";
  document.getElementById("postcode").value = "W12 7EG";
 return true; //if you want to proceed with the submission or whatever your button does, otherwise return false
}
</script>

<script>
function buyWithCredit(){
    if( document.getElementById("box").checked==true ){
        window.location="free_sim_confirmation.php";
    } else { window.location="payment_details_cc_paidsim.php"; }
}
</script>

<script type="text/javascript">
$(document).ready(function(){
$('.purchase_choice li').on('click', function(){
    $(this).addClass('chosen').siblings().removeClass('chosen');
});
});
</script>

<script type="text/javascript">
$(document).ready(function(){
$('#box').on('click', function(){
    $('.purchase_choice li').addClass('chosen').siblings().removeClass('chosen');
});
});
</script>


<script>
$("input[name$='sim_number']").click(function() {
    var value = $(this).val();
    if (value == 'variant-2') {
        $(".variant-1").show();
        $(".variant-2").hide();
    }
    else if (value == 'variant-1') {
        $(".variant-2").show();
        $(".variant-1").hide();
    }
});
$(".variant-1").show();
$(".variant-2").hide();
</script>


<div class="content_box_invisible">
	<h3>How much credit would you like to add to your free SIM?</h3>
</div>



<form action="" method="post" onSubmit="buyWithCredit(); return false;">
<div class="content_box">
    
<h2>This means you'll be ready to go as soon as your SIM arrives</h2>
 
 
<div style="width: 65%;">

<ul class="purchase_choice">

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
<div class="product_recommend" style="margin-top: 170px;"><span>BEST VALUE</span></div>
<!--<div class="narrow_details_field"><span style="width:190px;"><input type="checkbox" value="true" name="buy_sim" id="box">No thanks, I don't need credit</span></div>-->
</div>

<div class="top_up_small_print" style="margin: 20px 0px 0px 0px;">* valid for 30 days <span>&dagger;for terms and conditions <a href="terms_and_conditions.php" target="_blank">click here</a>.</span></div>

<div class="clear"></div>
 
 </div>

<div class="content_box_invisible">
	<div class="wide_button blue"><a href="payment_details_cc_paidsim.php"><span>CONTINUE</span></a></div>
	<!--<input type="submit" class="fake_buynow_button" style="float: right; padding: 7px; width: 200px; height: 40px; background-color: #d1005d; border: 0px; border-radius: 7px; color: #ffffff; font-size: 1.2em; font-family: GothamBook;" value="CONTINUE"></input>-->
    <a class="non_button_link" href="index.php">home</a>
	<a class="non_button_link_2" href="contact_us.php">contact customer services</a>
    <div class="clear"></div>
</div>
</form>

</div>

<script>
$("input[name$='sim_number']").click(function() {
    var value = $(this).val();
    if (value == 'variant-2') {
        $(".variant-1").show();
        $(".variant-2").hide();
    }
    else if (value == 'variant-1') {
        $(".variant-2").show();
        $(".variant-1").hide();
    }
});
$(".variant-1").show();
$(".variant-2").hide();
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
