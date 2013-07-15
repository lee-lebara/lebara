<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "Welcome, John!";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

<div class="mobile_element"><?php include($DOCUMENT_ROOT . "./includes/homepage_hero_loggedin.php"); ?></div>

<?php include($DOCUMENT_ROOT . "./includes/homepage_hero_desktop_new_loggedin.php"); ?>

<div id="customer_main_details">
	<div class="mobile_number">Mobile Number: <span>07563372163</span></div>
</div>

<div class="content_box mobile_element">
	<h2>Your current balance:</h2>
	<div class="current_balance"><span>&pound;29.30</span> credit</div>
    <div class="current_balance"><span>&pound;2.50</span> bonus (expires in xx days)</div>
</div>

<?php include($DOCUMENT_ROOT . "./includes/homepage_buttons_loggedin.php"); ?>

<div class="homepage_feature_modules desktop_element">

<div class="feature_module_1">
<div class="feature_module_container">
<h3>Get your Free SIM</h3>
<ul class="feature_module_list">
	<li>Low cost,<br>high quality UK<br>&amp; international calls</li>
    <li>FREE Lebara to Lebara calls</li>
</ul>
<div class="clear"></div>
</div>
<a href="free_sim_loggedin.php" class="feature_module_link"><img src="images/feature_module_button_sim.gif" alt="Get your SIM"></a>
</div>

<div class="rates_module_homepage"><img src="./images/rates_finder_placeholder.jpg" alt="Find Rates"></div>
</div>

<div class="clear"></div>

<div class="homepage_feature_modules desktop_element">

<div class="feature_module_2">
<div class="feature_module_container">
<h3>Top Up</h3>
<div class="clear"></div>
<p><strong>FREE Call Credit</strong> when you top-up your PAYG account online</p>
<div class="top_up_credit_copy">add<br><span>&pound;20</span><br>get an extra<br><span>&pound;10</span><br>FREE</div>
<div class="clear"></div>
</div>
<a href="products_cc_loggedin.php" class="feature_module_link"><img src="images/feature_module_button_topup.gif" alt="Top Up Now"></a>
</div>

<div class="feature_module_3">
<div class="feature_module_container">
<h3>BlackBerry Pass</h3>
<div class="clear"></div>
<ul class="feature_module_list_2">
	<li>BlackBerry Messenger&trade;</li>
    <li>Push Emails</li>
    <li>Internet</li>
</ul>
<div class="blackberry_price_copy">only<br><span>&pound;5</span></div>
<div class="clear"></div>
</div>
<a href="blackberry_pass_loggedin.php" class="feature_module_link"><img src="images/feature_module_button_findoutmore.gif" alt="Find Out More"></a>
</div>

<div class="feature_module_4">
<div class="feature_module_container">
<h3>Lebara Money</h3>
<div class="clear"></div>
<p>Worldwide money transfers made easy with Lebara Money</p>
<div class="clear"></div>
</div>
<a href="http://www.lebara-money.com" class="feature_module_link" target="_blank"><img src="images/feature_module_button_findoutmore.gif" alt="Find Out More"></a>
</div>

</div>

<div class="horizontal_line"></div>

<?php include($DOCUMENT_ROOT . "./includes/footer.php"); ?>
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
