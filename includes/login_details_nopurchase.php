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

<div id="login_details">
<form action="" method="get">
    <div class="username_field"><input type="email" name="email" value="" class="login_input" placeholder="email" /></div>
    <div class="password_field"><input type="password" name="password" value="" class="login_input" placeholder="password" /></div>
   	<div class="remember_me_checkbox"><input type="checkbox" name="remember_me" value="true">Remember Me</div>
    <input type="button" name="submit" value="LOG IN" id="submit" class="wide_button white"  onClick="location.href='mylebara.php'" />
</form>

</div>

<div class="register_module">
	<h2>New to Lebara?</h2>
    <div class="wide_button darkblue"><a href="registration_1_nopurchase.php"><span>SIGN UP</span></a></div>
</div>