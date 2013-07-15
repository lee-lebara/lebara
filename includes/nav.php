<script>

    function loadOverlay(){  
        //loads popup only if it is disabled  
        if($("#bgOverlay").data("state")==0){  
            $("#bgOverlay").css({  
                "opacity": "0.7"  
            });  
            $("#bgOverlay").fadeIn("medium");  
            $("#overlay").fadeIn("medium");  
            $("#bgOverlay").data("state",1);  
        }  
    }  
      
    function disableOverlay(){  
        if ($("#bgOverlay").data("state")==1){  
            $("#bgOverlay").fadeOut("medium");  
            $("#overlay").fadeOut("medium");  
            $("#bgOverlay").data("state",0);  
        }  
    }  
      
    function centerOverlay(){  
        var owinw = $(window).width();  
        var owinh = $(window).height();  
        var opopw = $('#overlay').width();  
        var opoph = $('#overlay').height();  
        $("#overlay").css({  
            "position" : "absolute"
        });  
        //IE6  
        $("#bgOverlay").css({  
            "height": owinh    
        });  
    }

    $(document).ready(function() {  
       $("#bgOverlay").data("state",0);  
       $("#overlay_trigger").click(function(){  
            centerOverlay();  
            loadOverlay();     
       });  
       $(".overlayClose").click(function(){  
            disableOverlay();  
       });  
       $(document).keypress(function(e){  
            if(e.keyCode==27) {  
                disableOverlay();   
            }  
        });  
    });  
      
    //Recenter the popup on resize
    $(window).resize(function() {  
    centerOverlay();  
    });
</script>

<nav class="main_navigation mobile_element"> 
	
		<ul class="nav">
			<li><a href="products_cc.php"><span>Top Up via Card</span></a></li>
    		<li><a href="products_v.php"><span>Top Up via Voucher</span></a></li>
    		<li><a href="free_sim.php"><span>Get a Free SIM</span></a></li>
            <li><a href="all_offers.php"><span>All Offers</span></a></li>
     		<li><a href="login_nopurchase.php"><span>My Lebara</span></a></li>
     		<li><a href="contact_us.php"><span>Contact Us</span></a></li>
     		<li><a href="help.php"><span>Help</span></a></li>
     		<li><a href="terms_and_conditions.php"><span>Terms and Conditions</span></a></li>
     		<li><a id="overlay_trigger"><span>Select Language</span></a></li>
		</ul>
</nav>

<nav class="main_navigation desktop_element"> 
		<ul class="nav">
        	<li><a href="free_sim.php">Get Started</a>
            	<ul>
                <li><a href="free_sim.php">Get a FREE SIM</a></li>
                <li><a href="activation.php">Activate</a></li>
                <li><a href="transfer.php">Transfer your number</a></li>
                </ul>
            </li>
			<li id="top_up_menu_item"><a href="products_cc.php">Top Up</a></li>
            <li><a href="all_products_landing.php">Shop</a>
				<ul>
				<li><a href="free_sim.php">Free SIM</a></li>
				<li><a href="uk_plus.php">Lebara UK Plus</a></li> 
        		<li><a href="unlimited_product.php">Lebara Freedom</a></li>  
        		<li><a href="data_passes.php">Data Passes</a></li>
        		<li><a href="country_passes.php">Country Passes</a></li> 
            	<li><a href="all_in_one.php">All-In-One</a></li>
                <li><a href="blackberry_pass.php">Blackberry Pass</a></li>
        		<li><a href="http://www.lebara-money.com" target="_blank">Lebara Money</a></li>
            	<li><a href="recommend_a_friend.php">Recommend a Friend</a></li>
            	<li><a href="free_4pound_credit.php">&pound;4 When You Join</a></li>
        		</ul>
            </li>
     		<li><a href="rates.php">Tariffs</a>
            	<ul>
                <li><a href="rates.php">International</a></li>
                <li><a href="rates_national.php">National</a></li>
                <li><a href="rates_roaming.php">Roaming</a></li>
                </ul>
            </li>
     		<li><a href="http://help.lebara.co.uk">Help</a></li>
     		<li><a href="login.php">MyLebara</a>
				<ul>
        		<li><a href="login.php">Dashboard</a></li>
        		<li><a href="login.php">Top Up</a></li>  
        		<li><a href="login.php">Call History</a></li>  
        		<li><a href="login.php">Top Up History</a></li>  
        		<li><a href="login.php">Profile &amp; Settings</a>
                	<ul>
                    	<li><a href="login.php">Your Profile</a></li>
                        <li><a href="login.php">Your Service Settings</a></li>
                        <li><a href="login.php">Your Family &amp; Friends</a></li>
                        <li><a href="login.php">Your Payment Details</a></li>
                        <li><a href="login.php">Change Password</a></li>
                        <li><a href="login.php">Manage Account</a></li>
                        <li><a href="login.php">Manage SMS Top up</a></li>
                    </ul>
                </li>  
    			</ul>
            </li>
		</ul>
</nav>

<div id="overlay">
	<p>Please choose your language:</p>     
	<a class="overlayClose"><img src="images/language_button_english.gif" alt="English" /></a>
    <a class="overlayClose"><img src="images/language_button_chinese.gif" alt="Chinese" /></a>  
</div>   
<div id="bgOverlay"></div> 

<script type="text/javascript" src="js/mobile_nav-ck.js"></script>