<script> 
$(document).ready(function(){
  $(".sub_buttons").click(function(){
    $("#payment_choice_reveal").slideToggle("200");
	$('body,html').animate({scrollTop:$('#customer_main_details').offset().top +35},500)
  });
});
</script>

<div id="homepage_buttons">
    <div class="wide_button rubine"><a class="sub_buttons"><span>TOP UP</span></a></div>
	<div id="payment_choice_reveal" style="display: none">
    	<div class="narrow_button rubine" style="float:left;"><a href="products_cc_recognised.php"><span>BUY NOW</span></a></div>
    	<div class="narrow_button orange last" style="float:left;"><a href="products_v_recognised.php"><span>USE VOUCHER</span></a></div>
    </div>
    <div class="wide_button blue"><a href="products_promotions_recognised.php"><span>OFFERS</span></a></div>
    <div class="wide_button blue"><a href="view_balance_recognised.php"><span>MY LEBARA</span></a></div>
    <div class="wide_button blue"><a href="http://www.lebara.co.uk/money" target="_blank"><span><span class="button_new_text">NEW!</span> MY LEBARA MONEY</span></a></div>
    <div class="narrow_button blue"><a href="rates_recognised.php"><span>FIND RATES</span></a></div>
    <div class="narrow_button blue last"><a href="help_recognised.php"><span>HELP</span></a></div>
</div>