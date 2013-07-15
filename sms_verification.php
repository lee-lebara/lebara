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
            
            


                        
             <div class="signin_details">
             			<h1 class="desktop_element signin_header">Please enter the SMS Verification code Number:</h1>
                    	<div class="mobilenumber_signin2">
                    		<div class="signin_content2">
                    			<div class="signin_input_field2"><input type="text" name="sms_code" id="sms_code" value="" placeholder="SMS Verification Number" style="margin-bottom: 0px;" ></div>
                                <div class="signin_input_field2"><input type="text" name="sms_code_verify" id="sms_code_verify" value="" placeholder="SMS Verification Number" style="margin-top: 0px;" ></div>
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
