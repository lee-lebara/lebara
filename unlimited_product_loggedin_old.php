<!DOCTYPE HTML>
<html>

<?php $pageTitle = "Unlimited";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>


<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>

<script>
function buyWithSim(){
    if( document.getElementById("box").checked==true ){
        window.location="new_customer_unlimited.php";
    } else { window.location="customer_or_not_topup_loggedin.php"; }
}

</script>

<script>

$(document).ready(function(){
    initCheckBoxes();
});

var slideSpeed = 50;
var leftDist = 30.75;

function initCheckBoxes()
{
    $( ".cb-slider_small" ).attr('is_active', false);   //to track if the slider was dragged completely and released outside
    $( ".cb-slider_small" ).draggable({
         containment: "parent",
         stop: function(event, ui){
             //trigger a mouse up only if is_active is left at true
            if($(ui.helper).attr('is_active')) $(ui.helper).mouseup();
         }
    });

    $(".cb-slider_small").mousedown(function(){
        //set is active to true so that we can check on drag complete if its still true and take necessary action
        $(this).attr("is_active", true);
    });

    $(".cb-slider_small").mouseup(function(){

    var status = $(this).attr("cb-status");

    switch(status)
    {
        case "0":
        //its off, slide it by 41px;
        $(this).animate({left: leftDist}, slideSpeed);
        //change status to 1
        $(this).attr("cb-status", "1");
        break;

        case "1":
        //its 'on', slide it to 0px;
        $(this).animate({left: "0"}, slideSpeed);
        //change status to 0
        $(this).attr("cb-status", "0");

        break;
    }
    $(this).attr("is_active", false);  //reset
 });
}

</script>

<div class="desktop_page_container">

<div class="landingpage_subnav">
 	<h1 class="products_header">Shop</h1>
    	<ul>
            <li><a href="uk_plus_loggedin.php">UK Plus+</a></li>
            <li><a href="#" id="landingpage_subnav_selected">Lebara Freedom</a></li>
            <li><a href="data_passes_loggedin.php">Data Passes</a></li>
            <li><a href="country_passes_loggedin.php">Country Pass</a></li>
            <li><a href="all_in_one_loggedin.php">All-In-One</a></li>
            <li><a href="blackberry_pass_loggedin.php">BlackBerry Pass</a></li>
            <li><a href="http://www.lebara-money.com" target="_blank">Lebara Money</a></li>
        </ul>
</div>


	<div class="fake_page_content">
    	<div style="margin: 290px 0px 0px 470px;">
			<div class="fake_buynow_checkbox" style="padding-top: 10px; margin-left: 10px;">
            <!--<h3 style="color: #00a6eb; margin-bottom: 5px; text-align: left;">Select your number:</h3>
				<div class="phone_choice_dropdown">
					<select style="width: 175px;">
  					<option value="number_1">07967 123 456 (My Phone)</option>
  					<option value="number_2">07986 654 321 (My Second Phone)</option>
					</select>
 				</div>
                <h3 style="color: #00a6eb; margin-bottom: 5px; text-align: left; float: left;">Auto Renew:</h3>
                <div class="cb-bg_small" style="margin: 0px; float: left; margin-left: 20px;">
    			<div class="cb-slider_small" cb-status="0"></div>
				</div>
                <div style="font-size: 0.8em; float: left; color: #717171; text-align: left; margin: 5px 0px 10px 0px;">Auto renew will be activated every 30 days from purchase date</div>-->
            <a href="payment_details_cc_loggedin.php" class="fake_buynow_button"  style="margin: 10px 0px 0px 30px; padding: 14px 7px; width: 150px; height: 20px; background-color: #d1005d; border: 0px; border-radius: 7px; color: #ffffff; font-size: 1.2em; font-family: GothamBook; text-align:center; text-decoration:none;">BUY NOW</a>
			</div>
        </div>
        
        <div style="margin: 210px 0px 0px 470px;">
			<div class="fake_buynow_checkbox" style="padding-top: 10px; margin-left: 10px;">
            <!--<h3 style="color: #00a6eb; margin-bottom: 5px; text-align: left;">Select your number:</h3>
				<div class="phone_choice_dropdown">
					<select style="width: 175px;">
  					<option value="number_1">07967 123 456 (My Phone)</option>
  					<option value="number_2">07986 654 321 (My Second Phone)</option>
					</select>
 				</div>
                <h3 style="color: #00a6eb; margin-bottom: 5px; text-align: left; float: left;">Auto Renew:</h3>
                <div class="cb-bg_small" style="margin: 0px; float: left; margin-left: 20px;">
    			<div class="cb-slider_small" cb-status="0"></div>
				</div>
                <div style="font-size: 0.8em; float: left; color: #717171; text-align: left; margin: 5px 0px 10px 0px;">Auto renew will be activated every 30 days from purchase date</div>-->
            <a href="payment_details_cc_loggedin.php" class="fake_buynow_button"  style="margin: 10px 0px 0px 30px; padding: 14px 7px; width: 150px; height: 20px; background-color: #d1005d; border: 0px; border-radius: 7px; color: #ffffff; font-size: 1.2em; font-family: GothamBook; text-align:center; text-decoration:none;">BUY NOW</a>
			</div>
        </div>
        
        <div style="margin: 210px 0px 0px 470px;">
			<div class="fake_buynow_checkbox" style="padding-top: 10px; margin-left: 10px;">
            <!--<h3 style="color: #00a6eb; margin-bottom: 5px; text-align: left;">Select your number:</h3>
				<div class="phone_choice_dropdown">
					<select style="width: 175px;">
  					<option value="number_1">07967 123 456 (My Phone)</option>
  					<option value="number_2">07986 654 321 (My Second Phone)</option>
					</select>
 				</div>
                <h3 style="color: #00a6eb; margin-bottom: 5px; text-align: left; float: left;">Auto Renew:</h3>
                <div class="cb-bg_small" style="margin: 0px; float: left; margin-left: 20px;">
    			<div class="cb-slider_small" cb-status="0"></div>
				</div>
                <div style="font-size: 0.8em; float: left; color: #717171; text-align: left; margin: 5px 0px 10px 0px;">Auto renew will be activated every 30 days from purchase date</div>-->
            <a href="payment_details_cc_loggedin.php" class="fake_buynow_button"  style="margin: 10px 0px 0px 30px; padding: 14px 7px; width: 150px; height: 20px; background-color: #d1005d; border: 0px; border-radius: 7px; color: #ffffff; font-size: 1.2em; font-family: GothamBook; text-align:center; text-decoration:none;">BUY NOW</a>
			</div>
        </div>
        
     </div> 




<div class="clear"></div>
</div>
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
