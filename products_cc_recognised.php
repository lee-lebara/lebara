<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "Select Product";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<script> 
$(document).ready(function(){
  $("#product_reveal_button").click(function(){
    $("#toggleText").slideToggle("200");
  });
  $("#product_reveal_button2").click(function(){
    $("#toggleText2").slideToggle("200");
  });
  $("#product_reveal_button3").click(function(){
    $("#toggleText3").slideToggle("200");
  });
  $("#product_reveal_button4").click(function(){
    $("#toggleText4").slideToggle("200");
  });
});
</script>



<?php include($DOCUMENT_ROOT . "./includes/main_header_recognised.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav_recognised.php"); ?>

<div class="desktop_page_container">

<script>

$(document).ready(function(){
    initCheckBoxes();
});

var slideSpeed = 50;
var leftDist = 41;

function initCheckBoxes()
{
    $( ".cb-slider" ).attr('is_active', false);   //to track if the slider was dragged completely and released outside
    $( ".cb-slider" ).draggable({
         containment: "parent",
         stop: function(event, ui){
             //trigger a mouse up only if is_active is left at true
            if($(ui.helper).attr('is_active')) $(ui.helper).mouseup();
         }
    });

    $(".cb-slider").mousedown(function(){
        //set is active to true so that we can check on drag complete if its still true and take necessary action
        $(this).attr("is_active", true);
    });

    $(".cb-slider").mouseup(function(){

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

<div id="customer_main_details">
	<div class="mobile_number">Mobile Number: <span>07563372163</span></div>
</div>

<div class="content_box">
	<h3>Top Up</h3>
    <p>Please choose the amount you'd like to top up from the options below:</p>
 
    <div class="product_box">
    	<div class="product_summary">
        	<a class="product_price" href="registration_1_purchase_recognised.php"><span>&pound;10</span> + &pound;2.50 free call credit</a>
        	<div class="product_reveal"><a id="product_reveal_button2"><span>Find out more</span><img src="images/product_reveal_arrow.gif" /></a></div>
        </div>
            <div class="product_select rubine"><a href="registration_1_purchase_recognised.php"><span>BUY NOW</span></a></div>
    </div>
    <div class="product_details" id="toggleText2" style="display: none">
    	<ul>
        	<li>Unlimited minutes to China, Hong Kong, and six other countries.</li>
            <li>Unlimited Lebara to Lebara UK calls &amp; texts</li>
        </ul>
        <div class="product_flags"><img src="images/product_flags.gif" alt="Country Flags" /></div>
        <p>For more information, please go to our <a href="terms_and_conditions.php" target="_blank">terms and conditions</a></p>
    </div>
    
    <div class="product_box">
    	<div class="product_summary">
        	<a class="product_price" href="registration_1_purchase_recognised.php"><span>&pound;20</span> + &pound;2.50 free call credit</a>
        	<div class="product_reveal"><a id="product_reveal_button3"><span>Find out more</span><img src="images/product_reveal_arrow.gif" /></a></div>
        </div>
            <div class="product_select rubine"><a href="registration_1_purchase_recognised.php"><span>BUY NOW</span></a></div>
    </div>
    <div class="product_details" id="toggleText3" style="display: none">
    	<ul>
        	<li>Unlimited minutes to China, Hong Kong, and six other countries.</li>
            <li>Unlimited Lebara to Lebara UK calls &amp; texts</li>
        </ul>
        <div class="product_flags"><img src="images/product_flags.gif" alt="Country Flags" /></div>
        <p>For more information, please go to our <a href="terms_and_conditions.php" target="_blank">terms and conditions</a></p>
    </div>
    
    <div class="product_box">
    	<div class="product_summary">
        	<a class="product_price" href="registration_1_purchase_recognised.php"><span>&pound;30</span> + &pound;2.50 free call credit</a>
        	<div class="product_reveal"><a id="product_reveal_button4"><span>Find out more</span><img src="images/product_reveal_arrow.gif" /></a></div>
        </div>
            <div class="product_select rubine"><a href="payment_details_cc_loggedin.php"><span>BUY NOW</span></a></div>
    </div>
    <div class="product_details" id="toggleText4" style="display: none">
    	<ul>
        	<li>Unlimited minutes to China, Hong Kong, and six other countries.</li>
            <li>Unlimited Lebara to Lebara UK calls &amp; texts</li>
        </ul>
        <div class="product_flags"><img src="images/product_flags.gif" alt="Country Flags" /></div>
        <p>For more information, please go to our <a href="terms_and_conditions.php" target="_blank">terms and conditions</a></p>
    </div>
    <div class="clear"></div>
</div>

<div class="content_box">
	<p><a href="all_offers_loggedin.php">Click to see all offers</a></p>
<div class="product_box">
    	<div class="product_summary">
        	<div class="product_image"><img src="images/flag_chinese.gif" alt="Chinese Flag"></div>
        	<a class="product_price" href="registration_1_purchase_recognised.php"><span>&pound;9.95</span> Chinese New Year</a>
        	<div class="product_reveal"><a id="product_reveal_button"><span>Find out more</span><img src="images/product_reveal_arrow.gif" /></a></div>
        </div>
            <div class="product_select orange"><a href="registration_1_purchase_recognised.php"><span>BUY NOW</span></a></div>
    </div>
    <div class="product_details" id="toggleText" style="display: none">
    	<ul>
        	<li>Unlimited minutes to China, Hong Kong, and six other countries.</li>
            <li>Unlimited Lebara to Lebara UK calls &amp; texts</li>
        </ul>
        <div class="product_flags"><img src="images/product_flags.gif" alt="Country Flags" /></div>
        <p>For more information, please go to our <a href="terms_and_conditions.php" target="_blank">terms and conditions</a></p>
    </div>
    <div class="clear"></div>
</div>

<div class="content_box_invisible">
    <a class="non_button_link" href="index_recognised.php">home</a>
	<a class="non_button_link_2" href="contact_us_recognised.php">contact customer services</a>
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
