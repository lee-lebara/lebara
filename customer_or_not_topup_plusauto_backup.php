<!DOCTYPE HTML>
<html>

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


<div class="content_box_invisible mobile_element">
	<h3>Do you already have a Lebara SIM?</h3>
</div>

<div class="content_box_invisible mobile_element">    
    <div class="wide_button blue"><a href="login_purchase.php"><span>YES</span></a></div>
    <div class="wide_button blue"><a href="paid_sim.php"><span>NO, I NEED ONE</span></a></div>

	<a class="non_button_link" href="index.php">home</a>
	<a class="non_button_link_2" href="contact_us.php">contact customer services</a>
</div>



<div class="desktop_page_container_invisible desktop_element">

<div class="selection_box">
            
            
            <div class="signin_details" id="toggleText11_prod">
<h1 class="desktop_element signin_header">Do you already have a Lebara SIM?</h1>
        					<div class="signin_box_left">
                				<div class="customer_type_button"><a class="signin_reveal_button_prod blue">Yes - I Have One</a></div>
            				</div>
            				<div class="signin_box_right">
                				<div class="customer_type_button"><a href="new_customer_unlimited.php" class="blue">No - I Need One</a></div>
            				</div>
                
                
   			</div>
            

            <div id="toggleText22_prod" class="signin_details" style="display:none;">
            <h1 class="desktop_element signin_header">Login details:</h1>
            <div class="signin_box_left">
            <h4>I already have an account</h4>
    			<div class="email_signin_simple">
                    <div class="signin_content_simple">
        				<div class="signin_input_field_simple"><input type="text" name="email" id="email" value="" placeholder="Email Address" /></div>
                    	<div class="signin_input_field_simple"><input type="password" name="password" id="password" value="" placeholder="Password" /></div>
                    </div>
                    <div class="forgot_password"><a href="#">Forgot your password?</a></div>
                </div>
                <div class="clear"></div>
            </div>
            
                
            
            <div class="signin_box_right">
            <h4>Guest Checkout</h4>
                <p style="color: #717171; margin-top: 20px;">Proceed to checkout and at the end you will have the chance to create a Lebara account</p>
                
            </div>
            <div class="signin_buttons_container">
            <div class="button_container_left"><p><a class="signin_reveal_button_prod" style="float: left; margin-left: 15px; margin-top: 40px; width: 30%;">Cancel</a></p><a class="signin_button blue" a href="payment_details_cc_loggedin.php" >Sign In</a></div>
            <div class="button_container_right"><a class="signin_button signin_reveal_button_prod2 blue" >Continue as Guest</a></div>
            </div>            
             
             
             </div>
                        
             <div class="signin_details" id="toggleText33_prod" style="display: none;">
             			<h1 class="desktop_element signin_header">Please enter you Lebara Mobile Number:</h1>
                    	<div class="mobilenumber_signin2">
                    		<div class="signin_content2">
                    			<div class="signin_input_field2"><input type="mobile_number" name="mobile_number" id="mobile_number" value="" placeholder="Lebara Mobile Number" /></div>
                        	</div>
                    		<a class="signin_button blue" a href="products_cc_customer_details_autotopup.php" >Continue</a>
                    	</div>
                    	<p><a class="signin_reveal_button_prod2" style="float: left; margin-left: 15px;">Cancel</a></p>
   			
            
            </div>


            
        </div>
    
    
<div class="clear"></div>

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
