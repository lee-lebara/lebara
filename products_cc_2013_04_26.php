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
       $("#customer_popupClose_prod").click(function(){  
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



<?php include($DOCUMENT_ROOT . "./includes/main_header.php"); ?>



<?php include($DOCUMENT_ROOT . "./includes/nav.php"); ?>

<div class="desktop_page_container mobile_element">

  <script type="text/javascript">
            var err_sim = "Please select a type of SIM card";
            var err_product = "Please select product to had in your basket";
            function onSelectProductClickEvent(t, productId, price, isNewProduct, esbProductId)
            {
                $('.radiobtn-group').find('a').removeClass('selected');
                $(t).addClass('selected');
                $('#unlimited-value').html('&pound;' + toDecimalPaddedString($(t).attr('id'), 2));
                $('#total-payment').html('&pound; ' + toDecimalPaddedString($(t).attr('id'), 2));
                $("#productCode").val(productId);
                $("#productFormatedPrice").val(price);
                $("#newProduct").val(isNewProduct);
                $("#esbProductId").val(esbProductId);
                showPaymentInfo();

                removeErrorMessage('section-3');
            }

            function toDecimalPaddedString(num, dec)
            {
                var a = num + "";
                var d = a.split('.')[1] === undefined ? '' : a.split('.')[1];

                if(d === '')
                {
                    a += '.';
                }
                if(d.length < dec)
                {
                    for( i = 0; i < (dec - d.length); i++)
                    a += '0';
                }
                else
                {
                    a = a.slice(0, (a.length - d.length + dec));
                }
                return a;
            }
			
			
			
			var err_sim = "Please select a type of SIM card";
            var err_product = "Please select product to had in your basket";
            function onSelectProductClickEvent(t, productId, price, isNewProduct, esbProductId)
            {
                $('.radiobtn-group').find('a').removeClass('selected');
                $(t).addClass('selected');
                $('#unlimited-value').html('&pound;' + toDecimalPaddedString($(t).attr('id'), 2));
                $('#total-payment').html('&pound; ' + toDecimalPaddedString($(t).attr('id'), 2));
                $("#productCode").val(productId);
                $("#productFormatedPrice").val(price);
                $("#newProduct").val(isNewProduct);
                $("#esbProductId").val(esbProductId);
                showPaymentInfo();

                removeErrorMessage('section-3');
            }

            function toDecimalPaddedString(num, dec)
            {
                var a = num + "";
                var d = a.split('.')[1] === undefined ? '' : a.split('.')[1];

                if(d === '')
                {
                    a += '.';
                }
                if(d.length < dec)
                {
                    for( i = 0; i < (dec - d.length); i++)
                    a += '0';
                }
                else
                {
                    a = a.slice(0, (a.length - d.length + dec));
                }
                return a;
            }
			


            $(document).ready(function()
            {
                $('.payament-detail').find('a').removeAttr('href');
                $('.radiobtn-group').find('a').removeAttr('href');
                $('#loading').addClass('hide');
                $('#wrong').addClass('hide');
                $('#promo-error-text').addClass('hide');
				$('#loading2').addClass('hide');
                $('#wrong2').addClass('hide');
                $('#promo-error-text2').addClass('hide');
				$('#loading3').addClass('hide');
                $('#wrong3').addClass('hide');
                $('#promo-error-text3').addClass('hide');
				$('#loading4').addClass('hide');
                $('#wrong4').addClass('hide');
                $('#promo-error-text4').addClass('hide');
                $('.btn-apply').unbind('click').bind('click', function(e)
                {
                    $('.loading').show();
                    //code related to onclick for Apply button will go here
                });
                if($('.ui-checkBx').length > 1)
                {
                    $('div.ui-checkBx').unbind('click').bind('click', function(e)
                    {
                        if($('div.ui-checkBx').hasClass('auto-topup-off'))
                        {
                            $('div.ui-checkBx').addClass('auto-topup-on').removeClass('auto-topup-off');
                            $('input.ui-checkBx').val('ON');
                        }
                        else
                        {
                            $('div.ui-checkBx').addClass('auto-topup-off').removeClass('auto-topup-on')
                            $('input.ui-checkBx').val('OFF');
                        }

                        $('#auto-renew-needed').html($('#auto-renew').val())
                    })
                }

                $('.remove-auto-renew').unbind('click').bind('click', function(e)
                {
                    $('div.ui-checkBx').trigger('click');
                });
				
				
				if($('.ui-checkBx2').length > 1)
                {
                    $('div.ui-checkBx2').unbind('click').bind('click', function(e)
                    {
                        if($('div.ui-checkBx2').hasClass('auto-topup-off'))
                        {
                            $('div.ui-checkBx2').addClass('auto-topup-on').removeClass('auto-topup-off');
                            $('input.ui-checkBx2').val('ON');
                        }
                        else
                        {
                            $('div.ui-checkBx2').addClass('auto-topup-off').removeClass('auto-topup-on')
                            $('input.ui-checkBx2').val('OFF');
                        }

                        $('#auto-renew-needed').html($('#auto-renew').val())
                    })
                }

                $('.remove-auto-renew').unbind('click').bind('click', function(e)
                {
                    $('div.ui-checkBx2').trigger('click');
                });
				
				
				
				if($('.ui-checkBx3').length > 1)
                {
                    $('div.ui-checkBx3').unbind('click').bind('click', function(e)
                    {
                        if($('div.ui-checkBx3').hasClass('auto-topup-off'))
                        {
                            $('div.ui-checkBx3').addClass('auto-topup-on').removeClass('auto-topup-off');
                            $('input.ui-checkBx3').val('ON');
                        }
                        else
                        {
                            $('div.ui-checkBx3').addClass('auto-topup-off').removeClass('auto-topup-on')
                            $('input.ui-checkBx3').val('OFF');
                        }

                        $('#auto-renew-needed').html($('#auto-renew').val())
                    })
                }

                $('.remove-auto-renew').unbind('click').bind('click', function(e)
                {
                    $('div.ui-checkBx3').trigger('click');
                });
				
				
				
				if($('.ui-checkBx4').length > 1)
                {
                    $('div.ui-checkBx4').unbind('click').bind('click', function(e)
                    {
                        if($('div.ui-checkBx4').hasClass('auto-topup-off'))
                        {
                            $('div.ui-checkBx4').addClass('auto-topup-on').removeClass('auto-topup-off');
                            $('input.ui-checkBx4').val('ON');
                        }
                        else
                        {
                            $('div.ui-checkBx4').addClass('auto-topup-off').removeClass('auto-topup-on')
                            $('input.ui-checkBx4').val('OFF');
                        }

                        $('#auto-renew-needed').html($('#auto-renew').val())
                    })
                }

                $('.remove-auto-renew').unbind('click').bind('click', function(e)
                {
                    $('div.ui-checkBx4').trigger('click');
                });
				
				

                $('.btn-continue').unbind('click').bind('click', function(e)
                {
                    checkUserInput(e)
                });
                $('.sim-card-detail input').unbind('click').bind('click', simSelected);
                $('.select-extra-sim input').attr('disabled', 'disabled');

                $('.remove-unlimited-value').unbind('click').bind('click', removeUnlimitedValue);
                $('.remove-extra-sim').unbind('click').bind('click', function(e)
                {
                    var s;

                    $('.select-extra-sim').find('input[name="extraSim"]').each(function()
                    {
                        if(!$(this).attr('checked'))
                        {
                            s = this;
                        }
                    });
                    $('.select-extra-sim').find('input[name="extraSim"]').removeAttr('checked');
                    $(s).attr('checked', 'checked');
                    freeSimSelected();
                });
                $('#promo-code').unbind('focus').bind('focus', function()
                {
                    if(!$('#promo-error-text').hasClass('hide'))
                    {
                        $('#promo-error-text').addClass('hide');
                        $('#wrong').addClass('hide');
                    }
                })
            });
           
            function showPaymentInfo()
            {
                if(!$('#empty-basket-comment').hasClass('hide'))
                {
                    $('#empty-basket-comment').addClass('hide');
                }
                if($('.payament-detail').hasClass('empty-basket'))
                {
                    $('.payament-detail').removeClass('empty-basket');
                }
                if($('.payament-detail-info').hasClass('hide'))
                {
                    $('.payament-detail-info').removeClass('hide');
                }
            }

            function simSelected()
            {
                $('#sim-card-type').html($('.sim-card-detail').find('input[name="simType"]:checked').attr('id'));
                $('.select-extra-sim input').removeAttr('disabled');
                removeErrorMessage('section-2');
                showPaymentInfo();
                $('.select-extra-sim input').unbind('click').bind('click', freeSimSelected);
            }

            function freeSimSelected()
            {
                $('#extra-sim').html($('.select-extra-sim').find('input[name="extraSim"]:checked').attr('id'));

                if($('.select-extra-sim').find('input[name="extraSim"]:checked').attr('id') === 'Free' && $('.extra-free-sim').hasClass('hide'))
                {
                    $('.extra-free-sim').removeClass('hide');
                }
                else
                {
                    $('.extra-free-sim').addClass('hide')
                }
            }

            function removeUnlimitedValue()
            {
                $('.radiobtn-group').find('a').removeClass('selected');
                $('.radiobtn-group').find('input').val('');
                $('#unlimited-value').html('&pound; ' + toDecimalPaddedString(0, 2));
                $('#total-payment').html('&pound; ' + toDecimalPaddedString(0, 2));

                $("#productCode").val('');
                $("#productFormatedPrice").val('');
                $("#newProduct").val('');
                $("#esbProductId").val('');
            }

            function removeErrorMessage(parentClass)
            {
                $('.error-message-holder').each(function()
                {
                    if(!$(this).hasClass('hide') && $(this).parents('div.payament-detail').length === 1)
                    {
                        $(this).addClass('hide');
                    }
                    if($(this).parent().hasClass(parentClass))
                    {
                        $(this).html('');
                        $(this).parent().removeClass('error-background');
                    }

                });
                if(parentClass === 'section-2')
                {
                    $('#micro-sim-arrow').attr('src', 'images/simPurchase/microArrow.png');
                    $('#nano-sim-arrow').attr('src', 'images/simPurchase/nanoArrow.png');
                }
            }
        </script>

<script>

$(document).ready(function(){
    initCheckBoxes();
});

var slideSpeed = 50;
var leftDist = 41;

function initCheckBoxes()
{
    $( ".cb-slider" ).attr('is_active', false);   //to track if the slider was dragged completely and released outside
    $( ".cb-slider" ).draggable({
         containment: "parent",
         stop: function(event, ui){
             //trigger a mouse up only if is_active is left at true
            if($(ui.helper).attr('is_active')) $(ui.helper).mouseup();
         }
    });

    $(".cb-slider").mousedown(function(){
        //set is active to true so that we can check on drag complete if its still true and take necessary action
        $(this).attr("is_active", true);
    });

    $(".cb-slider").mouseup(function(){

    var status = $(this).attr("cb-status");

    switch(status)
    {
        case "0":
        //its off, slide it by 41px;
        $(this).animate({left: leftDist}, slideSpeed);
        //change status to 1
        $(this).attr("cb-status", "1");
        break;

        case "1":
        //its 'on', slide it to 0px;
        $(this).animate({left: "0"}, slideSpeed);
        //change status to 0
        $(this).attr("cb-status", "0");

        break;
    }
    $(this).attr("is_active", false);  //reset
 });
}

</script>


<div class="content_box mobile_element">
	<h3>Top Up</h3>
    <p>Please choose the amount you'd like to top up from the options below:</p>
 
    <div class="product_box">
    	<div class="product_summary">
        	<a class="product_price" href="payment_details_cc.php"><span>&pound;10</span> + &pound;2.50 free call credit</a>
        	<div class="product_reveal"><a id="product_reveal_button2"><span>Find out more</span><img src="images/product_reveal_arrow.gif" /></a></div>
        </div>
            <div class="product_select rubine"><a href="payment_details_cc.php"><span>BUY NOW</span></a></div>
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
        	<div class="product_reveal"><a id="product_reveal_button3"><span>Find out more</span><img src="images/product_reveal_arrow.gif" /></a></div>
        </div>
            <div class="product_select rubine"><a href="payment_details_cc.php"><span>BUY NOW</span></a></div>
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
        	<div class="product_reveal"><a id="product_reveal_button4"><span>Find out more</span><img src="images/product_reveal_arrow.gif" /></a></div>
        </div>
            <div class="product_select rubine"><a href="payment_details_cc.php"><span>BUY NOW</span></a></div>
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
        	<div class="product_reveal"><a id="product_reveal_button"><span>Find out more</span><img src="images/product_reveal_arrow.gif" /></a></div>
        </div>
            <div class="product_select orange"><a href="payment_details_cc.php"><span>BUY NOW</span></a></div>
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
    <a class="non_button_link" href="inde.php">home</a>
	<a class="non_button_link_2" href="contact_us.php">contact customer services</a>
    <div class="clear"></div>
</div>

</div>

<div id="wrapper" class="desktop_element">
            <!-- main contant -->
            <div id="sim-purchase-setp-1" class="sim-purchase">
            <!--<div class="mylebara_nav">
            <h1 class="products_header">Top Up Credit</h1>
        	<ul>
            	<li><a href="#">MyLebara Profile</a></li>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#" id="mylebara_nav_selected">Top Up Credit</a></li>
                <li><a href="#">Top Up History</a></li>
                <li><a href="#">Call History</a></li>
                <li><a href="#">MyLebara Money</a></li>
            </ul>
			<div class="purchase_balance_box">
            	<h4>Your Pay As You Go Balance:</h4>
                <h5>&pound;4.05</h5>
            </div>
       		</div>-->
                <h1 class="accessibility"> SIM Purchase - Step 1 of 3</h1>
                <!-- form contant -->
                <form name="step01_ap" id="step01_ap" style="margin-left: 80px;" >
                    <div class="form-elements">
                        <div class="section-1">
                            <ol class="stepList_ml">
                                <li class="stepList-1 active_step">
                                    1. Select your Top Up
                                </li>
                                <li class="stepList-2">
                                    2. Payment Method
                                </li>
                                <li class="stepList-3">
                                    3. Confirmation page
                                </li>
                            </ol>
                        </div>
                        <div class="section-3">
                            <h3 class="unlimited-header">Pay As You Go - Top Up <span class="unlimited-more-info">Get &pound;30, pay &pound20 activating auto top-up</span></h3>
                            <div id="select-product" class="error-message-holder"></div>
                            <fieldset class="sim-topup-detail">
                                <div class="sim-topup-amount-detail radiobtn-group">
                                    <label>Select the amount to Top Up</label>
                                    <a href="#" id="payg_05" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;5</span></a>
                                    <a href="#" id="payg_10" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;10</span></a>
                                    <a href="#" id="payg_20" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;20</span></a>
                                    <a href="#" id="payg_30" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;30</span></a>
                                    <input type="hidden" id="productCode" value="" />
                                    <input type="hidden" id="productFormatedPrice" value="" />
                                    <input type="hidden" id="newProduct" value="" />
                                    <input type="hidden" id="esbProductId" value="" />
                                </div>
                                <div class="auto-renew-detail">
                                    <label class="auto-renew-lbl">Select Auto Top Up</label>
                                    <input type="hidden" id="auto-renew" class="ui-checkBx" value="OFF" />
                                    <div class="auto-topup auto-topup-off ui-checkBx"></div>
                                    <div class="auto_topup_option">
       								<div class="renew_content">
    									<p>Auto top up with: </p>
        							<div class="renew_amount">
    									<select>
  											<option value="5">&pound;5</option>
  											<option value="10">&pound;10</option>
  											<option value="20">&pound;20</option>
  											<option value="30">&pound;30</option>
										</select>
       								</div>
    								</div>
    								<div class="balance_threshold_content">
    									<p>If my balance falls below: </p>
        							<div class="balance_threshold_amount">
    									<select>
  											<option value="5">&pound;5</option>
  											<option value="10">&pound;10</option>
  											<option value="20">&pound;20</option>
  											<option value="30">&pound;30</option>
										</select>
    							</div>
      					  	</div>
							</div>
    						<div class="clear"></div>
                                    <span class="more-info">More info and Terms &amp; Conditions <a href="#" class="">here</a></span>
                                    <div class="promo-code">
                                        <label>Promo Code</label>
                                        <div class="promo-code-input" >
                                            <input type="text" name="promo-code" id="promo-code" />
                                            <span id="promo-error-text" class="promo-error-txt">Wrong code</span>
                                        </div>
                                        <button class="ui-btn-secondary btn-apply" >
                                            Apply
                                        </button>
                                        <div class="promo-code-img">
                                            <img id="loading" src="images/icons/loading.gif" class="" />
                                            <img id="wrong" src="images/simPurchase/wrong.jpg" style="margin-top: 4px; margin-left: 2px;" class="" />
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    
                    </div>
                    
                    
                    
                    <div class="form_bottom_styling_left">&nbsp;</div>
                    <div class="clear"></div>
                    	<div class="formbase_left_container">
                        <p style="color: #d1005d;">Best Offer - get &pound;10 FREE when you activate Auto Top Up with &pound;20 Pay As You Go. <a href="#">Read more</a>.</p> 
                        </div>
                        <div class="continue_button_container">
                            <a id="customer_popup_trigger_prod"><span  class="ui-btn-primary btn-continue" style="text-decoration: none;">Continue</span></a>
                        </div>
                        
                        <!--<button class="ui-btn-secondary btn-back btn-disable" type="button" disabled="disabled" >Back</button>-->
                </form>
                <!-- /form contant -->
                <div class="payment-info hide">
                    <div class="payament-detail empty-basket">
                        <h2>Payment Details</h2>
                        <span id="empty-basket-comment" class="" >Your basket is empty</span>
                        <div class="">
                            <span id="sim-error-detail" class=" error-message-holder hide">Select SIM Card Type</span>
                            <span id="product-error-detail" class="error-message-holder hide">Choose a product</span>
                        </div>
                        <div class="payament-detail-info hide">
                            <div class="level-1 line-hr">
                                <div class="payment-lbl">
                                    SIM card Type:
                                    <div class="payament-detail-content" id="sim-card-type">
                                        No SIM
                                    </div>
                                </div>
                                <div class="payment-lbl">
                                    Unlimited
                                    <div class="payament-detail-content">
                                        <span id="unlimited-value"> &pound; 0.00 </span><a href="#" class="remove-value remove-unlimited-value" ></a>
                                    </div>
                                </div>
                                <div class="payment-lbl">
                                    Auto Renew (30 days)
                                    <div class="payament-detail-content">
                                        <span id="auto-renew-needed">OFF</span><a href="#" class="remove-value remove-auto-renew" ></a>
                                    </div>
                                </div>
                                <div class="payment-lbl">
                                    Extra NonoSIM
                                    <div class="payament-detail-content">
                                        <span id="extra-sim">No</span><a href="#" class="remove-value remove-extra-sim" ></a>
                                    </div>
                                </div>
                            </div>
                            <div class="level-1" style="padding-top: 30px;">
                                <div class="payment-lbl">
                                    Total Payment
                                    <div class="payament-detail-content" id="total-payment">
                                        &pound; 0.00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="extra-sim hide">
                        <h2>Need and Extra Free SIM</h2>
                        <div class="select-extra-sim">
                            <div>
                                <input type="radio" name="extraSim" id="Free" value="" />
                                <label for="Free">Yes</label>
                            </div>
                            <div>
                                <input type="radio" name="extraSim" id="No" value="" checked="checked" />
                                <label for="No">No</label>
                            </div>
                        </div>
                        <div class="extra-free-sim hide">
                            <div>
                                <input type="radio" name="freeSimType" id="FreeMicroSIM" value="" />
                                <label for="FreeMicroSIM">Ordinary / MicroSIM
                                    <br>
                                    (most phones)</label>
                            </div>
                            <div>
                                <input type="radio" name="freeSimType" id="FreeNanoSIM" value="" checked="checked" />
                                <label for="FreeNanoSIM">NanoSIM
                                    <br>
                                    (IPhone 5 or IPad mini)</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /main contant -->
        
        </div>
        
        
     
    <div id="customer_popup_prod">
    	<a id="customer_popupClose_prod">x</a> 
		
    	<div class="selection_box">
            
            
            <div class="signin_details" id="toggleText11_prod">
            
            
            <h4 class="blue">Do you have a Lebara SIM?</h4>
        					<div class="existing_customer">
                				<div class="customer_type_button"><a class="signin_reveal_button_prod blue">Yes</a></div>
            				</div>
            				<div class="new_customer">
                				<div class="customer_type_button"><a href="new_customer_unlimited.php" class="rubine">No - I Need One</a></div>
            				</div>
                
                
   			</div>
            

            <div id="toggleText22_prod" class="signin_details" style="display:none;">
            
            
            <h4 class="blue">Please enter your details to continue:</h4>
    			<div class="email_signin_simple">
                    <div class="signin_content_simple">
        				<div class="signin_input_field_simple"><input type="text" name="email" id="email" value="" placeholder="Email Address" /></div>
                    	<div class="signin_input_field_simple"><input type="password" name="password" id="password" value="" placeholder="Password" /></div>
                    </div>
                    <div class="signin_checkbox"><input type="checkbox" value="true" name="keepSignedIn">Keep me signed in on this computer.</div>
                    <a class="signin_button rubine" a href="payment_details_cc_loggedin.php" >Sign In</a>
                </div>
            	<p class="sign_up_link">Have a Lebara SIM but no account? <a class="signin_reveal_button_prod2">Buy Now</a></p>
            
            
            
                        
             
             
             </div>
                        
             <div class="signin_details" id="toggleText33_prod" style="display: none;">
            
            
             			<h4 class="blue">Please enter your Lebara Mobile Number:</h4>
                    	<div class="mobilenumber_signin2">
                    		<div class="signin_content2">
                    			<div class="signin_input_field2"><input type="mobile_number" name="mobile_number" id="mobile_number" value="" placeholder="Lebara Mobile Number" /></div>
                        	</div>
                    		<a class="signin_button orange" a href="payment_details_cc.php" >Sign In</a>
                    	</div>
                    	<p><a class="signin_reveal_button_prod2">Cancel</a></p>
   			
            
            </div>


            
        </div>
	</div>   
    <div id="customer_bgPopup_prod"></div>
        
        
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
