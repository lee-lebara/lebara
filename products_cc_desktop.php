<!DOCTYPE HTML>
<html>

<?php $pageTitle = "International Calls &amp; Free SIMs | Pay As You Go | Lebara";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>

<?php include($DOCUMENT_ROOT . "./includes/psp_header.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

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
        
        
        
        <div id="wrapper">
            <!-- main contant -->
            <div id="sim-purchase-setp-1" class="sim-purchase">
            <div class="mylebara_nav">
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
       		</div>
                <h1 class="accessibility"> SIM Purchase - Step 1 of 3</h1>
                <!-- form contant -->
                <form name="step01_ap" id="step01_ap" >
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
                        <div class="section-2">
                            <h3>Which number would you like to Top Up?</h3>
                            <div class="phone_choice_dropdown">
    							<select>
  									<option value="number_1">My Phone - 07967 123 456</option>
  									<option value="number_2">Second Phone - 07986 654 321</option>
								</select>
    						</div>
                            <div id="select-sim" class="error-message-holder"></div>
                            <p>You can top up friends' and family phones with credit. <a href="#">Add Number</a></p>
                        </div>
                        <div class="product_divider"></div>
                        <div class="section-3">
                            <h3 class="unlimited-header">Pay As You Go - Top Up <span class="unlimited-more-info">Get &pound;30, pay &pound20 activating auto top-up</span></h3>
                            <div id="select-product" class="error-message-holder"></div>
                            <fieldset class="sim-topup-detail">
                                <div class="sim-topup-amount-detail radiobtn-group">
                                    <label>Select the amount to Top Up</label>
                                    <a href="#" id="payg_10" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c')" ><span>&pound;10</span></a>
                                    <a href="#" id="payg_20" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c')" ><span>&pound;20</span></a>
                                    <a href="#" id="payg_30" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c')" ><span>&pound;30</span></a>
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
                    
                    	<div class="product_divider"></div>
                        <div class="section-3">
                            <h3 class="unlimited-header">Unlimited<span class="unlimited-more-info"> UK &amp; Abroad with Lebara Unlimited</span></h3>
                            <div id="select-product" class="error-message-holder"></div>
                            <fieldset class="sim-topup-detail">
                                <div class="sim-topup-amount-detail radiobtn-group">
                                    <label>Select the product you need</label>
                                    <a href="#" id="9.95" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;9.95</span></a>
                                    <a href="#" id="19.95" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;19.95</span></a>
                                    <a href="#" id="29" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;29</span></a>
                                    <a href="#" id="38" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;38</span></a>
                                    <a href="#" id="39" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;39</span></a>
                                    <input type="hidden" id="productCode" value="" />
                                    <input type="hidden" id="productFormatedPrice" value="" />
                                    <input type="hidden" id="newProduct" value="" />
                                    <input type="hidden" id="esbProductId" value="" />
                                </div>
                                <div class="auto-renew-detail">
                                    <label class="auto-renew-lbl">Select Auto Renew</label>
                                    <input type="hidden" id="auto-renew2" class="ui-checkBx2" value="OFF" />
                                    <div class="auto-topup auto-topup-off ui-checkBx2"></div>
                                    <div class="auto-renew-cnt">
                                        It will renew automatically every 30 days from the day of purchase.
                                    </div>
                                    <span class="more-info">More info and Terms &amp; Conditions <a href="#" class="">here</a></span>
                                    <div class="promo-code">
                                        <label>Promo Code</label>
                                        <div class="promo-code-input" >
                                            <input type="text" name="promo-code" id="promo-code" />
                                            <span id="promo-error-text2" class="promo-error-txt2">Wrong code</span>
                                        </div>
                                        <button class="ui-btn-secondary btn-apply" >
                                            Apply
                                        </button>
                                        <div class="promo-code-img">
                                            <img id="loading2" src="images/icons/loading.gif" class="" />
                                            <img id="wrong2" src="images/simPurchase/wrong.jpg" style="margin-top: 4px; margin-left: 2px;" class="" />
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        
                        <div class="product_divider"></div>
                        <div class="section-3">
                            <h3 class="unlimited-header">All In One<span class="unlimited-more-info"> Calls, Texts, Data...</span></h3>
                            <div id="select-product" class="error-message-holder"></div>
                            <fieldset class="sim-topup-detail">
                                <div class="sim-topup-amount-detail radiobtn-group">
                                    <label>Select the amount to Top Up</label>
                                    <a href="#" id="9.95" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;9.95</span></a>
                                    <a href="#" id="19.95" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;19.95</span></a>
                                    <a href="#" id="29" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;29</span></a>
                                    <a href="#" id="38" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;38</span></a>
                                    <a href="#" id="39" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;39</span></a>
                                    <input type="hidden" id="productCode" value="" />
                                    <input type="hidden" id="productFormatedPrice" value="" />
                                    <input type="hidden" id="newProduct" value="" />
                                    <input type="hidden" id="esbProductId" value="" />
                                </div>
                                <div class="auto-renew-detail">
                                    <span class="more-info">More info and Terms &amp; Conditions <a href="#" class="">here</a></span>
                                    <div class="promo-code">
                                        <label>Promo Code</label>
                                        <div class="promo-code-input" >
                                            <input type="text" name="promo-code" id="promo-code" />
                                            <span id="promo-error-text3" class="promo-error-txt3">Wrong code</span>
                                        </div>
                                        <button class="ui-btn-secondary btn-apply" >
                                            Apply
                                        </button>
                                        <div class="promo-code-img">
                                            <img id="loading3" src="images/icons/loading.gif" class="" />
                                            <img id="wrong3" src="images/simPurchase/wrong.jpg" style="margin-top: 4px; margin-left: 2px;" class="" />
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        
                        <div class="product_divider"></div>
                        <div class="section-3">
                            <h3 class="unlimited-header">Data Pass <span class="unlimited-more-info">Great value bundles for internet on the go.</span></h3>
                            <div id="select-product" class="error-message-holder"></div>
                            <fieldset class="sim-topup-detail">
                                <div class="sim-topup-amount-detail radiobtn-group">
                                    <label>Select the product you need</label>
                                    <a href="#" id="9.95" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;9.95</span></a>
                                    <a href="#" id="19.95" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;19.95</span></a>
                                    <a href="#" id="29" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;29</span></a>
                                    <a href="#" id="38" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;38</span></a>
                                    <a href="#" id="39" class="sim-topup-amount" onClick="onSelectProductClickEvent(this, 'a','b','c','d')" ><span>&pound;39</span></a>
                                    <input type="hidden" id="productCode" value="" />
                                    <input type="hidden" id="productFormatedPrice" value="" />
                                    <input type="hidden" id="newProduct" value="" />
                                    <input type="hidden" id="esbProductId" value="" />
                                </div>
                                <div class="auto-renew-detail">
                                    <label class="auto-renew-lbl">Select Auto Renew</label>
                                    <input type="hidden" id="auto-renew4" class="ui-checkBx4" value="OFF" />
                                    <div class="auto-topup auto-topup-off ui-checkBx4"></div>
                                    <div class="auto-renew-cnt">
                                        It will renew automatically every 30 days from the day of purchase.
                                    </div>
                                    <span class="more-info">More info and Terms &amp; Conditions <a href="#" class="">here</a></span>
                                    <div class="promo-code">
                                        <label>Promo Code</label>
                                        <div class="promo-code-input" >
                                            <input type="text" name="promo-code" id="promo-code" />
                                            <span id="promo-error-text4" class="promo-error-txt4">Wrong code</span>
                                        </div>
                                        <button class="ui-btn-secondary btn-apply" >
                                            Apply
                                        </button>
                                        <div class="promo-code-img">
                                            <img id="loading4" src="images/icons/loading.gif" class="" />
                                            <img id="wrong4" src="images/simPurchase/wrong.jpg" style="margin-top: 4px; margin-left: 2px;" class="" />
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
                            <a href="products_cc_details_desktop.php" class="ui-btn-primary btn-continue" style="text-decoration: none;">Continue</a>
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
<script type="text/javascript">
   (function() {
       var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
       mf.src = "//cdn.mouseflow.com/projects/10238f32-7260-42b4-b8b5-eaff19eae982.js";
       document.getElementsByTagName("head")[0].appendChild(mf);
   })();
</script>

</body>
</html>