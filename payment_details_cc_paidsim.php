<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "Payment Details";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<script>

    function loadPopup(){  
        //loads popup only if it is disabled  
        if($("#bgPopup").data("state")==0){  
            $("#bgPopup").css({  
                "opacity": "0.7"  
            });  
            $("#bgPopup").fadeIn("medium");  
            $("#Popup").fadeIn("medium");  
            $("#bgPopup").data("state",1);  
        }  
    }  
      
    function disablePopup(){  
        if ($("#bgPopup").data("state")==1){  
            $("#bgPopup").fadeOut("medium");  
            $("#Popup").fadeOut("medium");  
            $("#bgPopup").data("state",0);  
        }  
    }  
      
    function centerPopup(){  
        var winw = $(window).width();  
        var winh = $(window).height();  
        var popw = $('#Popup').width();  
        var poph = $('#Popup').height();  
        $("#Popup").css({  
            "position" : "absolute"
        });  
        //IE6  
        $("#bgPopup").css({  
            "height": winh    
        });  
    }

    $(document).ready(function() {  
       $("#bgPopup").data("state",0);  
       $("#popup_trigger").click(function(){  
            centerPopup();  
            loadPopup();     
       });  
       $("#popupClose").click(function(){  
            disablePopup();  
       });  
       $(document).keypress(function(e){  
            if(e.keyCode==27) {  
                disablePopup();   
            }  
        });  
    });  
      
    //Recenter the popup on resize
    $(window).resize(function() {  
    centerPopup();  
    });
</script>

<script>

    function loadPopup_dt(){  
        //loads popup only if it is disabled  
        if($("#bgPopup_dt").data("state")==0){  
            $("#bgPopup_dt").css({  
                "opacity": "0.7"  
            });  
            $("#bgPopup_dt").fadeIn("medium");  
            $("#Popup_dt").fadeIn("medium");  
            $("#bgPopup_dt").data("state",1);  
        }  
    }  
      
    function disablePopup_dt(){  
        if ($("#bgPopup_dt").data("state")==1){  
            $("#bgPopup_dt").fadeOut("medium");  
            $("#Popup_dt").fadeOut("medium");  
            $("#bgPopup_dt").data("state",0);  
        }  
    }  
      
    function centerPopup_dt(){  
        var winw = $(window).width();  
        var winh = $(window).height();  
        var popw = $('#Popup_dt').width();  
        var poph = $('#Popup_dt').height();  
        $("#Popup_dt").css({  
            "position" : "absolute"
        });  
        //IE6  
        $("#bgPopup_dt").css({  
            "height": winh    
        });  
    }

    $(document).ready(function() {  
       $("#bgPopup_dt").data("state",0);  
       $("#popup_trigger_dt").click(function(){  
            centerPopup_dt();  
            loadPopup_dt();     
       });  
       $("#popupClose_dt").click(function(){  
            disablePopup_dt();  
       });  
       $(document).keypress(function(e){  
            if(e.keyCode==27) {  
                disablePopup_dt();   
            }  
        });  
    });  
      
    //Recenter the popup on resize
    $(window).resize(function() {  
    centerPopup_dt();  
    });
</script>

<?php include($DOCUMENT_ROOT . "./includes/main_header.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav.php"); ?>

<div class="desktop_page_container mobile_element">

<div class="content_box">
	<h2>Payment Details</h2>
    <h3>Amount due: &pound;20.00</h3>
	<p>Please choose your method of payment below. And here we can show <a href="#">link text also</a>.</p>
    <form class="select_payment_gateway">
        <div class="credit_cards"><!--<input type="radio" name="payment_type" value="card" class="select_payment_button" />--><img src="./images/credit_cards.jpg" alt="Credit Card payment" /></div>
        <!--<div class="paypal"><input type="radio" name="payment_type" value="paypal" class="select_payment_button" /><img src="./images/paypal_logo.jpg" alt="paypal" /></div>-->
	</form>
    
    
    <!--<div class="narrow_details_field"><span>Name on Card</span><div class="narrow_input_field"><input type="text" name="card_name" value="" /></div></div>-->
    <div class="narrow_details_field"><span>Card Number</span><div class="narrow_input_field"><input type="tel" name="card_number" value="" /></div></div>
	<div class="narrow_details_field"><span>Expiry Date</span>
    	<div class="month_dropdown">
    		<select>
  				<option value="jan">Jan</option>
  				<option value="feb">Feb</option>
  				<option value="mar">Mar</option>
  				<option value="apr">Apr</option>
                <option value="may">May</option>
  				<option value="jun">Jun</option>
  				<option value="jul">Jul</option>
  				<option value="aug">Aug</option>
                <option value="sep">Sep</option>
  				<option value="oct">Oct</option>
  				<option value="nov">Nov</option>
  				<option value="dec">Dec</option>
			</select>
       	</div>
        <div class="year_dropdown">
    		<select>
  				<option value="2013">2013</option>
  				<option value="2014">2014</option>
  				<option value="2015">2015</option>
  				<option value="2016">2016</option>
                <option value="2017">2017</option>
  				<option value="2018">2018</option>
  				<option value="2019">2019</option>
  				<option value="2020">2020</option>
                <option value="2021">2021</option>
  				<option value="2022">2022</option>
  				<option value="2023">2023</option>
  				<option value="2024">2024</option>
			</select>
       	</div>
    </div>
    <div class="narrow_details_field"><span>Security Code</span>
    	<div class="security_code_field"><input type="text" pattern="[0-9]*" name="card_number" value="" /></div>
        <div class="security_code_whatis">
        	<input id="popup_trigger" value="What is this?" type="button" />
            	<div id="Popup">  
					<a id="popupClose">x</a>  
					<p>The security code is the last three digits that can be found on the back of your card:</p> 
                    <img src="images/lastthreedigits.jpg" alt="Back of Credit Card" />   
				</div>   
				<div id="bgPopup"></div>  
         </div>
    </div>
    <!--<div class="horizontal_divider"></div>
    <div class="narrow_details_field"><span>First line of address</span><div class="narrow_input_field"><input type="text" name="address_1" value="25" /></div></div>
    <div class="narrow_details_field"><span>Postcode</span><div class="narrow_input_field"><input type="text" name="postcode" value="EC2R 7BP" /></div></div>-->
    <div class="tandcs_checkbox"><input type="checkbox" name="tandcs" value="true"> I agree with the <a href="terms_and_conditions.php" target="_blank">terms and conditions.</a></div>
    <div class="mi_pay_link">Payments powered by Mi-Pay Ltd.</div>
    <!--<div class="lookup_button blue"><a href="#"><span>LOOK UP</span></a></div>-->
    <div class="clear"></div>
</div>


<div class="content_box_invisible">
	<div class="wide_button blue"><a href="paid_sim_confirmation.php"><span>COMPLETE MY PURCHASE</span></a></div>
    <a class="non_button_link" href="index.php">home</a>
	<a class="non_button_link_2" href="contact_us.php">contact customer services</a>
    <div class="clear"></div>
</div>

</div>


<!-- Desktop Content to Follow -->

<h1 class="desktop_element product_header">Get your <span>FREE SIM</span></h1>

<div class="desktop_page_container_bottomless desktop_element">

<div class="purchase_nav_container">
	<ol class="purchase_nav_ml_threestep">
		<li class="purchase_step_1">1. Your Details</li>
        <li class="purchase_step_2">2. Options</li>
        <li class="purchase_step_3 active_step">3. Payment Details</li>
        <li class="purchase_step_4">4. Confirmation</li>
    </ol>
</div>

</div>

<div class="purchase_page_container desktop_element">

<div class="payment_container" style="background: url('./images/verisign_logo.jpg') top right no-repeat;">


	<h2>Amount: &pound;XX</h2>
    
    <form class="select_payment_gateway">
        <div class="credit_cards"><!--<input type="radio" name="payment_type" value="card" class="select_payment_button" />--><img src="./images/credit_cards.jpg" alt="Credit Card payment" /></div>
        <!--<div class="paypal"><input type="radio" name="payment_type" value="paypal" class="select_payment_button" /><img src="./images/paypal_logo.jpg" alt="paypal" /></div>-->
	</form>
    
    
    <!--<div class="narrow_details_field"><span>Name on Card</span><div class="narrow_input_field"><input type="text" name="card_name" value="" /></div></div>-->
    <div class="narrow_details_field"><span>Card Number</span><div class="narrow_input_field"><input type="tel" name="card_number" value="" /></div></div>
	<div class="narrow_details_field"><span>Expiry Date</span>
    	<div class="month_dropdown">
    		<select>
  				<option value="jan">Jan</option>
  				<option value="feb">Feb</option>
  				<option value="mar">Mar</option>
  				<option value="apr">Apr</option>
                <option value="may">May</option>
  				<option value="jun">Jun</option>
  				<option value="jul">Jul</option>
  				<option value="aug">Aug</option>
                <option value="sep">Sep</option>
  				<option value="oct">Oct</option>
  				<option value="nov">Nov</option>
  				<option value="dec">Dec</option>
			</select>
       	</div>
        <div class="year_dropdown">
    		<select>
  				<option value="2013">2013</option>
  				<option value="2014">2014</option>
  				<option value="2015">2015</option>
  				<option value="2016">2016</option>
                <option value="2017">2017</option>
  				<option value="2018">2018</option>
  				<option value="2019">2019</option>
  				<option value="2020">2020</option>
                <option value="2021">2021</option>
  				<option value="2022">2022</option>
  				<option value="2023">2023</option>
  				<option value="2024">2024</option>
			</select>
       	</div>
    </div>
    <div class="narrow_details_field"><span>Security Code</span>
    	<div class="security_code_field"><input type="text" pattern="[0-9]*" name="card_number" value="" /></div>
        <div class="security_code_whatis">
        	<input id="popup_trigger_dt" value="What is this?" type="button" />
            	<div id="Popup_dt">  
					<a id="popupClose_dt">x</a>  
					<p>The security code is the last three digits that can be found on the back of your card:</p> 
                    <img src="images/lastthreedigits.jpg" alt="Back of Credit Card" />   
				</div>   
				<div id="bgPopup_dt"></div>  
         </div>
    </div>
    <!--<div class="horizontal_divider"></div>
    <div class="narrow_details_field"><span>First line of address</span><div class="narrow_input_field"><input type="text" name="address_1" value="25" /></div></div>
    <div class="narrow_details_field"><span>Postcode</span><div class="narrow_input_field"><input type="text" name="postcode" value="EC2R 7BP" /></div></div>-->
    <div class="tandcs_checkbox"><input type="checkbox" name="tandcs" value="true"> I agree with the <a href="terms_and_conditions.php" target="_blank">terms and conditions.</a></div>
<div class="clear"></div>
</div>
<div class="payment_container_bottom"><div class="mi_pay_link">Payments powered by Mi-Pay Ltd.</div></div><a id="customer_popup_trigger_prod" class="purchase_options_container_continue" href="paid_sim_confirmation.php">CONTINUE</a>
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
