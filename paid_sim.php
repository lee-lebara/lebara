<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "Get your Pay-As-You-Go SIM";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav.php"); ?>

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
function populateForm(){
  document.getElementById("address_1").value = "1 White City Road";
  document.getElementById("postcode").value = "W12 7EG";
 return true; //if you want to proceed with the submission or whatever your button does, otherwise return false
}
</script>

<div class="desktop_page_container">

<div class="content_box">
    <!--<div class="narrow_details_field"><span>*Call Credit Required:</span>
    <div class="sim_number_dropdown">
    	<select>
  			<option value="5">&pound;5</option>
  			<option value="10">&pound;10</option>
  			<option value="20">&pound;20</option>
  			<option value="30">&pound;30</option>
		</select>
    </div>
    </div>-->
    <h3>FREE SIM <span>with</span> &pound;20<span> credit.</span></h3>
	<h2>Complete all details below</h2>
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
    <div class="narrow_details_field"><span>*Choose Password</span><div class="narrow_input_field"><input type="password" name="password" value="" /></div></div>
    <div class="narrow_details_field"><span>*Repeat Password</span><div class="narrow_input_field"><input type="password" name="password_repeat" value="" /></div></div>
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

    <p>Pressing the submit button means you accept our <a href="terms_and_conditions.php" target="_blank">terms and conditions.</a></p>
    <div class="clear"></div>
</div>


<div class="content_box_invisible">
	<div class="wide_button blue"><a href="payment_details_cc_paidsim.php"><span>CONTINUE</span></a></div>
    <a class="non_button_link" href="index.php">home</a>
	<a class="non_button_link_2" href="contact_us.php">contact customer services</a>
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
