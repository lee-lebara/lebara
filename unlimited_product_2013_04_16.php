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

<?php include($DOCUMENT_ROOT . "./includes/psp_header.php"); ?>

<script>

    function loadPopup(){  
        //loads popup only if it is disabled  
        if($("#customer_bgPopup").data("state")==0){  
            $("#customer_bgPopup").css({  
                "opacity": "0.7"  
            });  
            $("#customer_bgPopup").fadeIn("medium");  
            $("#customer_popup").fadeIn("medium");  
            $("#customer_bgPopup").data("state",1);
			document.getElementById('toggleText').style.display = 'none';
			document.getElementById('toggleText2').style.display = 'block';
        }  
    }  
      
    function disablePopup(){  
        if ($("#customer_bgPopup").data("state")==1){  
            $("#customer_bgPopup").fadeOut("medium");  
            $("#customer_popup").fadeOut("medium");  
            $("#customer_bgPopup").data("state",0);  
        }  
    }  
      
    function centerPopup(){  
        var winw = $(window).width();  
        var winh = $(window).height();  
        var popw = $('#Popup').width();  
        var poph = $('#Popup').height();  
        $("#customer_popup").css({  
            "position" : "fixed"
        });  
        //IE6  
        $("#customer_bgPopup").css({  
            "height": winh    
        });  
    }

    $(document).ready(function() {  
       $("#customer_bgPopup").data("state",0);  
       $("#customer_popup_trigger").click(function(){  
            centerPopup();  
            loadPopup();     
       });  
       $("#customer_popupClose").click(function(){  
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
  $(".signin_reveal_button").click(function(){
    $("#toggleText").slideToggle("200");
	$("#toggleText2").slideToggle("200");
  });
});
</script>

<?php include($DOCUMENT_ROOT . "./includes/nav.php"); ?>



    <div class="fake_page_content">
            <a id="customer_popup_trigger"><img src="images/simPurchase/unlimited_fake_productpage.jpg" alt="Buy Now" /></a>
            </div>    
                <div id="customer_popup">
                	<a id="customer_popupClose">x</a> 
					<h1 class="blue">Do you already have a Lebara SIM?</h1>
    				<div class="selection_box">
                    	<div id="toggleText2">
        				<div class="existing_customer">
                			<div class="customer_type_button"><a class="signin_reveal_button blue">Yes</a></div>
            			</div>
            			<div class="new_customer">
                			<div class="customer_type_button"><a href="new_customer_unlimited.php" class="rubine">No - I Need One</a></div>
            			</div>
                        </div>
                    <div class="signin_details" id="toggleText" style="display: none">
    				<div class="email_signin">
                    	<div class="signin_content">
        					<p>Registered customers please enter your email and password:</p>
        					<div class="signin_input_field"><input type="text" name="email" id="email" value="" placeholder="Email Address" /></div>
                    		<div class="signin_input_field"><input type="password" name="password" id="password" value="" placeholder="Password" /></div>
                    	</div>
                    <a class="signin_button rubine" a href="payment_details_cc_loggedin.php" >Sign In</a>
                    </div>
                    <div class="mobilenumber_signin">
                    	<div class="signin_content">
                    		<p>OR enter your Lebara Mobile Number:</p>
                    		<div class="signin_input_field"><input type="mobile_number" name="mobile_number" id="mobile_number" value="" placeholder="Lebara Mobile Number" /></div>
                        </div>
                    <a class="signin_button orange" a href="registration_2_purchase.php" >Sign In</a>
                    </div>
                    
                    <p class="sign_up_link">New to Lebara? <a href="#">Sign Up Here</a></p>
                    <p><a class="signin_reveal_button">Cancel</a></p>
   				</div>
                
        	</div>
		</div>            
    <div id="customer_bgPopup"></div>  
                




<script type="text/javascript">
   (function() {
       var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
       mf.src = "//cdn.mouseflow.com/projects/10238f32-7260-42b4-b8b5-eaff19eae982.js";
       document.getElementsByTagName("head")[0].appendChild(mf);
   })();
</script>

</body>
</html>
