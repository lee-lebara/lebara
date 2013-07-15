<!DOCTYPE HTML>
<html>

<?php $pageTitle = "Select Product";
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


<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>


<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

<h1 class="desktop_element product_header">Product - <span>Title</span></h1>

<div class="desktop_page_container mobile_element">

<div id="customer_main_details">
	<div class="mobile_number">Mobile Number: <span>07563372163</span></div>
</div>

<div class="content_box_invisible">
	<h3>Order Details</h3>
</div>

<div class="content_box">
	<h3><span>Amount due: </span>&pound;XX</h3>
</div>

<div class="content_box">
	<h2>Payment Details</h2>
	<p>To pay securely enter your three-digit security code in the box below for the stored card number:<br />XXXX-XXXX-XXXX-2734</p>
    <div class="narrow_details_field"><span>Security Code</span>
    	<div class="security_code_field"><input type="text" pattern="[0-9]*" name="card_number" value="" /></div>
        <div class="security_code_whatis">
        	<input id="popup_trigger" value="What is this?" type="button" />
            <a href="choose_cc.php" class="new_card_link">Use a new or different card</a>
            	<div id="Popup">  
					<a id="popupClose">x</a>  
					<p>The security code is the last three digits that can be found on the back of your card:</p> 
                    <img src="images/lastthreedigits.jpg" alt="Back of Credit Card" />     
				</div>
                <!--<div class="tandcs_checkbox"><input type="checkbox" name="tandcs" value="true"> I agree with the <a href="terms_and_conditions.php" target="_blank">terms and conditions.</a></div>-->
				<div id="bgPopup"></div>  
         </div>
    </div>
    <div class="mi_pay_link">Payments powered by Mi-Pay Ltd.</div>
 <div class="clear"></div>
</div>


<div class="content_box_invisible">
	<div class="wide_button blue"><a href="payment_confirmation_cc_loggedin.php"><span>COMPLETE MY PURCHASE</span></a></div>
    <a class="non_button_link" href="index_loggedin.php">home</a>
	<a class="non_button_link_2" href="contact_us_loggedin.php">contact customer services</a>
   <div class="clear"></div>
</div>
</div>


<!-- Desktop Content to Follow -->

<div class="desktop_page_container_bottomless desktop_element">

<div class="purchase_nav_container">
	<ol class="purchase_nav_ml">
		<li class="purchase_step_1">1. Choose Amount</li>
        <li class="purchase_step_2">2. Options</li>
        <li class="purchase_step_3">3. Your Details</li>
        <li class="purchase_step_4 active_step">4. Payment Method</li>
        <li class="purchase_step_5">5. Confirmation</li>
    </ol>
</div>

</div>

<div class="purchase_page_container desktop_element">





<div class="payment_container" style="background: url('./images/verisign_logo.jpg') top right no-repeat;">
<h2>Amount due: &pound;XX</h2>
<h3>Input the security code for your card:</h3>
        <div class="credit_cards"><img src="./images/credit_cards.jpg" alt="Credit Card payment" /></div>
    <div class="narrow_details_field">
    <div class="card_dropdown"><span style="margin: 5px 35px 0px 0px;">Choose card:</span>
    	<select>
  			<option value="barclaycard">Barclaycard - XXXX XXXX XXXX 4264</option>
  			<option value="nationwide_credit">Nationwide Card - XXXX XXXX XXXX 5836	</option>
		</select>
    </div>
    </div>
    <div class="narrow_details_field"><span>*Security Code</span>
    	<div class="security_code_field"><input type="text" pattern="[0-9]*" name="card_number" value="" /></div>
        <div class="security_code_whatis">
        	<input id="popup_trigger_dt" value="What is this?" type="button" />
            	<div id="Popup_dt">  
					<a id="popupClose_dt">x</a>  
					<p>The security code is the last three digits that can be found on the back of your card.</p>
                    <img src="images/lastthreedigits.jpg" alt="Back of Credit Card" />    
				</div>   
				<div id="bgPopup_dt"></div>  
         </div>
    </div> 
    <p><a href="choose_cc_loggedin.php">Or add a new card.</a></p>
<div class="clear"></div>
</div>

<div class="payment_container_bottom"></div><a id="customer_popup_trigger_prod" class="purchase_options_container_continue" href="payment_confirmation_cc_loggedin_firsttime.php">CONTINUE</a>



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
