<!DOCTYPE HTML>
<html>

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
        <div id="wrapper">
            <!-- main contant -->
            <div id="sim-purchase-setp-1" class="sim-purchase">
                <h1 class="accessibility"> SIM Purchase - Step 1 of 3</h1>
                <!-- form contant -->
                <form name="step01" id="step01" action="new_customer_payg_details.php" >
                    <div class="form-elements">
                        <div class="section-1">
                            <ol class="stepList">
                                <li class="stepList-1 active_step">
                                    1. Select a SIM &amp; product
                                </li>
                                <li class="stepList-2">
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
                            <h2>Select the type of SIM card you need</h2>
                            <div id="select-sim" class="error-message-holder"></div>
                            <div class="sim-card-detail">
                                <div class="img-holder">
                                    <img src="images/simPurchase/microSIM.jpg" />
                                    <img id="micro-sim-arrow" style="vertical-align: top; padding-top: 40px;" src="images/simPurchase/microArrow.png" />
                                    <img style="vertical-align: bottom; margin-left: -100px; padding-bottom: 15px;" src="images/simPurchase/nanoSIM.jpg" />
                                    <img id="nano-sim-arrow" style="vertical-align: top; padding-top: 75px;" src="images/simPurchase/nanoArrow.png" />
                                </div>
                                <fieldset>
                                    <div>
                                        <input type="radio" name="simType" id="MicroSIM" value="MicroSIM" />
                                        <label for="MicroSIM">Ordinary / MicroSIM (most phones)</label>
                                    </div>
                                    <div>
                                        <input type="radio" name="simType" id="NanoSIM" value="NanoSIM" />
                                        <label for="NanoSIM">NanoSIM (IPhone 5 or IPad mini)</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <div class="section-3">
                            <h2 class="unlimited-header">Pay As You Go - Top Up <span class="unlimited-more-info">Pay &pound;20, get &pound;30 activaing Auto Top Up</span></h2>
                            <div id="select-product" class="error-message-holder"></div>
                            <fieldset class="sim-topup-detail">
                                <div class="sim-topup-amount-detail radiobtn-group">
                                    <label>Select the product you need</label>
                                    <a href="#" id="10" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;10</span></a>
                                    <a href="#" id="20" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;20</span></a>
                                    <a href="#" id="30" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;30</span></a>
                                    <input type="hidden" id="productCode" value="" />
                                    <input type="hidden" id="productFormatedPrice" value="" />
                                    <input type="hidden" id="newProduct" value="" />
                                    <input type="hidden" id="esbProductId" value="" />
                                </div>
                                <div class="auto-renew-detail">
                                    <label class="auto-renew-lbl">Select Auto Renew</label>
                                    <input type="hidden" id="auto-renew" class="ui-checkBx" value="OFF" />
                                    <div class="auto-topup auto-topup-off ui-checkBx"></div>
                                    <div class="auto-renew-cnt">
                                        <p></p>
                                    </div>
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
                    </div>
                    <div class="continue_button_container">
                        <button type="button" class="ui-btn-primary btn-continue" value="submit"  >Continue</button>
                    </div>
                        
                    <button class="ui-btn-secondary btn-back btn-disable" type="button" disabled="disabled" >Back</button>

                    
                </form>
                <!-- /form contant -->
                <div class="payment-info">
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
                                    Auto Top Up
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
                                <input type="radio" name="extraSim" id="Free" value="Free" />
                                <label for="Free">Yes</label>
                            </div>
                            <div>
                                <input type="radio" name="extraSim" id="No" value="No" checked="checked" />
                                <label for="No">No</label>
                            </div>
                        </div>
                        <div class="extra-free-sim hide">
                            <div>
                                <input type="radio" name="freeSimType" id="FreeMicroSIM" value="FreeMicroSIM" />
                                <label for="FreeMicroSIM">Ordinary / MicroSIM
                                    <br>
                                    (most phones)</label>
                            </div>
                            <div>
                                <input type="radio" name="freeSimType" id="FreeNanoSIM" value="FreeNanoSIM" checked="checked" />
                                <label for="FreeNanoSIM">NanoSIM
                                    <br>
                                    (IPhone 5 or IPad mini)</label>
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
