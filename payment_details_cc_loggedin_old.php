<!DOCTYPE HTML>
<html>

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


<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

<div class="desktop_page_container mobile_element">

<div id="customer_main_details">
	<div class="mobile_number">Mobile Number: <span>07563372163</span></div>
</div>

<div class="content_box_invisible">
	<h3>Order Details</h3>
</div>

<div class="content_box">
	<h3><span>Amount due: </span>&pound;9.95</h3>
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




    <div id="wrapper" class="desktop_element">
            <!-- main contant -->
            <div id="sim-purchase-setp-1" class="sim-purchase">
            <div class="mylebara_basket_box">
            <div class="payment_info_desktop" style="width: 100%; font-weight: bold;">Payment details</div>
            <div class="payment_info_desktop">Phone to Top Up</div><div class="payment_detail_desktop"><span>+447946382647</span></div>
            <div class="basket_divider"></div>
            <div class="payment_info_desktop">Unlimited</div><div class="payment_detail_desktop"><span>&pound;19.95</span></div>
            <div class="payment_info_desktop">Auto Renew (30 days)</div><div class="payment_detail_desktop"><span>ON</span></div>
            <div class="basket_divider"></div>
            <div class="payment_info_desktop">Total Payment</div><div class="payment_detail_desktop"><span>&pound;19.95</span></div>
       		</div>
                <h1 class="accessibility"> SIM Purchase - Step 2 of 3</h1>
                <!-- form contant -->
                <form name="step01_ap" id="step01_ap" >
                    <div class="form-elements">
                        <div class="section-1">
                            <ol class="stepList_ml">
                                <li class="stepList-1">
                                    1. Select your Top Up
                                </li>
                                <li class="stepList-2 active_step">
                                    2. Payment Method
                                </li>
                                <li class="stepList-3">
                                    3. Confirmation page
                                </li>
                            </ol>
                        </div>
                        
                        <div class="section-1">
                            <h3 class="unlimited-header">Input the security code for your card:</h3>
        <div class="credit_cards"><img src="./images/credit_cards.jpg" alt="Credit Card payment" /></div>

    
    <div class="narrow_details_field"><span>*Card Number</span> XXXX-XXXX-XXXX-3736</div>
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
 </div>	</div>
                    
                    
                    
                    <div class="form_bottom_styling_left">&nbsp;</div>
                    <div class="clear"></div>
                    	<div class="formbase_left_container">
                        <p><a href="choose_cc.php">Or choose a different card.</a></p>
							
                        </div>
                        <div class="continue_button_container">
                            <a href="payment_confirmation_cc_loggedin.php" class="ui-btn-primary btn-continue" style="text-decoration: none;" >Continue</a>
                        </div>
                        
                        <a href="products_cc_loggedin.php" class="ui-btn-secondary btn-back btn-disable" style="text-decoration: none;" >Back</a>
                </form>
                <!-- /form contant -->
                
                </div>
            </div>
            <!-- /main contant -->
        
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
