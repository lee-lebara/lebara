<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<?php $pageTitle = "Lebara Freedom";
       $metaDescription = "Make low cost international calls with Lebara. Get a free SIM today on Pay As You Go tariffs. Want to send money abroad? Let Lebara help!";
	   $metaKeywords = "international calls & Free SIMs";
	   include($DOCUMENT_ROOT . "./includes/head.php");
?>


<body>

<?php include($DOCUMENT_ROOT . "./includes/main_header_loggedin.php"); ?>


<?php include($DOCUMENT_ROOT . "./includes/nav_loggedin.php"); ?>

     
<div class="desktop_page_container">

<div class="universal-error-page">
 	<h1>We’re Sorry</h1>
    <p>The page you are looking for appears to have been moved or deleted.</p>

    <p>Please use the navigation above and below to visit another section or page in our family of websites.</p>

    <p>If you can’t find what you’re looking for, please do not hesitate to contact us via email by <a href="#">clicking here</a></p>

</div>


	
                <div class="clear"></div>
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
