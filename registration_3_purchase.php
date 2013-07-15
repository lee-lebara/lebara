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

<div class="desktop_page_container">

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

<div class="page_notification">Step 3 of 5</div>

<div class="content_box_invisible">
	<h3>Sign Up</h3>
</div>

<div class="content_box">
	<h2>Your Mobile Number</h2>
	<h3>07503 549 427</h3>
    <div class="clear"></div>
</div>

<div class="content_box_invisible">
	<p>Setting up your MyLebara account.<br />
    Your personal information is stored securely. Lebara Mobile will not share any of your information with anyone else without your explicit concent</p>
    <p>For successful registration, please enter and confirm your valid email address. We will send a validation link to your email address. If you don't receive the link, please check your Junk/Spam folder.</p>
    <div class="clear"></div>
</div>
<div class="content_box">
	<div class="narrow_details_field"><span>*Email</span><div class="narrow_input_field"><input type="text" name="email" value="" placeholder="enter your email" /></div></div>
    <!--<div class="narrow_details_field"><span>*Repeat Email</span><div class="narrow_input_field"><input type="text" name="email" value="" placeholder="repeat your email" /></div></div>-->
    <div class="narrow_details_field"><span>*Password</span><div class="narrow_input_field"><input type="password" name="password" value="" placeholder="8 to 50 characters" /></div></div>
    <div class="narrow_details_field"><span>*Repeat Password</span><div class="narrow_input_field"><input type="password" name="password" value="" placeholder="repeat password" /></div></div>
    <!--<div class="narrow_details_field"><span>*Title</span>
    	<div class="title_dropdown">
    		<select>
  				<option value="mr">Mr</option>
  				<option value="mrs">Mrs</option>
  				<option value="ms">Ms</option>
  				<option value="miss">Miss</option>
			</select>
       	</div>
    </div>-->
    <div class="narrow_details_field"><span>*First Name</span><div class="narrow_input_field"><input type="text" name="first_name" value="" placeholder="enter your first name" /></div></div>
    <div class="narrow_details_field"><span>*Last Name</span><div class="narrow_input_field"><input type="text" name="last_name" value="" placeholder="enter your last name" /></div></div>
    <!--<div class="narrow_details_field"><span>*Date of Birth</span>
        <div class="dob_dropdown_day">
    		<select>
            	<option value="" disabled selected class="dropdown_first">DD</option>
  				<option value="01">01</option>
  				<option value="02">02</option>
  				<option value="03">03</option>
  				<option value="04">04</option>
  				<option value="05">05</option>
  				<option value="06">06</option>
  				<option value="07">07</option>
  				<option value="08">08</option>
  				<option value="09">09</option>
  				<option value="10">10</option>
  				<option value="11">11</option>
  				<option value="12">12</option>
  				<option value="13">13</option>
  				<option value="14">14</option>
  				<option value="15">15</option>
  				<option value="16">16</option>
  				<option value="17">17</option>
  				<option value="18">18</option>
  				<option value="19">19</option>
  				<option value="20">20</option>
  				<option value="21">21</option>
  				<option value="22">22</option>
  				<option value="23">23</option>
  				<option value="24">24</option>
  				<option value="25">25</option>
  				<option value="26">26</option>
  				<option value="27">27</option>
  				<option value="28">28</option>
  				<option value="29">29</option>
  				<option value="30">30</option>
  				<option value="31">31</option>
			</select>
       	</div>
        <div class="dob_dropdown_month">
    		<select>
            	<option value="" disabled selected class="dropdown_first">MM</option>
  				<option value="Jan">Jan</option>
  				<option value="Feb">Feb</option>
  				<option value="Mar">Mar</option>
  				<option value="Apr">Apr</option>
  				<option value="May">May</option>
  				<option value="Jun">Jun</option>
  				<option value="Jul">Jul</option>
  				<option value="Aug">Aug</option>
  				<option value="Sep">Sep</option>
  				<option value="Oct">Oct</option>
  				<option value="Nov">Nov</option>
  				<option value="Dec">Dec</option>
			</select>
       	</div>
        <div class="dob_dropdown_year">
    		<select>
            	<option value="" disabled selected class="dropdown_first">YYYY</option>
  				<option value="1930">1930</option>
				<option value="1931">1931</option>
				<option value="1932">1932</option>
				<option value="1933">1933</option>
				<option value="1934">1934</option>
				<option value="1935">1935</option>
				<option value="1936">1936</option>
				<option value="1937">1937</option>
				<option value="1938">1938</option>
				<option value="1939">1939</option>
				<option value="1940">1940</option>
				<option value="1941">1941</option>
				<option value="1942">1942</option>
				<option value="1943">1943</option>
				<option value="1944">1944</option>
				<option value="1945">1945</option>
				<option value="1946">1946</option>
				<option value="1947">1947</option>
				<option value="1948">1948</option>
				<option value="1949">1949</option>
				<option value="1950">1950</option>
				<option value="1951">1951</option>
				<option value="1952">1952</option>
				<option value="1953">1953</option>
				<option value="1954">1954</option>
				<option value="1955">1955</option>
				<option value="1956">1956</option>
				<option value="1957">1957</option>
				<option value="1958">1958</option>
				<option value="1959">1959</option>
				<option value="1960">1960</option>
				<option value="1961">1961</option>
				<option value="1962">1962</option>
				<option value="1963">1963</option>
				<option value="1964">1964</option>
				<option value="1965">1965</option>
				<option value="1966">1966</option>
				<option value="1967">1967</option>
				<option value="1968">1968</option>
				<option value="1969">1969</option>
				<option value="1970">1970</option>
				<option value="1971">1971</option>
				<option value="1972">1972</option>
				<option value="1973">1973</option>
				<option value="1974">1974</option>
				<option value="1975">1975</option>
				<option value="1976">1976</option>
				<option value="1977">1977</option>
				<option value="1978">1978</option>
				<option value="1979">1979</option>
				<option value="1980">1980</option>
				<option value="1981">1981</option>
				<option value="1982">1982</option>
				<option value="1983">1983</option>
				<option value="1984">1984</option>
				<option value="1985">1985</option>
				<option value="1986">1986</option>
				<option value="1987">1987</option>
				<option value="1988">1988</option>
				<option value="1989">1989</option>
				<option value="1990">1990</option>
				<option value="1991">1991</option>
				<option value="1992">1992</option>
				<option value="1993">1993</option>
				<option value="1994">1994</option>
				<option value="1995">1995</option>

			</select>
       	</div>-->
    <div class="clear"></div>
</div>

<div class="content_box_invisible">
	<div class="wide_button blue"><a href="registration_4_purchase.php"><span>CONTINUE TO NEXT STEP</span></a></div>
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
