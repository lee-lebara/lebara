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
			<li><a href="products_cc_loggedin.php"><span>Top Up via Card</span></a></li>
    		<li><a href="products_v_loggedin.php"><span>Top Up via Voucher</span></a></li>
    		<li><a href="free_sim_loggedin.php"><span>Get a Free SIM</span></a></li>
            <li><a href="all_offers_loggedin.php"><span>All Offers</span></a></li>
     		<li><a href="view_balance.php"><span>My Lebara</span></a></li>
     		<li><a href="contact_us_loggedin.php"><span>Contact Us</span></a></li>
     		<li><a href="help_loggedin.php"><span>Help</span></a></li>
     		<li><a href="terms_and_conditions_loggedin.php"><span>Terms and Conditions</span></a></li>
     		<li><a id="overlay_trigger"><span>Select Language</span></a></li>
		</ul>
</nav>

<nav class="main_navigation desktop_element"> 
		<ul class="nav">
        	<li><a href="free_sim_loggedin.php">Get Started</a>
            	<ul>
                <li><a href="free_sim_loggedin.php">Get a FREE SIM</a></li>
                <li><a href="activation_loggedin.php">Activate</a></li>
                <li><a href="transfer_loggedin.php">Transfer your number</a></li>
                </ul>
            </li>
			<li id="top_up_menu_item"><a href="products_cc_loggedin.php">Top Up</a></li>
            <li><a href="all_products_landing_loggedin.php">Shop</a>
				<ul>
				<li><a href="free_sim_loggedin.php">Free SIM</a></li>
				<li><a href="uk_plus_loggedin.php">Lebara UK Plus</a></li> 
        		<li><a href="unlimited_product_loggedin.php">Lebara Freedom</a></li>  
        		<li><a href="data_passes_loggedin.php">Data Passes</a></li>
        		<li><a href="country_passes_loggedin.php">Country Passes</a></li> 
            	<li><a href="all_in_one_loggedin.php">All-In-One</a></li>
                <li><a href="blackberry_pass_loggedin.php">Blackberry Pass</a></li>
        		<li><a href="http://www.lebara-money.com" target="_blank">Lebara Money</a></li>
            	<li><a href="recommend_a_friend_loggedin.php">Recommend a Friend</a></li>
            	<li><a href="free_4pound_credit_loggedin.php">&pound;4 When You Join</a></li>
        		</ul>
            </li>
     		<li><a href="rates_loggedin.php">Tariffs</a>
            	<ul>
                <li><a href="rates_loggedin.php">International</a></li>
                <li><a href="rates_national_loggedin.php">National</a></li>
                <li><a href="rates_roaming_loggedin.php">Roaming</a></li>
                </ul>
            </li>
     		<li><a href="http://help.lebara.co.uk">Help</a></li>
     		<li><a href="mylebara.php">MyLebara</a>
				<ul>
        		<li><a href="mylebara.php">Dashboard</a></li>
        		<li><a href="mylebara.php">Top Up</a></li>  
        		<li><a href="mylebara.php">Call History</a></li>  
        		<li><a href="mylebara.php">Top Up History</a></li>  
        		<li><a href="mylebara.php">Profile &amp; Settings</a>
                	<ul>
                    	<li><a href="mylebara.php">Your Profile</a></li>
                        <li><a href="mylebara.php">Your Service Settings</a></li>
                        <li><a href="mylebara.php">Your Family &amp; Friends</a></li>
                        <li><a href="mylebara.php">Your Payment Details</a></li>
                        <li><a href="mylebara.php">Change Password</a></li>
                        <li><a href="mylebara.php">Manage Account</a></li>
                        <li><a href="mylebara.php">Manage SMS Top up</a></li>
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