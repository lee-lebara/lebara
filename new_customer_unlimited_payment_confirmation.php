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

<?php include($DOCUMENT_ROOT . "./includes/psp_header.php"); ?>


		<script type="text/javascript" src="js_desktop/lebara.js"></script>
        <script type="text/javascript" src="js_desktop/library.js"></script>

        
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
                <h1 class="accessibility"> SIM Purchase - Step 1 of 3</h1>
                <!-- form contant -->
                <form name="step01" id="step01" >
                    <div class="form-elements">
                        <div class="section-1">
                            <ol class="stepListpsp">
                                <li class="stepList-1">
                                    1. Select a SIM &amp; product
                                </li>
                                <li class="stepList-2">
                                    2. Personal Details
                                </li>
                                <li class="stepList-3">
                                    3. Payment Method
                                </li>
                                <li class="stepList-3 active_step">
                                    4. Confirmation page
                                </li>
                            </ol>
                        </div>
                        <div class="section-2">
                            <h2>Confirmation Page</h2>
                            
                            <div class="blue_information_box">
                            	<h3>Registration &amp; Payment are successful. Please confirm your registration via email.</h3>
                                <br /><br />
                                <p>When you receive yoru new SIM card we will email you an E-PIN</p>
                                <p>Follow the instructions and enter your E-PIN to Top Up your phone.</p>
                                <br /><br />
                                <p>If you don't receive your SIM card or E-PIN within 3 to 5 days, please contact <a href="#">customer services</a></p>
                                <div class="clear"></div>
                            </div>
                            
                            <p class="psp_para">Congratulations and thank you for your order. You have successfully ordered the following.</p>
                            <p class="psp_para">We have emailed you the receipt to the following email address: example@example.com</p>
                            
                            <table width="100%" class="product_confirmation_info">
                            	<tr class="underline_row"><td>Order</td><td>Date</td><td>Item(s)</td><td class="last">Price</td></tr>
                                <tr><td>123456 - 1354</td><td>12/04/2013</td><td>NanoSIM + Top Up Credit Call</td><td class="last">&pound;20</td></tr>
                                <tr><td>&nbsp;</td><td>&nbsp;</td><td>Auto Top Up (Pay &pound;20 Receive &pound;30)</td><td class="last">-</td></tr>
                                <tr class="underline_row"><td>&nbsp;</td><td>&nbsp;</td><td>NanoSIM (for iPhone 5 or iPad Mini)</td><td class="last">Free</td></tr>
                                <tr><td>&nbsp;</td><td>&nbsp;</td><td style="text-align:right">Discount</td><td class="last">-&pound;5</td></tr>
                                <tr class="total_row"><td>&nbsp;</td><td>&nbsp;</td><td style="text-align:right">Total Payment</td><td class="last">&pound;15</td></tr>
                            </table>
                        </div>
                    </div>
                    <div>
                        
                        <div class="form_bottom_styling_left">&nbsp;</div>
                    <div class="clear"></div>
                    	<div class="formbase_left_container">
                        </div>
                        <div class="continue_button_container">
                            <button type="button" class="ui-btn-primary btn-continue"  onClick="parent.location='index.php'" >Home</button>
                        </div>
                       
                        
                        
                    </div>
                </form>
                <!-- /form contant -->
                <div class="payment-info">
                    <div class="payament-detail">
                        <h2>Payment Details</h2>
                        <div class="">
                            <span id="sim-error-detail" class=" error-message-holder hide">Select SIM Card Type</span>
                            <span id="product-error-detail" class="error-message-holder hide">Choose a product</span>
                        </div>
                        <div class="payament-detail-info">
                            <div class="level-1 line-hr">
                                <div class="payment-lbl">
                                    SIM card Type:
                                    <div class="payament-detail-content" id="sim-card-type">
                                        MicroSIM
                                    </div>
                                </div>
                                <div class="payment-lbl">
                                    Unlimited
                                    <div class="payament-detail-content">
                                        <span id="unlimited-value"> &pound; 9.95 </span>
                                    </div>
                                </div>
                                <div class="payment-lbl">
                                    Auto Renew (30 days)
                                    <div class="payament-detail-content">
                                        <span id="auto-renew-needed">OFF</span>
                                    </div>
                                </div>
                                <div class="payment-lbl hide">
                                    Extra NanoSIM
                                    <div class="payament-detail-content">
                                        <span id="extra-sim">No</span>
                                    </div>
                                </div>
                            </div>
                            
                        <h2 style="padding-top: 20px;">Name, email &amp; address</h2>
                            <div class="customer_info line-hr">
                                <div class="payment-lbl">
                                	<div id="payment_info_firstname">John</div>
                                </div>
                                <div class="payment-lbl">
                                	<div id="payment_info_lastname">Smith</div>
                                </div>
                                <div class="payment-lbl">
                                	<div id="payment_info_email">johnsmith@gmail.com</div>
                                </div>
                                <div class="payment-lbl">
                                	<div id="payment_info_address_1">1 White City Road</div>
                                </div>
                                <div class="payment-lbl">
                                	<div id="payment_info_address_2">W12 7EG</div>
                                </div>
                                <div class="payment-lbl">
                                	<div id="payment_info_address_3">United Kingdom</div>
                                </div>
                            </div>
                            <div class="level-1">
                                <div class="payment-lbl">
                                    Total Payment
                                    <div class="payament-detail-content" id="total-payment">
                                        &pound; 9.95
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>


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
