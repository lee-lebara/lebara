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
                                <li class="stepList-3 active_step">
                                    3. Payment Method
                                </li>
                                <li class="stepList-3">
                                    4. Confirmation page
                                </li>
                            </ol>
                        </div>
                        <div class="section-2">
                            <h2>Choose Payment Method</h2>
                            <ul class="psp_payment_choice">
                            	<li><a href="new_customer_unlimited_payment_2.php"><img src="images/simPurchase/logo_mastercard.jpg" alt="Mastercard" /> MasterCard Credit</a></li>
                                <li><a href="new_customer_unlimited_payment_2.php"><img src="images/simPurchase/logo_visa.jpg" alt="Visa" /> Visa Credit</a></li>
                                <li><a href="new_customer_unlimited_payment_2.php"><img src="images/simPurchase/logo_ideal.jpg" alt="Ideal" /> Ideal</a></li>
                                <li><a href="new_customer_unlimited_payment_2.php"><img src="images/simPurchase/logo_giropay.jpg" alt="Giropay" /> Giropay</a></li>
                                <li><a href="new_customer_unlimited_payment_2.php"><img src="images/simPurchase/logo_maestro.jpg" alt="Maestro" /> Maestro</a></li>
                                <li><a href="new_customer_unlimited_payment_2.php"><img src="images/simPurchase/logo_dotpay.jpg" alt="Dotpay" /> Dotpay</a></li>
                                <li><a href="new_customer_unlimited_payment_2.php"><img src="images/simPurchase/logo_bancontact.jpg" alt="Bancontact/Mister" /> Bancontact/Mister</a></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="form_bottom_styling_left">&nbsp;</div>
                    <div class="clear"></div>
                    	<div class="formbase_left_container">
                        </div>
                        <div class="continue_button_container">
                        </div>
                        
                        <button class="ui-btn-secondary btn-back" type="button" onClick="parent.location='new_customer_unlimited_details.php'" >Back</button>
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



<script type="text/javascript">
   (function() {
       var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
       mf.src = "//cdn.mouseflow.com/projects/10238f32-7260-42b4-b8b5-eaff19eae982.js";
       document.getElementsByTagName("head")[0].appendChild(mf);
   })();
</script>

</body>
</html>
