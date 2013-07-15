<!DOCTYPE HTML>
<html>

<?php $pageTitle = "Select Product";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<script>

    function loadPopup_prod(){  
        //loads popup only if it is disabled  
        if($("#customer_bgPopup_prod").data("state")==0){  
            $("#customer_bgPopup_prod").css({  
                "opacity": "0.7"  
            });  
            $("#customer_bgPopup_prod").fadeIn("medium");  
            $("#customer_popup_prod").fadeIn("medium");  
            $("#customer_bgPopup_prod").data("state",1);
			document.getElementById('toggleText').style.display = 'none';
			document.getElementById('toggleText2').style.display = 'block';
        }  
    }  
      
    function disablePopup_prod(){  
        if ($("#customer_bgPopup_prod").data("state")==1){  
            $("#customer_bgPopup_prod").fadeOut("medium");  
            $("#customer_popup_prod").fadeOut("medium");  
            $("#customer_bgPopup_prod").data("state",0);  
        }  
    }  
      
    function centerPopup_prod(){  
        var winw = $(window).width();  
        var winh = $(window).height();  
        var popw = $('#Popup_prod').width();  
        var poph = $('#Popup_prod').height();  
        $("#customer_popup_prod").css({  
            "position" : "fixed"
        });  
        //IE6  
        $("#customer_bgPopup_prod").css({  
            "height": winh    
        });  
    }

    $(document).ready(function() {  
       $("#customer_bgPopup_prod").data("state",0);  
       $("#customer_popup_trigger_prod").click(function(){  
            centerPopup_prod();  
            loadPopup_prod();     
       });  
       $(".customer_popupClose_prod").click(function(){  
            disablePopup_prod();
       });  
       $(document).keypress(function(e){  
            if(e.keyCode==27) {  
                disablePopup_prod();   
            }  
        });  
    });  
      
    //Recenter the popup on resize
    $(window).resize(function() {  
    centerPopup_prod();  
    });
</script>

<script> 
$(document).ready(function(){
  $("#product_reveal_button").click(function(){
    $("#toggleText").slideToggle("200");
  });
  $("#product_reveal_button2").click(function(){
    $("#toggleText2").slideToggle("200");
  });
  $("#product_reveal_button3").click(function(){
    $("#toggleText3").slideToggle("200");
  });
  $("#product_reveal_button4").click(function(){
    $("#toggleText4").slideToggle("200");
  });
});
</script>

<script> 
$(document).ready(function(){
  $(".signin_reveal_button_prod").click(function(){
    $("#toggleText11_prod").slideToggle("200");
	$("#toggleText22_prod").slideToggle("200");
  });
});
</script>

<script> 
$(document).ready(function(){
  $(".signin_reveal_button_prod2").click(function(){
    $("#toggleText22_prod").slideToggle("200");
	$("#toggleText33_prod").slideToggle("200");
  });
});
</script>

<script>
$(document).ready(function(){
$('.purchase_choice li').on('click', function(){
    $(this).addClass('chosen').siblings().removeClass('chosen');
});
});
</script>

<script>
function autoTopUp(){
    if( document.getElementById("box").checked==true ){
        window.location="customer_or_not_topup_plusauto.php";
    } else { window.location="customer_or_not_topup.php"; }
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


<?php include($DOCUMENT_ROOT . "./includes/main_header.php"); ?>


<?php include($DOCUMENT_ROOT . "./includes/nav.php"); ?>

<h1 class="desktop_element product_header">Pay As You Go - <span>Top Up</span></h1>

<!--<div class="product_choice_dropdown desktop_element">
	<h2>...or choose another product to Top Up:</h2>
	<select>
  	<option value="product_1">Unlimited</option>
  	<option value="product_2">Uk Plus</option>
  	<option value="product_3">All In One</option>
  	<option value="product_4">Data Pass</option>
  	<option value="product_5">Weekly Pass</option>
  	<option value="product_6">Monthly Pass</option>
	</select>
 </div>-->

<div class="clear"></div>


<div class="content_box mobile_element">
	<h3>Top Up</h3>
    <p>Please choose the amount you'd like to top up from the options below:</p>
 
    <div class="product_box">
    	<div class="product_summary">
        	<a class="product_price" href="payment_details_cc.php"><span>&pound;10</span> + &pound;2.50 free call credit</a>
        	<div class="product_reveal"><a id="product_reveal_button2"><span>Find out more</span><img src="images/product_reveal_arrow.gif" alt="Find out more" /></a></div>
        </div>
            <div class="product_select rubine"><a href="customer_or_not_topup.php"><span>BUY NOW</span></a></div>
    </div>
    <div class="product_details" id="toggleText2" style="display: none">
    	<ul>
        	<li>Unlimited minutes to China, Hong Kong, and six other countries.</li>
            <li>Unlimited Lebara to Lebara UK calls &amp; texts</li>
        </ul>
        <div class="product_flags"><img src="images/product_flags.gif" alt="Country Flags" /></div>
        <p>For more information, please go to our <a href="terms_and_conditions.php" target="_blank">terms and conditions</a></p>
    </div>
    
    <div class="product_box">
    	<div class="product_summary">
        	<a class="product_price" href="payment_details_cc.php"><span>&pound;20</span> + &pound;2.50 free call credit</a>
        	<div class="product_reveal"><a id="product_reveal_button3"><span>Find out more</span><img src="images/product_reveal_arrow.gif" alt="Find out more" /></a></div>
        </div>
            <div class="product_select rubine"><a href="customer_or_not_topup.php"><span>BUY NOW</span></a></div>
    </div>
    <div class="product_details" id="toggleText3" style="display: none">
    	<ul>
        	<li>Unlimited minutes to China, Hong Kong, and six other countries.</li>
            <li>Unlimited Lebara to Lebara UK calls &amp; texts</li>
        </ul>
        <div class="product_flags"><img src="images/product_flags.gif" alt="Country Flags" /></div>
        <p>For more information, please go to our <a href="terms_and_conditions.php" target="_blank">terms and conditions</a></p>
    </div>
    
    <div class="product_box">
    	<div class="product_summary">
        	<a class="product_price" href="payment_details_cc.php"><span>&pound;30</span> + &pound;2.50 free call credit</a>
        	<div class="product_reveal"><a id="product_reveal_button4"><span>Find out more</span><img src="images/product_reveal_arrow.gif" alt="Find out more" /></a></div>
        </div>
            <div class="product_select rubine"><a href="customer_or_not_topup.php"><span>BUY NOW</span></a></div>
    </div>
    <div class="product_details" id="toggleText4" style="display: none">
    	<ul>
        	<li>Unlimited minutes to China, Hong Kong, and six other countries.</li>
            <li>Unlimited Lebara to Lebara UK calls &amp; texts</li>
        </ul>
        <div class="product_flags"><img src="images/product_flags.gif" alt="Country Flags" /></div>
        <p>For more information, please go to our <a href="terms_and_conditions.php" target="_blank">terms and conditions</a></p>
    </div>
    <div class="clear"></div>
</div>

<div class="content_box mobile_element">
	<p><a href="all_offers_loggedin.php">Click to see all offers</a></p>
<div class="product_box">
    	<div class="product_summary">
        	<div class="product_image"><img src="images/flag_chinese.gif" alt="Chinese Flag"></div>
        	<a class="product_price" href="payment_details_cc.php"><span>&pound;9.95</span> Chinese New Year</a>
        	<div class="product_reveal"><a id="product_reveal_button"><span>Find out more</span><img src="images/product_reveal_arrow.gif" alt="Find out more" /></a></div>
        </div>
            <div class="product_select orange"><a href="customer_or_not_topup.php"><span>BUY NOW</span></a></div>
    </div>
    <div class="product_details" id="toggleText" style="display: none">
    	<ul>
        	<li>Unlimited minutes to China, Hong Kong, and six other countries.</li>
            <li>Unlimited Lebara to Lebara UK calls &amp; texts</li>
        </ul>
        <div class="product_flags"><img src="images/product_flags.gif" alt="Country Flags" /></div>
        <p>For more information, please go to our <a href="terms_and_conditions.php" target="_blank">terms and conditions</a></p>
    </div>
    <div class="clear"></div>
</div>

<div class="content_box_invisible mobile_element">
    <a class="non_button_link" href="index.php">home</a>
	<a class="non_button_link_2" href="contact_us.php">contact customer services</a>
    <div class="clear"></div>
</div>

<!-- Desktop Content to Follow -->

<div class="desktop_page_container_bottomless desktop_element">

<div class="purchase_nav_container">
	<ol class="purchase_nav_ml">
		<li class="purchase_step_1 active_step">1. Choose Amount</li>
        <li class="purchase_step_2">2. Options</li>
        <li class="purchase_step_3">3. Your Details</li>
        <li class="purchase_step_4">4. Payment Method</li>
        <li class="purchase_step_5">5. Confirmation</li>
    </ol>
</div>

</div>

<div class="purchase_page_container desktop_element">


<div class="purchase_options_container">

<ul class="purchase_choice">
<li class="product_box_desktop">
	<div class="product_box_details">
	<div class="product_amount">&pound;5</div>
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

<li class="product_box_desktop">
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
<div class="product_recommend"><span>BEST VALUE</span></div>

<div class="top_up_small_print">* Free credit valid for 30 days <span>&dagger;for terms and conditions <a href="#">click here</a>.</span></div>

</div>

<form method="post" onSubmit="autoTopUp(); return false;">
<div class="purchase_options_container2">
<div class="auto_topup_box">
	<h2>Auto Top Up</h2>
    <p>Never run out of credit again</p>
    <div class="auto_topup_switcher">
    	Top Up with 
        	<select>
  				<option value="5">&pound;5</option>
  				<option value="10">&pound;10</option>
  				<option value="20">&pound;20</option>
  				<option value="30">&pound;30</option>
			</select> when my balance reaches &pound;2
    </div>
    <p><input value="1" type="checkbox" id="box" name="auto"> Tick box to activate Auto Top Up</p>
</div>

<div class="promo_code_box">
	<div class="promo_code_box_detail">Promo code <input type="text" name="promo_code" /><div id="verified" style="display: none;"><img src="./images/small_green_tick.gif" alt="Verified"></div></div>
    <a onClick="toggle_visibility('verified');">APPLY</a>
</div>


</div>
<div class="payment_container_bottom"></div>
<input type="submit" class="purchase_options_container_continue_form" style="padding: 20px 60px 0px 0px;" value="CONTINUE">


</form>
</div>

<div class="clear"></div>
        
        

 <?php include($DOCUMENT_ROOT . "./includes/page_rate.php"); ?>


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
