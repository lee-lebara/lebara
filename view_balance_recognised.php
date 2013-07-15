<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "View Balance";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>

<script> 
$(document).ready(function(){
  $("#dropdown_reveal_button").click(function(){
    $("#toggleText").slideToggle("100");
  });
  $("#dropdown_reveal_button2").click(function(){
    $("#toggleText2").slideToggle("100");
  });
  $("#dropdown_reveal_button3").click(function(){
    $("#toggleText3").slideToggle("100");
  });
  $("#dropdown_reveal_button4").click(function(){
    $("#toggleText4").slideToggle("100");
  });
  $("#dropdown_reveal_button5").click(function(){
    $("#toggleText5").slideToggle("100");
  });
});
</script>

<script>

$(document).ready(function(){
    initCheckBoxes();
});

var slideSpeed = 50;
var leftDist = 30.75;

function initCheckBoxes()
{
    $( ".cb-slider_small" ).attr('is_active', false);   //to track if the slider was dragged completely and released outside
    $( ".cb-slider_small" ).draggable({
         containment: "parent",
         stop: function(event, ui){
             //trigger a mouse up only if is_active is left at true
            if($(ui.helper).attr('is_active')) $(ui.helper).mouseup();
         }
    });

    $(".cb-slider_small").mousedown(function(){
        //set is active to true so that we can check on drag complete if its still true and take necessary action
        $(this).attr("is_active", true);
    });

    $(".cb-slider_small").mouseup(function(){

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

<script> 
$(document).ready(function(){
  $(".sub_buttons").click(function(){
    $("#payment_choice_reveal").slideToggle("200");
  });
});
</script>


<?php include($DOCUMENT_ROOT . "./includes/main_header_recognised.php"); ?>



<?php include($DOCUMENT_ROOT . "./includes/nav_recognised.php"); ?>

<div class="desktop_page_container">

<div id="customer_main_details">
	<div class="mobile_number">Mobile Number: <span>07563372163</span></div>
</div>

<div class="content_box">
	<h2>Your current balance:</h2>
	<div class="current_balance"><span>&pound;29.30</span> credit</div>
    <div class="current_balance"><span>&pound;2.50</span> bonus (expires in xx days)</div>
</div>
<div class="content_box">
	<h2>Other balances</h2>
    
    <a class="dropdown_box" id="dropdown_reveal_button"><span>Lebara to Lebara</span><div class="dropdown_reveal_arrow"><img src="images/dropdown_reveal_arrow.gif" /></div></a>
    <div class="dropdown_details" id="toggleText" style="display: none">
    	
    	<table cellpadding="0" cellspacing="0" width="100%">
        	<tr>
            	<td><span>Bundles</span></td><td><span>Remaining Credit</span></td><td><span>Expiry Date</span></td>
            </tr>
        	<tr>
            	<td>Unlimited voice</td><td>Unlimited mins</td><td>03 Mar</td>
            </tr>
        	<tr>
            	<td>Unlimited SMS</td><td>Unlimited texts</td><td>03 Mar</td>
            </tr>
        </table>
        
        <p>For more information, please go to our <a href="terms_and_conditions.php" target="_blank">terms and conditions</a></p>
        
    </div>
 
    <a class="dropdown_box" id="dropdown_reveal_button2"><span>Unlimited Pass</span><div class="dropdown_reveal_arrow"><img src="images/dropdown_reveal_arrow.gif" /></div></a>
    <div class="dropdown_details" id="toggleText2" style="display: none">
    	<table cellpadding="0" cellspacing="0" width="100%">
        	<tr>
            	<td><span>Bundles</span></td><td><span>Remaining Credit</span></td><td><span>Expiry Date</span></td>
            </tr>
        	<tr>
            	<td>Unlimited voice</td><td>Unlimited mins</td><td>03 Mar</td>
            </tr>
        	<tr>
            	<td>Unlimited SMS</td><td>Unlimited texts</td><td>03 Mar</td>
            </tr>
        </table>
        <p>For more information, please go to our <a href="terms_and_conditions.php" target="_blank">terms and conditions</a></p>
    </div>
    
    <a class="dropdown_box" id="dropdown_reveal_button3"><span>Bonus Credit</span><div class="dropdown_reveal_arrow"><img src="images/dropdown_reveal_arrow.gif" /></div></a>
    <div class="dropdown_details" id="toggleText3" style="display: none">
    	<table cellpadding="0" cellspacing="0" width="100%">
        	<tr>
            	<td><span>Bundles</span></td><td><span>Remaining Credit</span></td><td><span>Expiry Date</span></td>
            </tr>
        	<tr>
            	<td>Unlimited voice</td><td>Unlimited mins</td><td>03 Mar</td>
            </tr>
        	<tr>
            	<td>Unlimited SMS</td><td>Unlimited texts</td><td>03 Mar</td>
            </tr>
        </table>
       
        <p>For more information, please go to our <a href="terms_and_conditions.php" target="_blank">terms and conditions</a></p>
    </div>
    
    <a class="dropdown_box" id="dropdown_reveal_button4"><span>Top Up History</span><div class="dropdown_reveal_arrow"><img src="images/dropdown_reveal_arrow.gif" /></div></a>
    <div class="dropdown_details" id="toggleText4" style="display: none">
    	<table cellpadding="0" cellspacing="0" width="100%">
        	<tr>
            	<td><span>Type</span></td><td><span>Time/Date</span></td><td><span>Cost</span></td>
            </tr>
        	<tr>
            	<td>Card</td><td>11/03/13 @ 21:15</td><td>&pound;5</td>
            </tr>
        	<tr>
            	<td>Card</td><td>09/02/13 @ 18:07</td><td>&pound;10</td>
            </tr>
        	<tr>
            	<td>Voucher</td><td>07/02/13 @ 09:15</td><td>&pound;10</td>
            </tr>
        	<tr>
            	<td>Card</td><td>05/01/13 @ 21:15</td><td>&pound;5</td>
            </tr>
        	<tr>
            	<td>Voucher</td><td>02/01/13 @ 21:15</td><td>&pound;20</td>
            </tr>
        </table>
       	<p>This table shows your last five Top Ups</p>
    </div>
    
    <a class="dropdown_box" id="dropdown_reveal_button5"><span>Usage History</span><div class="dropdown_reveal_arrow"><img src="images/dropdown_reveal_arrow.gif" /></div></a>
    <div class="dropdown_details" id="toggleText5" style="display: none">
    	<table cellpadding="0" cellspacing="0" width="100%">
        	<tr>
            	<td><span>Type</span></td><td><span>Time/Date</span></td><td><span>Cost</span></td>
            </tr>
        	<tr>
            	<td>Call</td><td>11/03/13 @ 21:15</td><td>&pound;0.50</td>
            </tr>
        	<tr>
            	<td>Text</td><td>09/03/13 @ 18:07</td><td>&pound;0.05</td>
            </tr>
        	<tr>
            	<td>Call</td><td>07/03/13 @ 09:15</td><td>&pound;1.35</td>
            </tr>
        	<tr>
            	<td>Call</td><td>05/03/13 @ 21:15</td><td>&pound;0.40</td>
            </tr>
        	<tr>
            	<td>Data</td><td>05/03/13 @ 21:15</td><td>&pound;1.05</td>
            </tr>
        </table>
       	<p>This table shows your last five interactions</p>
    </div>


<div class="auto_topup_option">
        	<h4>Auto Top Up:</h4>
        	<div class="cb-bg_small">
    			<div class="cb-slider_small" cb-status="0"></div>
			</div>
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
</div>




<div class="content_box_invisible">

	<div class="wide_button rubine"><a class="sub_buttons"><span>TOP UP</span></a></div>
		<div id="payment_choice_reveal" style="display: none;">
    	<div class="narrow_button rubine"><a href="products_cc_recognised.php"><span>BUY NOW</span></a></div>
    	<div class="narrow_button orange last"><a href="products_v_recognised.php"><span>USE VOUCHER</span></a></div>
    </div>
    <a class="non_button_link" href="index_recognised.php">home</a>
	<a class="non_button_link_2" href="contact_us_recognised.php">contact customer services</a>
	<div class="clear"></div>
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
