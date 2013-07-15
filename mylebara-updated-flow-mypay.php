<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "View Balance";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>


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


<script>

    function loadOverlay_ml(){  
        //loads popup only if it is disabled  
        if($("#bgOverlay_ml").data("state")==0){  
            $("#bgOverlay_ml").css({  
                "opacity": "0.7"  
            });  
            $("#bgOverlay_ml").fadeIn("medium");  
            $("#overlay_ml").fadeIn("medium");  
            $("#bgOverlay_ml").data("state",1);  
        }  
    }  
      
    function disableOverlay_ml(){  
        if ($("#bgOverlay_ml").data("state")==1){  
            $("#bgOverlay_ml").fadeOut("medium");  
            $("#overlay_ml").fadeOut("medium");  
            $("#bgOverlay_ml").data("state",0);  
        }  
    }  
      
    function centerOverlay_ml(){  
        var owinw = $(window).width();  
        var owinh = $(window).height();  
        var opopw = $('#overlay_ml').width();  
        var opoph = $('#overlay_ml').height();  
        $("#overlay_ml").css({  
            "position" : "absolute"
        });  
        //IE6  
        $("#bgOverlay_ml").css({  
            "height": owinh    
        });  
    }

    function initCheckSingleOption() {

        var cbSliderSmall = $('.cb-slider_small');



        cbSliderSmall.each(function(){

            console.log(this);

            var cb-status = $(this).attr('cb-status');

            console.log(cb-status);

        })

        //loadOverlay_ml();

    }

    $(document).ready(function() {  
       $("#bgOverlay_ml").data("state",0);  
       $(".overlay_trigger_ml").click(function(){
            centerOverlay_ml();
            console.log('im here');
            //perform check for existing option
            initCheckSingleOption();

       });  
       $(".overlayClose_ml").click(function(){  
            disableOverlay_ml();  
       });  
       $(document).keypress(function(e){  
            if(e.keyCode==27) {  
                disableOverlay_ml();   
            }  
        });  
    });  
      
    //Recenter the popup on resize
    $(window).resize_ml(function() {  
    centerOverlay_ml();  
    });


</script>

<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>

<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

<div id="overlay_ml">
	<p>Are you sure you want to make this change?:</p>     
	<a class="overlayClose_ml">YES</a>
    <a class="overlayClose_ml">NO</a>  
</div> 
  
<div id="bgOverlay_ml"></div> 

<h1 class="desktop_element product_header">My<span>Lebara</span></h1>

<div class="desktop_page_container">

<div class="mylebara_page_header">
	<h2 class="mylebara_header">Hi John</h2><div class="last_login_details">Last login: 12 Jun-2013</div>
</div>

	<div id="mypay-gateway" class="mylebara_primary_content">
        
        <div class="mylebara_content_box">
    	<div class="mylebara_content_box_header">Manage Top Up / Auto Renew</div>
    	<table class="mylebara_table" width="100%" cellpadding="0" cellspacing="0">
            <tr class="autorenew_headers">
            	<td>Product</td><td>&nbsp;</td><td>Auto-renew:</td>
            </tr>

        	<tr class="odd">
              <td>Auto Top Up</td>
              <td>Auto Top Up with
                <select>
                  <option value="5">&pound;5</option>
                  <option value="10">&pound;10</option>
                  <option value="20">&pound;20</option>
                  <option value="30">&pound;30</option>
                </select> when my balance reaches &pound;2</td>
              <td>
                <div class="cb-bg_small">
                  <a class="auto_topup_switch">
                    <div class="cb-slider_small" cb-status="0"></div>
                  </a>
                </div>
                <a class="mylebara_save_button overlay_trigger_ml">SAVE</a>
              </td>
            </tr>
            <tr>
              <td>Unlimited L2L SMS</td>
              <td>Currently set to <a class="set_or_not" style="display: none;">NOT </a>auto renew on expiry</td>
              <td>
                <div class="cb-bg_small">
				  <!-- Add this ID to init popup id="overlay_trigger_ml" -->
                  <a class="auto_topup_switch">
                    <div class="cb-slider_small" cb-status="0"></div>
                  </a>
                </div>
                <a class="mylebara_save_button overlay_trigger_ml">SAVE</a>
              </td>
            </tr>

            <tr class="odd">
              <td>Data Pass</td>
              <td>Currently set to <a class="set_or_not" style="display: none;">NOT </a>auto renew on expiry</td>
              <td>
                <div class="cb-bg_small">
                  <a class="auto_topup_switch">
                    <div class="cb-slider_small" cb-status="0"></div>
                  </a>
                </div>
                <a class="mylebara_save_button overlay_trigger_ml">SAVE</a>
              </td>
            </tr>

          </table>
    </div>
    
    
    
	</div>
    
    


<div class="mylebara_summary_panel">
	<p>Your PAYG Balance:</p>
    <div class="summary_total">&pound;25.42</div>
    <p>Your All-In-One Balance:</p>
    <div class="summary_total">&pound;10.00</div>
    <a href="products_cc_loggedin.php" class="mylebara_topup_button">TOP UP NOW</a>
    	<ul>
        	<li><a href="#"><img src="./images/mylebara_icon_profile.gif" alt="Profile"><span>Profile</span></a></li>
            <li><a href="#"><img src="./images/mylebara_icon_settings.gif" alt="Settings"><span>Settings</span></a></li>
            <li><a href="#"><img src="./images/mylebara_icon_password.gif" alt="Change Password"><span>Change Password</span></a></li>
        </ul>
</div>


<div class="mylebara_primary_content">
        
        <div class="mylebara_content_box">
    	<table class="mylebara_table" width="100%" cellpadding="0" cellspacing="0">
            <tr class="autorenew_headers">
            	<td>Bundles</td><td>Remaining</td><td>Expires</td>
            </tr>
            <tr>
            	<td>Unlimited L2L Mins</td><td>Currently set to <a class="set_or_not" style="display: none;">NOT </a>Unlimited</td><td>2013-07-13</td>
            </tr>
            <tr class="odd">
            	<td>Unlimited L2L SMS</td><td>Currently set to <a class="set_or_not" style="display: none;">NOT </a>Unlimited</td><td>2013-07-13</td>
            </tr>
        </table>
    </div>
    
    
    
	</div>


<div class="clear"></div>
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
