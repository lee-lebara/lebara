<!DOCTYPE HTML>
<html>

<?php $pageTitle = "Payment Details";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>


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

<script> 
$(document).ready(function(){
  $("#auto_address_button2").click(function(){
    $("#toggleText3").slideToggle("100");
  });
  $("#manual_address_button2").click(function(){
    $("#toggleText4").slideToggle("100");
  });
});
</script>

<script>
	$(document).ready(function(){
    $('a#auto_address_button2').click(function(){
        $(this).toggleClass("selected");
    });
});
	$(document).ready(function(){
    $('a#manual_address_button2').click(function(){
        $(this).toggleClass("selected");
    });
});
</script>


<script>
	$(document).ready(function(){
    $('a.auto_address_button2').click(function(){
        $("#toggleText3").slideToggle("100");
    });
});
</script>


<script>
function populateForm(){
  document.getElementById("address_1").value = "1 White City Road";
  document.getElementById("postcode").value = "W12 7EG";
 return true; //if you want to proceed with the submission or whatever your button does, otherwise return false
}
</script>

<script>
function populateForm(){
  document.getElementById("address_1_2").value = "1 White City Road";
  document.getElementById("postcode_2").value = "W12 7EG";
 return true; //if you want to proceed with the submission or whatever your button does, otherwise return false
}
</script>

<script>
function buyWithCredit(){
     window.location="free_sim_credit_or_not.php";
}
</script>


<div class="desktop_page_container mobile_element">


<div class="content_box_invisible">
	<h3>Get your FREE SIM</h3>
</div>




<div class="content_box">
	<h2>Complete all details below</h2>
    
    <div class="narrow_details_field"><span style="width:190px;">*Number of FREE SIMS:</span>
    <div class="sim_number_select">
    <label><input type="radio" name="sim_number" value="variant-2" checked="checked" /> One</label>
    <label><input type="radio" name="sim_number" value="variant-1" /> Two</label>
    <label><input type="radio" name="sim_number" value="variant-3" /> Three</label>
    </div>
    </div>
    
    
    <div class="narrow_details_field"><span style="width:190px;">What kind of SIM do you need for your phone?:</span></div>
    <div class="sim_type_option_box">
    <div class="variant-1"><div class="sim_choice_type"><input type="radio" name="sim1_type" value="regular"> Ordinary SIM / MicroSim (most phones)<input type="radio" name="sim1_type" value="nano" style="margin-left: 20px;"> Nano (iPhone 5, iPad Mini)</div></div>
    <div class="variant-2" style="margin-bottom: 20px;">
    <div class="sim_choice_type">SIM 1: <input type="radio" name="sim1_type" value="regular"> Ordinary SIM / MicroSim (most phones)&nbsp;&nbsp;&nbsp;<input type="radio" name="sim1_type" value="nano" style="margin-left: 20px;"> Nano (iPhone 5, iPad Mini)</div>
    <div class="sim_choice_type">SIM 2: <input type="radio" name="sim2_type" value="regular"> Ordinary SIM / MicroSim (most phones)&nbsp;&nbsp;&nbsp;<input type="radio" name="sim2_type" value="nano" style="margin-left: 20px;"> Nano (iPhone 5, iPad Mini)</div>

    </div>
    </div>
    <div class="narrow_details_field"><span>*Title:</span>
    <div class="title_dropdown">
    	<select>
  			<option value="1">Mr</option>
  			<option value="2">Mrs</option>
		</select>
    </div>
    </div>
    <div class="narrow_details_field"><span>*First Name</span><div class="narrow_input_field"><input type="text" name="first_name" value="" /></div></div>
    <div class="narrow_details_field"><span>*Last Name</span><div class="narrow_input_field"><input type="text" name="last_name" value="" /></div></div>
    <div class="narrow_details_field"><span>*Email</span><div class="narrow_input_field"><input type="text" name="email" value="" /></div></div>
	<div class="narrow_details_field"><span>*First line of address</span><div class="narrow_input_field"><input type="text" name="address_1" id="address_1" value="" placeholder="e.g. 28" /></div></div>
    <div class="narrow_details_field"><span>*Postcode</span><div class="narrow_input_field"><input type="text" name="postcode" id="postcode" value="" placeholder="eg AL9 6BL" /></div></div>
    <div class="lookup_button blue"><a id="auto_address_button" ><span>FIND ADDRESS</span></a></div>
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
        <div class="clear"></div>
    </div>
	
    <p>Pressing the submit button means you accept our <a href="terms_and_conditions.php" target="_blank">terms and conditions.</a></p>
</div>

<div class="content_box_invisible">
	<div class="wide_button blue"><a href="free_sim_credit_or_not.php"><span>CONTINUE</span></a></div>
    <a class="non_button_link" href="index_loggedin.php">home</a>
	<a class="non_button_link_2" href="contact_us_loggedin.php">contact customer services</a>
    <div class="clear"></div>
</div>

</div>

<!-- Desktop Content to Follow -->

<h1 class="desktop_element product_header">Get your <span>FREE SIM</span></h1>

<div class="desktop_page_container_bottomless desktop_element">

<div class="purchase_nav_container">
	<ol class="purchase_nav_ml_threestep">
		<li class="purchase_step_1 active_step">1. Your Details</li>
        <li class="purchase_step_2">2. Options</li>
        <li class="purchase_step_3">3. Payment Details</li>
        <li class="purchase_step_4">4. Confirmation Page</li>
    </ol>
</div>

</div>

<div class="purchase_page_container desktop_element">

<div class="payment_container">


	<h2>To get Unlimited calls and texts, and 1GB Mobile Internet, simply order your Free SIM below:</h2>
    	<div class="free_sim_promo_box">
 			<h2>Why Lebara Mobile?</h2>
			<p>Low cost, high quality UK and international calls from</p>
            <div class="one_pence"><span>1p</span>&nbsp;&nbsp;a minute</div>
		</div> 
    <div class="narrow_details_field"><span style="width:190px;">*How many Free SIMS?:</span>
    <div class="sim_number_select">
    <label><input type="radio" name="sim_number" value="variant-2" checked="checked" /> One</label>
    <label><input type="radio" name="sim_number" value="variant-1" /> Two</label>
    
    </div>
    </div>
    
    
    <div class="narrow_details_field"><span style="width:190px;">What kind of SIM do you need for your phone?:</span></div>
    <div style="margin: 80px 0px 0px 0px;"><a href="#" class="tooltip"> <img src="./images/tooltip_button.gif" alt="SIM Type"/> <span> <img class="callout" src="./images/callout.gif" alt="SIM Type" /><strong>SIM TYPE:</strong><br><img src="./images/micro_nano.jpg" style="float:right;" alt="SIM Type" /> A normal/standard SIM is most commonly used in phones.<br><br>A'Micro' SIM is smaller, first used in the iPhone 4.<br><br>A 'Nano' SIM will fit iPhone 5 and iPad Mini.<br><br>If you're not sure which to use, check your user manual or ask your phone dealer.</span> </a></div>
    <div class="clear"></div>
    <div class="sim_type_option_box">
    <div class="variant-1"><div class="sim_choice_type">First SIM: <input type="radio" name="sim1_type" value="regular"> Regular <input type="radio" name="sim1_type" value="micro" style="margin-left: 20px;"> Micro <input type="radio" name="sim1_type" value="nano" style="margin-left: 20px;"> Nano</div></div>
    <div class="variant-2" style="margin-bottom: 20px;">
    <div class="sim_choice_type">First SIM: <input type="radio" name="sim1_type" value="regular"> Regular <input type="radio" name="sim1_type" value="micro" style="margin-left: 20px;"> Micro <input type="radio" name="sim1_type" value="nano" style="margin-left: 20px;"> Nano</div>
    <div class="sim_choice_type">Second SIM: <input type="radio" name="sim2_type" value="regular"> Regular <input type="radio" name="sim2_type" value="micro" style="margin-left: 20px;"> Micro <input type="radio" name="sim2_type" value="nano" style="margin-left: 20px;"> Nano</div>
	</div>
    
    </div>
    
    <div class="clear"></div>
    <div class="narrow_details_field"><span>*Title:</span>
    <div class="title_dropdown">
    	<select>
  			<option value="1">Mr</option>
  			<option value="2">Mrs</option>
		</select>
    </div>
    </div>
    <div class="narrow_details_field"><span>*First Name</span><div class="narrow_input_field"><input type="text" name="first_name" value="John" /></div></div>
    <div class="narrow_details_field"><span>*Last Name</span><div class="narrow_input_field"><input type="text" name="last_name" value="Smith" /></div></div>
    <div class="narrow_details_field"><span>*Email</span><div class="narrow_input_field"><input type="text" name="email" value="johnsmith@gmail.com" /></div></div>
	<div class="narrow_details_field"><span>*First line of address</span><div class="narrow_input_field"><input type="text" name="address_1" id="address_1_2" value="1 White City Road, London" /></div></div>
    <div class="narrow_details_field"><span>*Postcode</span><div class="narrow_input_field"><input type="text" name="postcode" id="postcode_2" value="W12 7EG" /></div></div>
    <div class="lookup_button blue"><a id="auto_address_button2" ><span>FIND ADDRESS</span></a></div>
    <div class="address_picker" id="toggleText3" style="display: none">
    	<ul>
        	<li><a onClick="return populateForm();" class="auto_address_button2">1 White City Road, LONDON, W12 7EG</a></li>
            <li><a onClick="return populateForm();" class="auto_address_button2">2 White City Road, LONDON, W12 7EG</a></li>
            <li><a onClick="return populateForm();" class="auto_address_button2">3 White City Road, LONDON, W12 7EG</a></li>
            <li><a onClick="return populateForm();" class="auto_address_button2">4 White City Road, LONDON, W12 7EG</a></li>
            <li><a onClick="return populateForm();" class="auto_address_button2">5 White City Road, LONDON, W12 7EG</a></li>
            <li><a onClick="return populateForm();" class="auto_address_button2">6 White City Road, LONDON, W12 7EG</a></li>
            <li><a onClick="return populateForm();" class="auto_address_button2">7 White City Road, LONDON, W12 7EG</a></li>
            <li><a onClick="return populateForm();" class="auto_address_button2">8 White City Road, LONDON, W12 7EG</a></li>
        </ul>
    </div>
    <div class="clear"></div>
    <a class="manual_address_entry" id="manual_address_button2"><span>Enter address manually</span></a>
    <div class="clear"></div>
    <div class="manual_fields" id="toggleText4" style="display: none;">
    	<div class="narrow_details_field"><span>*Street</span><div class="narrow_input_field"><input type="text" name="street" value="" /></div></div>
    	<div class="narrow_details_field"><span>*Town/City</span><div class="narrow_input_field"><input type="text" name="town_city" value="" /></div></div>
        <div class="clear"></div>
    </div>
	<p class="psp_para">*Mandatory fields</p>
    <p class="psp_para">Pressing the continue button means you accept our <a href="terms_and_conditions.php" target="_blank">terms and conditions.</a></p>
    <div class="clear"></div>
</div>




<div class="clear"></div>

<div class="payment_container_bottom"></div><a id="customer_popup_trigger_prod" class="purchase_options_container_continue" href="free_sim_add_extras_loggedin.php">CONTINUE</a>
</div>

<div class="clear"></div>
        
        
<script>
$("input[name$='sim_number']").click(function() {
    var value = $(this).val();
    if (value == 'variant-2') {
        $(".variant-1").show();
        $(".variant-2").hide();
    }
    else if (value == 'variant-1') {
        $(".variant-2").show();
        $(".variant-1").hide();
    }
});
$(".variant-1").show();
$(".variant-2").hide();
</script>

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
