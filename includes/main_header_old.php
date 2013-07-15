
<div id="main_header_content">
<div id="logo"><a href="index.php"><img src="./images/logo_mobile.gif" alt="Lebara Mobile" class="mobile_element" /><img src="./images/logo.png" alt="Lebara Mobile" class="desktop_element" /></a></div>
<a class="toggleMenu" href="#"><span>menu</span></a>

<div id="main_phone_number">0870 075 5588 <span>or</span> 5588 <span class="phone_copy">from Lebara Mobile <a href="#">(charges apply).</a></span></div>

<div id="my_lebara_content">
<span>MyLebara</span>
<div class="my_lebara_login"><a class="registered_popup_trigger_homepage">Log In</a><a class="new_customer_popup_trigger_homepage">Sign Up</a></div>
</div>

</div>

<script>

    function loadPopup_ml(){  
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
      
    function disablePopup_ml(){  
        if ($("#customer_bgPopup").data("state")==1){  
            $("#customer_bgPopup").fadeOut("medium");  
            $("#customer_popup").fadeOut("medium");  
            $("#customer_bgPopup").data("state",0);  
        }  
    }  
      
    function centerPopup_ml(){  
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
       $(".registered_popup_trigger_homepage").click(function(){  
            centerPopup_ml();  
            loadPopup_ml();     
       });  
       $(".customer_popupClose").click(function(){  
            disablePopup_ml();
       });  
       $(document).keypress(function(e){  
            if(e.keyCode==27) {  
                disablePopup_ml();   
            }  
        });  
    });  
      
    //Recenter the popup on resize
    $(window).resize(function() {  
    centerPopup_ml();  
    });
</script>

<script>

    function loadPopup_ml2(){  
        //loads popup only if it is disabled  
        if($("#customer_bgPopup2").data("state")==0){  
            $("#customer_bgPopup2").css({  
                "opacity": "0.7"  
            });  
            $("#customer_bgPopup2").fadeIn("medium");  
            $("#customer_popup2").fadeIn("medium");  
            $("#customer_bgPopup2").data("state",1);
			document.getElementById('toggleText3').style.display = 'block';
			document.getElementById('toggleText4').style.display = 'none';
        }  
    }  
      
    function disablePopup_ml2(){  
        if ($("#customer_bgPopup2").data("state")==1){  
            $("#customer_bgPopup2").fadeOut("medium");  
            $("#customer_popup2").fadeOut("medium");  
            $("#customer_bgPopup2").data("state",0);  
        }  
    }  
      
    function centerPopup_ml2(){  
        var winw = $(window).width();  
        var winh = $(window).height();  
        var popw = $('#Popup2').width();  
        var poph = $('#Popup2').height();  
        $("#customer_popup2").css({  
            "position" : "fixed"
        });  
        //IE6  
        $("#customer_bgPopup2").css({  
            "height": winh    
        });  
    }

    $(document).ready(function() {  
       $("#customer_bgPopup2").data("state",0);  
       $(".new_customer_popup_trigger_homepage").click(function(){  
            centerPopup_ml2();  
            loadPopup_ml2();     
       });  
       $(".customer_popupClose2").click(function(){  
            disablePopup_ml2();
       });  
       $(document).keypress(function(e){  
            if(e.keyCode==27) {  
                disablePopup_ml2();   
            }  
        });  
    });  
      
    //Recenter the popup on resize
    $(window).resize(function() {  
    centerPopup_ml2();  
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
    $("#toggleTexta").slideToggle("200");
	$("#toggleTextb").slideToggle("200");
  });
});
</script>

<script> 
$(document).ready(function(){
  $(".signin_reveal_button2").click(function(){
    $("#toggleTextc").slideToggle("200");
	$("#toggleTextd").slideToggle("200");
  });
});
</script>


<div id="customer_popup">
                	
					
    				<div class="selection_box">
                    <div class="signin_details">
                    <h4 class="blue">Please enter your details to continue:<a class="customer_popupClose">x</a></h4>
    				<div class="email_signin_simple">
                    	<div class="signin_content_simple">
        					<p>Registered customers please enter your email and password:</p>
        					<div class="signin_input_field_simple"><input type="text" name="email" id="email" value="" placeholder="Email Address" /></div>
                    		<div class="signin_input_field_simple"><input type="password" name="password" id="password" value="" placeholder="Password" /></div>
                    	</div>
                    <a class="signin_button rubine" a href="view_balance.php" >Sign In</a>
                    </div>
                    <p class="sign_up_link">New to Lebara? <a href="registration_1_nopurchase.php">Sign Up Here</a></p>
   				</div>
                
        	</div>
		</div>
<div id="customer_bgPopup"></div>

<div id="customer_popup2">
                	
					
    				<div class="selection_box">
                    	<div id="toggleTextc">
                        <h1 class="blue">Do you already have a Lebara SIM? <a class="customer_popupClose2">x</a> </h1>
        				<div class="existing_customer">
                			<div class="customer_type_button"><a class="signin_reveal_button2 blue">Yes</a></div>
            			</div>
            			<div class="new_customer">
                			<div class="customer_type_button"><a href="free_sim.php" class="rubine">No - I Need One</a></div>
            			</div>
                        </div>
                    <div class="signin_details" id="toggleTextd" style="display: none;">
    				<div class="email_signin">
                    	<div class="signin_content">
        					<p>Registered customers please enter your email and password:</p>
        					<div class="signin_input_field"><input type="text" name="email" id="email" value="" placeholder="Email Address" /></div>
                    		<div class="signin_input_field"><input type="password" name="password" id="password" value="" placeholder="Password" /></div>
                    	</div>
                    <a class="signin_button rubine" a href="view_balance.php" >Sign In</a>
                    </div>
                    <div class="mobilenumber_signin">
                    	<div class="signin_content">
                    		<p>OR enter your Lebara Mobile Number:</p>
                    		<div class="signin_input_field"><input type="mobile_number" name="mobile_number" id="mobile_number" value="" placeholder="Lebara Mobile Number" /></div>
                        </div>
                    <a class="signin_button orange" a href="view_balance.php" >Sign In</a>
                    </div>
                    
                    <p class="sign_up_link">New to Lebara? <a href="registration_1_nopurchase.php">Sign Up Here</a></p>
                    <p><a class="signin_reveal_button2">Cancel</a></p>
   				</div>
                
        	</div>
		</div>
<div id="customer_bgPopup2"></div>