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

<div class="landingpage_subnav">
 	<h1 class="products_header">Shop</h1>
    	<ul>
            <li><a href="#">My Lebara Profile</a></li>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#" id="landingpage_subnav_selected">Family &amp; Friends</a></li>
            <li><a href="#">Top Up History</a></li>
            <li><a href="#">Call History</a></li>
            <li><a href="#">MyLebara Money</a></li>
        </ul>
</div>


	<div class="shop_page_container fnf">
      <div class="lebara_logo_shop"><span>Lebara</span></div>
        <h2>Friends & Family</h2>
        <p>These following numbers are the numbers associated with you primary number you can add, edit, delete at any time you won't be able to do with your primary number.</p>
        <p>In order to activate a number you must call 5588 (free number) with the SIM card to be activated and it will be done automatically.</p>
    
                                <table class="fnf-details">
                                    <tr>
                                        <th>Name</th>
                                        <th>Number</th>
                                        <th>Country</th>
                                        <th>Function</th>
                                        <th class="action-cell">Action</th>
                                    </tr>
                                    <tr id="row-1">
                                        <td id="name-1" class="name"><span>Martian</span>
                                        <input type="text" id="row-1-name" value="Martian" />
                                        </td>
                                        <td id="number-1" class="number"><span>+44 7894 563 123</span>
                                        <input type="text" id="row-1-number" value="+447894563123" />
                                        </td>
                                        <td class="country"><span>United Kingdom</span></td>
                                        <td class="function"><span>Primary</span></td>
                                        <td class="action-cell">
                                        <div>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr id="row-2">
                                        <td id="name-2" class="name"><span>Moonicana</span>
                                        <input type="text" id="row-2-name" value="Moonica" />
                                        </td>
                                        <td id="number-2" class="number"><span>+44 7894 563 432</span>
                                        <input type="text" id="row-2-number" value="+447894563432" />
                                        </td>
                                        <td class="country"><span>United Kingdom</span></td>
                                        <td class="function"><span>Secondary</span></td>
                                        <td class="action-cell">
                                        <div>
                                            <a class="button-blue">EDIT</a><span> - - </span>
                                        </div></td>
                                    </tr>
                                    <tr id="row-3">
                                        <td id="name-3" class="name"><span>Plutonica</span>
                                        <input type="text" id="row-3-name" value="Plutonica" />
                                        </td>
                                        <td id="number-3" class="number"><span>+44 7894 563 432</span>
                                        <input type="text" id="row-3-number" value="+447894563432" />
                                        </td>
                                        <td class="country"><span>United Kingdom</span></td>
                                        <td class="function"><span>Family &amp; Friends</span></td>
                                        <td class="action-cell">
                                        <div>
                                            <a class="button-blue">EDIT</a><span> - - </span>
                                        </div></td>
                                    </tr>
                                </table>
                                <div class="button-container">
                                  <a class="btn-add-new-number">Add New +</a>
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
            $(document).ready(function() {
                $('table tr').each(function(i) {
                    $('#row-' + (i + 1) + '-name').hide();
                    $('#row-' + (i + 1) + '-number').hide();
                });
                $('.edit').unbind('click').bind('click', function(e) {

                    if(!$(e.target).hasClass('blue-btn-disable')) {
                        $('.add-button-holder').hide();
                        var rowId = $(e.target).parents('tr').attr('id');
                        $(e.target).parents('tr').after('<tr id="edit-row-data"><td colspan="5"><div class="modify-btn-block"><a class="green-btn mr10 save">SAVE</a><a class="blue-btn mr10 cancel">CANCEL</a><a class="red-btn mr10 delete-number">DELETE NUMBER</a></div><td></tr>');
                        $(e.target).parents('table').find('.top-up').removeClass('green-btn').addClass('green-btn-disable');
                        $(e.target).parents('table').find('.edit').removeClass('blue-btn').addClass('blue-btn-disable');

                        $('#' + rowId + '-name').show();
                        $('#' + rowId + '-number').show();

                        $('#number-' + rowId.split('-')[1] + ' span').hide();
                        $('#name-' + rowId.split('-')[1] + ' span').hide();

                        $('.fnf .save').unbind('click').bind('click', function(e) {
                            $('#' + rowId + '-name').addClass('valid');
                            $('#' + rowId + '-number').addClass('invalid');
                            $('#edit-row-data td div.modify-btn-block').before('<div class="errorBlock"><div id="errorContentTop"></div><div id="errorContent"><p>This number is not recognised as a Lebara SIM.</div><div id="errorContentBottom"></div></div>');
                        });
                        $('.fnf .cancel').unbind('click').bind('click', function(e) {
                            $('#' + rowId + '-name').removeClass('valid');
                            $('#' + rowId + '-number').removeClass('invalid');
                            $('#' + rowId + '-name').hide();
                            $('#' + rowId + '-number').hide();
                            $('#number-' + rowId.split('-')[1] + ' span').show();
                            $('#name-' + rowId.split('-')[1] + ' span').show();
                            $('.fnf .cancel').unbind('click');
                            $('.fnf .save').unbind('click');
                            $('.fnf .delete-number').unbind('click');
                            $(e.target).parents('table').find('.top-up').removeClass('green-btn-disable').addClass('green-btn');
                            $(e.target).parents('table').find('.edit').removeClass('blue-btn-disable').addClass('blue-btn');
                            $('#edit-row-data').remove();
                            $('.add-button-holder').show();

                        });
                        $('.fnf .delete-number').unbind('click').bind('click', function(e) {
                            $('#' + rowId + '-name').removeClass('valid');
                            $('#' + rowId + '-number').removeClass('invalid');
                            $('#' + rowId + '-name').hide();
                            $('#' + rowId + '-number').hide();
                            $('#number-' + rowId.split('-')[1] + ' span').show();
                            $('#name-' + rowId.split('-')[1] + ' span').show();
                            $('.fnf .cancel').unbind('click');
                            $('.fnf .save').unbind('click');
                            $('.fnf .delete-number').unbind('click');
                            $(e.target).parents('table').find('.top-up').removeClass('green-btn-disable').addClass('green-btn');
                            $(e.target).parents('table').find('.edit').removeClass('blue-btn-disable').addClass('blue-btn');
                            $('#edit-row-data').remove();
                            $('#' + rowId).remove();
                            $('.add-button-holder').show();
                        });
                    }
                });
                $('.btn-add-new-number').unbind('click').bind('click', function(e) {
                    if($('#add-row-data').length === 0) {
                        $('.add-button-holder').hide();
                        $(e.target).parents('tr').after('<tr id="edit-row-data"><td colspan="5"><div class="modify-btn-block"><a class="green-btn mr10 save">SAVE</a><a class="blue-btn mr10 cancel">CANCEL</a><a class="red-btn mr10 delete-number">DELETE NUMBER</a></div><td></tr>');
                        $(e.target).parents('table').find('.top-up').removeClass('green-btn').addClass('green-btn-disable');
                        $(e.target).parents('table').find('.edit').removeClass('blue-btn').addClass('blue-btn-disable');
                        $('table').append('<tr id="add-row-data"><td class="name"><input type="text" id="add-row-data-name" value="" placeholder="Type a Name" /></td><td class="number"><input type="text" id="add-row-data-number" value="" placeholder="Type a number" /></td><td colspan="3"><div class="modify-btn-block"><a class="button-green save">Save</a><a class="button-grey">Cancel</a><a class="button-red">Delete</a></div><td></tr>');

                        $('.modify-btn-block .cancel').unbind('click').bind('click', function(e) {
                            $(e.target).parents('table').find('.top-up').removeClass('green-btn-disable').addClass('green-btn');
                            $(e.target).parents('table').find('.edit').removeClass('blue-btn-disable').addClass('blue-btn');

                            $('#add-row-data').remove();
                            $('.add-button-holder').show();
                        });
                        $('.modify-btn-block .save').unbind('click').bind('click', function(e) {
                            $('#add-row-data-name').addClass('valid');
                            $('#add-row-data-number').addClass('invalid');
                            $('#add-row-data td.number').append('<div id="errorContent"><p>This number is not recognised as a Lebara SIM.</p></div>');
                        });
                    }
                });
            });

        </script>

</body>
</html>
