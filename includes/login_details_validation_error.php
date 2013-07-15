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


<div class="mobile_element">

<div id="login_details">
<form action="" method="get">
    <div class="username_field">
        <input type="email" name="email" value="" class="login_input" placeholder="email" />
    </div>
    <div class="password_field">
        <input type="password" name="password" value="" class="login_input" placeholder="password" />
    </div>

   	<div class="remember_me_checkbox">
   	    <input type="checkbox" name="remember_me" value="true">Remember Me
   	</div>
    <input type="button" name="submit" value="LOG IN" id="submit" class="wide_button white"  onClick="location.href='mylebara.php'" />
</form>

</div>

<div class="register_module">
	<h2>New to Lebara?</h2>
    <div class="wide_button darkblue"><a href="registration_1_nopurchase.php"><span>SIGN UP</span></a></div>
</div>

</div>


<div class="desktop_page_container_invisible desktop_element">

<div class="selection_box">
<h1 class="desktop_element signin_header">Log in to MyLebara</h1>
    <div class="signin_details" id="toggleText11_prod">
		<div class="email_signin_simple">

                     <!--  Error message snippet -->
                        <div class="validate-message">
                            <h1>Your Email Address or Password is incorrect.</h1>
                        </div>

                    <div class="signin_content_simple">
        				<div class="signin_input_field2 validate-error"><input type="text" name="email" id="email" value="" placeholder="Email Address" /></div>
                    	<div class="signin_input_field2 validate-error"><input type="password" name="password" id="password" value="" placeholder="Password" style="margin-top: 0px;" /></div>
                    </div>
                    <div class="forgot_password"><a href="#">Forgot your password?</a></div>
                </div>
                <div class="clear"></div>
   			</div>

 		<div class="signin_buttons_container">
 			<div class="button_container_createaccount"><a class="createaccount_button blue" a href="registration_1_nopurchase.php" >Sign Up</a></div>
            <div class="button_container_right"><a class="signin_button blue" a href="mylebara.php" >Log In</a></div>
       </div>

    </div>


<div class="clear"></div>

</div>
