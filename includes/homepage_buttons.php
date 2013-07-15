<script> 
$(document).ready(function(){
  $(".sub_buttons").click(function(){
    $("#payment_choice_reveal").slideToggle("200");
  });
});
$(document).ready(function(){
  $(".sub_buttons2").click(function(){
    $("#mylebara_choice_reveal").slideToggle("200");
  });
});
</script>

<div id="homepage_buttons">
    <div class="wide_button rubine"><a class="sub_buttons"><span>TOP UP</span></a></div>
	<div id="payment_choice_reveal" style="display: none;">
    	<div class="narrow_button rubine"><a href="products_cc.php"><span>BUY NOW</span></a></div>
    	<div class="narrow_button orange last"><a href="products_v.php"><span>USE VOUCHER</span></a></div>
    </div>
    <div class="wide_button blue"><a href="products_promotions.php"><span>OFFERS</span></a></div>
    <div class="wide_button blue"><a class="sub_buttons2"><span>MY LEBARA</span></a></div>
    <div id="mylebara_choice_reveal" style="display: none;">
    	<div class="narrow_button blue"><a href="login.php"><span>LOG IN</span></a></div>
    	<div class="narrow_button blue last"><a href="registration_1_nopurchase.php"><span>SIGN UP</span></a></div>
    </div>
    <div class="wide_button blue"><a href="http://www.lebara.co.uk/money" target="_blank"><span><span class="button_new_text">NEW!</span> MY LEBARA MONEY</span></a></div>
    <div class="narrow_button blue"><a href="rates.php"><span>FIND RATES</span></a></div>
    <div class="narrow_button blue last"><a href="help.php"><span>HELP</span></a></div>
</div>


