<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "Register with Lebara";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav.php"); ?>

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

<!--  ERROR POP UP "email already registered" -->
<!--
<div id="overlay_ml" class="error_popup" style="position: absolute; display: block;">
	<p id="mf73">The email address is already registered.<br />Please <a href="#">log in</a>.</p>     
	<a class="overlayClose_ml">Close</a>
</div>
-->
<!--  ERROR POP UP "purchase already made -->
<!--
<div id="overlay_ml" class="error_popup" style="position: absolute; display: block;">
	<p id="mf73">You have already purchased this product.<br />Please make another selection or go to <a href="#">MyLebara</a> to review past purchases.</p>     
	<a class="overlayClose_ml">Close</a>
</div>
-->



<div class="content_box_invisible mobile_element">
	<h3>Do you already have a Lebara SIM?</h3>
</div>

<div class="content_box_invisible mobile_element">    
    <div class="wide_button blue"><a href="login_purchase.php"><span>YES</span></a></div>
    <div class="wide_button blue"><a href="paid_sim.php"><span>NO, I NEED ONE</span></a></div>

	<a class="non_button_link" href="index.php">home</a>
	<a class="non_button_link_2" href="contact_us.php">contact customer services</a>
</div>

<!-- Desktop Elements to Follow -->


<div class="desktop_page_container_invisible desktop_element">

<div class="selection_box">
            
            

            <div id="toggleText22_prod" class="signin_details">
            <h1 class="desktop_element signin_header">Sign up to MyLebara.</h1>
            <div class="signin_box_left">
            <h4>Enter your Lebara number:</h4>
            
    			<div class="email_signin_simple">
                    <div class="signin_content_simple">
        				<div class="signin_input_field_simple"><input type="tel" name="mobile_number" id="mobile_number" value="" placeholder="Lebara Mobile Number" /></div>
                    	<div class="signin_input_field_simple">
                    	<!-- ERROR -->
                    	<!--
                          <div class="input-error-message">The number is incorrect</div>
                        -->
                    	  <input type="tel" name="mobile_number" id="mobile_number_verify" value="" placeholder="Verify Lebara Mobile Number" />
                    	</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            
                
            
            <div class="signin_box_right">
            <h4>Don't have a Lebara SIM yet?</h4>
                <p style="color: #717171; margin-top: 20px;">Get your FREE SIM and start enjoying cheaper international phone calls now.</p>
                
            </div>
            <div class="signin_buttons_container">
            <div class="button_container_left"><a class="signin_button blue" href="sign_up.php" >Sign Up</a></div>
            <div class="button_container_right"><a class="signin_button blue" href="free_sim.php" >Get your FREE SIM</a></div>
            </div>            
             
             
             </div>
                        
             <div class="signin_details" id="toggleText33_prod" style="display: none;">
             			<h1 class="desktop_element signin_header">Please enter your Lebara Mobile Number:</h1>
                    	<div class="mobilenumber_signin2">
                    		<div class="signin_content2">
                    			<div class="signin_input_field2"><input type="tel" name="mobile_number" id="mobile_number" value="" placeholder="Lebara Mobile Number" style="margin-bottom: 0px;" ></div>
                                <div class="signin_input_field2"><input type="tel" name="mobile_number" id="mobile_number_verify" value="" placeholder="Verify Lebara Mobile Number" style="margin-top: 0px;" ></div>
                        	</div>
                            <div class="clear"></div>
                    		<a class="signin_button blue" href="products_cc_customer_details.php">Continue</a>
                    	<p><a class="signin_reveal_button_prod2 cancel_button blue">Cancel</a></p>
                  </div>

            </div>


            
        </div>
    
    
<div class="clear"></div>

</div>
<div class="alternate_2sim_journey_link"><a href="whichnumber_loggedin_firsttime.php">Alternate journey for customers with more than one SIM</a></div>

<div class="clear"></div>

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
