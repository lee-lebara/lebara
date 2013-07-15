<!DOCTYPE HTML>
<html>

<?php $pageTitle = "Lebara Freedom";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>


<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

     
<div class="desktop_page_container">

<div class="landingpage_subnav">
 	<h1 class="products_header">Shop</h1>
    	<ul>
            <li><a href="#">My Lebara Profile</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#" id="landingpage_subnav_selected">Payment Management</a></li>
            <li><a href="#">Top Up History</a></li>
            <li><a href="#">Call History</a></li>
            <li><a href="#">MyLebara Money</a></li>
        </ul>
</div>


	<div class="shop_page_container card-mgmt">
      <div class="lebara_logo_shop"><span>Lebara</span></div>
        <h2>Payment Management</h2>
                                <p class="card-mgmt-more-info">
                                    Here you can see all the payment accounts we have for registered your account.
                                </p>
                                <p class="card-mgmt-more-info">
                                    The default card is what we will use for any top up but you may change this at any time. If you have any recurring top up setup then we will deduct payment from that account.
                                </p>
                                <table class="card-mgmt-details">
                                    <tr>
                                        <th class="default">Default <span>(Select and Save)</span></th>
                                        <th class="account-number">Payment Method</th>
                                        <th class="action-cell">Action</th>
                                    </tr>
                                    <tr id="row-1">
                                        <td id="name-1">
                                        <input type="radio" name="method" id="opt01" checked="checked"/>
                                        </td>
                                        <td id="number-1" class="account-number"><span>XXXX-XXXX-XXXX-0001</span></td>
                                        <td class="action-cell"><a class="button-red delete-method">DELETE METHOD</a></td>
                                    </tr>
                                    <tr id="row-2">
                                        <td id="name-2">
                                        <input type="radio" name="method" id="opt02"/>
                                        </td>
                                        <td id="number-2" class="account-number"><span>Direct Debit Barclays Bank Transfer</span></td>
                                        <td class="action-cell"><a class="button-red delete-method">DELETE METHOD</a></td>
                                    </tr>
                                </table>
                                <div class="add-button-holder button-container">
                                    <a class="btn-save-change ui-btn-primary ui-btn-primary-disable">Save</a>
                                </div>
        
        <div class="clear"></div>
            
        </div>
                <div class="clear"></div>
     </div> 

     
   <p class="shop_tandcs_link">View UK Plus full <a href="#">Terms and Conditions</a>.</p>


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
        <script type="text/javascript">
            var defaultSelected;
            $(document).ready(function() {
                defaultSelected = $('input:checked').attr('id');
                $('.btn-save-change').unbind('click').bind('click', function(e) {
                    if(!$(e.target).hasClass('ui-btn-primary-disable')) {
                        //submit form
                    }
                });

                $('input').unbind('click').bind('click', function(e) {
                    var newSelect = $('input:checked').attr('id');
                    if(defaultSelected !== newSelect) {
                        $('.btn-save-change').removeClass('ui-btn-primary-disable');
                    }
                    else {
                        $('.btn-save-change').addClass('ui-btn-primary-disable');
                    }
                });
                $('.delete-method').unbind('click').bind('click', function(e) {
                    lightbox.display = 'custom-y';
                    lightbox.show();
                    lightbox.init('Card-Management_1a_delete_method.html #lightbox-containt', '', '', '', 240);

                });

                lightbox.hide();
                $('#lightbox-containt').live('lightboxAdded', function(e) {
                    $('#delete_method').unbind('click').bind('click', function(e) {
                        lightbox.removeFromStage();
                    });
                    $('#keep_method').unbind('click').bind('click', function(e) {
                        lightbox.removeFromStage();
                    });
                });
            });

        </script>

</body>
</html>
