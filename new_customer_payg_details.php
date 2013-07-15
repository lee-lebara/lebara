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
        <script type="text/javascript">
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
            function checkUserInput(e)
            {
                e.preventDefault();
                if($('.sim-card-detail').find('input[name="simType"]:checked').attr('id') === undefined)
                {
                    $('#select-sim').html(err_sim);
                    $('#micro-sim-arrow').attr('src', 'images/simPurchase/microArrow-error.png');
                    $('#nano-sim-arrow').attr('src', 'images/simPurchase/nanoArrow-error.png');
                    $('.section-2').addClass('error-background');
                    $('#sim-error-detail').removeClass('hide');
                }
                else
                {
                    $('#select-sim').html('');
                    $('#micro-sim-arrow').attr('src', 'images/simPurchase/microArrow.png');
                    $('#nano-sim-arrow').attr('src', 'images/simPurchase/nanoArrow.png');
                    $('.section-2').removeClass('error-background');
                    $('#sim-error-detail').addClass('hide');
                }
                if($('.radiobtn-group').find('a.selected').attr('id') === undefined)
                {
                    $('#select-product').html(err_product);
                    $('.section-3').addClass('error-background');
                    $('#product-error-detail').removeClass('hide')
                }
                else
                {
                    $('#select-product').html('');
                    $('.section-3').removeClass('error-background');
                    $('#product-error-detail').addClass('hide')
                }
                if($('.sim-card-detail').find('input[name="simType"]:checked').attr('id') === undefined || $('.radiobtn-group').find('a.selected').attr('id') === undefined)
                {
                    $('#empty-basket-comment').addClass('hide');
                    $('.payament-detail').addClass('empty-basket');
                    $('.payament-detail-info').addClass('hide')
                    $('#promo-error-text').removeClass('hide');
                    $('#wrong').removeClass('hide');
                }
                else
                {
                    showPaymentInfo();
                    $('#step01').submit();
                }
            }

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
	$("#toggleText").removeClass("hide");
	$("#toggleText2").addClass("hide");  
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
		$("#toggleText").addClass("hide");
		$("#toggleText2").removeClass("hide"); 
    });
});
</script>

<script>
function populateForm(){
  document.getElementById("address_1").value = "1 White City Road";
  document.getElementById("postcode").value = "W12 7EG";
  document.getElementById("payment_info_firstname").textContent = "John";
  document.getElementById("payment_info_lastname").textContent = "Smith";
  document.getElementById("payment_info_email").textContent = "johnsmith@gmail.com";
  document.getElementById("payment_info_address_1").textContent = "1 White City Road";
  document.getElementById("payment_info_address_2").textContent = "W12 7EG";
  document.getElementById("payment_info_address_3").textContent = "United Kingdom";
 return true; //if you want to proceed with the submission or whatever your button does, otherwise return false
}
</script>
        <div id="wrapper">
            <!-- main contant -->
            <div id="sim-purchase-setp-1" class="sim-purchase">
                <h1 class="accessibility"> SIM Purchase - Step 1 of 3</h1>
                <!-- form contant -->
                <form name="step01" id="step01" action="new_customer_payg_payment.php" >
                    <div class="form-elements">
                        <div class="section-1">
                            <ol class="stepList">
                                <li class="stepList-1">
                                    1. Select a SIM &amp; product
                                </li>
                                <li class="stepList-2 active_step">
                                    2. Personal Details
                                </li>
                                <li class="stepList-3">
                                    3. Payment Method
                                </li>
                                <li class="stepList-3">
                                    4. Confirmation page
                                </li>
                            </ol>
                        </div>
                        <div class="section-2">
                            <h2>Personal Details</h2>
                            <div id="select-sim" class="error-message-holder"></div>
                            <div class="customer_details">
                            	<h3>About you</h3>
                                <div class="narrow_details_field"><span>*Title:</span>
    								<div class="title_dropdown">
    									<select>
  											<option value="1">Mr</option>
  											<option value="2">Mrs</option>
										</select>
   									</div>
    							</div>
    								<div class="narrow_details_field"><span>*Name</span><div class="narrow_input_field"><input type="text" name="first_name" value="" /></div></div>
    								<div class="narrow_details_field"><span>*Last Name</span><div class="narrow_input_field"><input type="text" name="last_name" value="" /></div></div>
    								<div class="narrow_details_field"><span>*Email</span><div class="narrow_input_field"><input type="text" name="email" value="" /></div></div>
    								<div class="narrow_details_field"><span>*Repeat Email</span><div class="narrow_input_field"><input type="text" name="email_repeat" value="" /></div></div>
    								<div class="narrow_details_field"><span>*Password</span><div class="narrow_input_field"><input type="text" name="password" value="" /></div></div>
    								<div class="narrow_details_field"><span>*Repeat Password</span><div class="narrow_input_field"><input type="text" name="password_repeat" value="" /></div></div>
                                    
                            </div>
                            <div class="customer_details">
									<div class="narrow_details_field"><span>*First line of address</span><div class="narrow_input_field"><input type="text" name="address_1" id="address_1" value="" placeholder="e.g. 28" /></div></div>
    								<div class="narrow_details_field"><span>*Postcode</span><div class="narrow_input_field"><input type="text" name="postcode" id="postcode" value="" placeholder="eg AL9 6BL" /></div></div>
    								<div class="lookup_button blue"><a class="auto_address_button" ><span>LOOK UP</span></a></div>
   									<div class="address_picker" id="toggleText" style="display: none">
    									<ul>
        									<li><a onClick="return populateForm();" class="auto_address_button">1 White City Road, LONDON, W12 7EG</a></li>
            								<li><a onClick="return populateForm();" class="auto_address_button">2 White City Road, LONDON, W12 7EG</a></li>
            								<li><a onClick="return populateForm();" class="auto_address_button">3 White City Road, LONDON, W12 7EG</a></li>
            								<li><a onClick="return populateForm();" class="auto_address_button">4 White City Road, LONDON, W12 7EG</a></li>
            								<li><a onClick="return populateForm();" class="auto_address_button">5 White City Road, LONDON, W12 7EG</a></li>
            								<li><a onClick="return populateForm();" class="auto_address_button">6 White City Road, LONDON, W12 7EG</a></li>
            								<li><a onClick="return populateForm();" class="auto_address_button">7 White City Road, LONDON, W12 7EG</a></li>
            								<li><a onClick="return populateForm();" class="auto_address_button">8 White City Road, LONDON, W12 7EG</a></li>
        								</ul>
    								</div>
    								<div class="clear"></div>
    								<a class="manual_address_entry" id="manual_address_button"><span>Enter address manually</span></a>
    								<div class="manual_fields" id="toggleText2" style="display: none;">
    									<div class="narrow_details_field"><span>*Street</span><div class="narrow_input_field"><input type="text" name="street" value="" /></div></div>
    									<div class="narrow_details_field"><span>*Town/City</span><div class="narrow_input_field"><input type="text" name="town_city" value="" /></div></div>
    								</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form_bottom_styling_left">&nbsp;</div>
                    <div class="clear"></div>
                    	<div class="formbase_left_container">
                        <p>*Mandatory fields</p>
    					<p style="font-size: 0.7em; float: right; margin-right: 20px;">Already a customer? <a href="#" target="_blank">Sign in</a></p>
                        </div>
                        <div class="continue_button_container">
                            <button type="button" class="ui-btn-primary btn-continue" value="submit" >Continue to payment</button>
                        </div>
                        
                        <button class="ui-btn-secondary btn-back" type="button" onClick="parent.location='new_customer_unlimited.php'" >Back</button>
              
                </form>
                <!-- /form contant -->
                <div class="payment-info">
                    <div class="payament-detail">
                        <h2>Payment Details</h2>
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
                                        <span id="unlimited-value"> &pound; 9.95 </span><a href="#" class="remove-value remove-unlimited-value" ></a>
                                    </div>
                                </div>
                                <div class="payment-lbl">
                                    Auto Renew (30 days)
                                    <div class="payament-detail-content">
                                        <span id="auto-renew-needed">OFF</span><a href="#" class="remove-value remove-auto-renew" ></a>
                                    </div>
                                </div>
                                <div class="payment-lbl hide">
                                    Extra NanoSIM
                                    <div class="payament-detail-content">
                                        <span id="extra-sim">No</span><a href="#" class="remove-value remove-extra-sim" ></a>
                                    </div>
                                </div>
                            </div>
                            
                        <h2 style="padding-top: 20px;">Name, email &amp; address</h2>
                            <div class="customer_info line-hr">
                                <div class="payment-lbl">
                                	<div id="payment_info_firstname"></div>
                                </div>
                                <div class="payment-lbl">
                                	<div id="payment_info_lastname"></div>
                                </div>
                                <div class="payment-lbl">
                                	<div id="payment_info_email"></div>
                                </div>
                                <div class="payment-lbl">
                                	<div id="payment_info_address_1"></div>
                                </div>
                                <div class="payment-lbl">
                                	<div id="payment_info_address_2"></div>
                                </div>
                                <div class="payment-lbl">
                                	<div id="payment_info_address_3"></div>
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



<script type="text/javascript">
   (function() {
       var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
       mf.src = "//cdn.mouseflow.com/projects/10238f32-7260-42b4-b8b5-eaff19eae982.js";
       document.getElementsByTagName("head")[0].appendChild(mf);
   })();
</script>

</body>
</html>
