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


<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>


<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

<div class="desktop_page_container">

<div class="landingpage_subnav">
 	<h1 class="products_header">Offers</h1>
    	<ul>
            <li><a href="#" id="landingpage_subnav_selected">All Lebara Offers</a></li>
            <li><a href="free_sim_loggedin.php">Free SIM</a></li>
            <li><a href="products_cc_loggedin.php">Get &pound;10 credit FREE</a></li>
        </ul>
</div>

<div class="products_main_content">
	<h2>All Offers</h2>
	<ul>
    	<li><a href="free_sim_loggedin.php"><img src="images/offer_pic_small_freesim.jpg" alt="FREE SIM"></a><span>Get your FREE SIM</span> and make international calls from just 1p per minute...<a href="free_sim_loggedin.php">Join us now and get your FREE SIM card</a>.</li>
    </ul>
	<ul>
    	<li><a href="products_cc_loggedin.php"><img src="images/offer_pic_small_tennerfree.jpg" alt="et &pound10 FREE when you top-up with &pound;20"></a><span>Get &pound;10 FREE</span> when you top up with &pound;20...<a href="products_cc_loggedin.php">read more</a></li>
    </ul>
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
