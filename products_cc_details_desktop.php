<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "International Calls &amp; Free SIMs | Pay As You Go | Lebara";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>

<?php include($DOCUMENT_ROOT . "./includes/psp_header.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

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
        
        
        
        <div id="wrapper">
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
                            <h3 class="unlimited-header">Choose a payment method</h3>
        <div class="credit_cards"><img src="./images/credit_cards.jpg" alt="Credit Card payment" /></div>

    
    <div class="narrow_details_field"><span>*Card Number</span><div class="narrow_input_field"><input type="tel" name="card_number" value="" /></div></div>
    <div class="narrow_details_field"><span>*Name on card</span><div class="narrow_input_field"><input type="text" name="card_name" value="" /></div></div>
	<div class="narrow_details_field"><span>*Expiry Date</span>
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
    <div class="narrow_details_field"><span>*Security Code</span>
    	<div class="security_code_field"><input type="text" pattern="[0-9]*" name="card_number" value="" /></div>
        <div class="security_code_whatis">
        	<input id="popup_trigger" value="What is this?" type="button" />
            	<div id="Popup">  
					<a id="popupClose">x</a>  
					<p>The security code is the last three digits that can be found on the back of your card.</p>
                    <img src="images/lastthreedigits.jpg" alt="Back of Credit Card" />    
				</div>   
				<div id="bgPopup"></div>  
         </div>
    </div>
                    	
                        
                       
                    
                    
                    </div>	</div>
                    
                    
                    
                    <div class="form_bottom_styling_left">&nbsp;</div>
                    <div class="clear"></div>
                    	<div class="formbase_left_container">
                        <p>Store my card?&nbsp;</p>
							<div class="store_card_choice"><input type="radio" name="store_card" value="yes">Yes&nbsp;&nbsp;<input type="radio" name="store_card" value="no">No</div>
                        </div>
                        <div class="continue_button_container">
                            <a href="" class="ui-btn-primary btn-continue" style="text-decoration: none;" >Continue</a>
                        </div>
                        
                        <a href="products_cc_desktop.php" class="ui-btn-secondary btn-back btn-disable" style="text-decoration: none;" >Back</a>
                </form>
                <!-- /form contant -->
                
                </div>
            </div>
            <!-- /main contant -->
        
        </div>
<script type="text/javascript">
   (function() {
       var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
       mf.src = "//cdn.mouseflow.com/projects/10238f32-7260-42b4-b8b5-eaff19eae982.js";
       document.getElementsByTagName("head")[0].appendChild(mf);
   })();
</script>

</body>
</html>