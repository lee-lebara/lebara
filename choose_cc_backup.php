<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "Payment Confirmation";
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
$(document).ready(function(){
  $("#auto_address_button").click(function(){
    $("#toggleText").slideToggle("100");
  });
  $("#manual_address_button").click(function(){
    $("#toggleText2").slideToggle("100");
  });
});
</script>

<script>
	$(document).ready(function(){
    $('a#auto_address_button').click(function(){
        $(this).toggleClass("selected");
    });
});
	$(document).ready(function(){
    $('a#manual_address_button').click(function(){
        $(this).toggleClass("selected");
    });
});
</script>

<?php include($DOCUMENT_ROOT . "./includes/main_header.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav.php"); ?>

<div id="customer_main_details">
	<div class="mobile_number">Mobile Number: <span>07563372163</span></div>
</div>


<div class="content_box">
	<h3>Choose a card</h3>
    <p>Please choose one of your stored cards from your list, or add a new card below:</p>
    <ul>
    	<li><a href="payment_details_cc_loggedin.php">My Barclaycard</a> <a href="#"><span>(Delete this card)</span></a></li>
        <li><a href="payment_details_cc_loggedin.php">My Nationwide Credit Card</a> <a href="#"><span>(Delete this card)</span></a></li>
    </ul>
</div>

<div class="content_box">
	<h2>New Card Details</h2>
    <form action="" class="select_payment_gateway">
        <div class="credit_cards"><img src="./images/credit_cards.jpg" alt="Credit Card payment" /></div>
    </form>
    
    <div class="narrow_details_field"><span>*Choose a name for this card (e.g. "My card")</span><div class="narrow_input_field"><input type="text" name="card_name" value="" /></div></div>
    <div class="narrow_details_field"><span>*Name on Card</span><div class="narrow_input_field"><input type="text" name="card_name" value="" /></div></div>
    <div class="narrow_details_field"><span>*Card Number</span><div class="narrow_input_field"><input type="tel" name="card_number" value="" /></div></div>
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
				</div>   
				<div id="bgPopup"></div>  
         </div>
    </div>
    <div class="horizontal_divider"></div>
    <div class="narrow_details_field"><span>*House Number</span><div class="narrow_input_field"><input type="number" name="house_number" value="" /></div></div>
    <div class="narrow_details_field"><span>*Postcode</span><div class="narrow_input_field"><input type="text" name="postcode" value="" /></div></div>
    <div class="lookup_button blue"><a id="auto_address_button" ><span>LOOK UP</span></a></div>
    <div class="address_picker" id="toggleText" style="display: none">
    	<ul>
        	<li><a href="#">1 White City Road, LONDON, W12 7EG</a></li>
            <li><a href="#">2 White City Road, LONDON, W12 7EG</a></li>
            <li><a href="#">3 White City Road, LONDON, W12 7EG</a></li>
            <li><a href="#">4 White City Road, LONDON, W12 7EG</a></li>
            <li><a href="#">5 White City Road, LONDON, W12 7EG</a></li>
            <li><a href="#">6 White City Road, LONDON, W12 7EG</a></li>
            <li><a href="#">7 White City Road, LONDON, W12 7EG</a></li>
            <li><a href="#">8 White City Road, LONDON, W12 7EG</a></li>
        </ul>
    </div>
    <div class="clear"></div>
    <a class="manual_address_entry" id="manual_address_button"><span>Enter address manually</span></a>
    <div class="manual_fields" id="toggleText2" style="display: none;">
    	<div class="narrow_details_field"><span>*Street</span><div class="narrow_input_field"><input type="text" name="street" value="" /></div></div>
    	<div class="narrow_details_field"><span>*Town/City</span><div class="narrow_input_field"><input type="text" name="town_city" value="" /></div></div>
    </div>
</div>


<div class="content_box_invisible">
	<div class="wide_button blue"><a href="add_card_confirmation.php"><span>ADD CARD</span></a></div>
	<a class="non_button_link" href="index_loggedin.php">home</a>
	<a class="non_button_link_2" href="contact_us_loggedin.php">contact customer services</a>
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
