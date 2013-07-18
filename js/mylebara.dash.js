/**
 *
 * @type {mylebaraDashboard}
 */
var mylebaraDashboard = (function ($) {

    /**
     *  Init functions
     */
    var init = function () {

        initCheckBoxes();

        //Attach Events

        $("#bgOverlay_ml").data("state", 0);

        //activate options
        $(".cb-slider_small").each(function () {
            var thisCbStatus = $(this).attr("cb-status");
            if (thisCbStatus == 1) {
                $(this).animate({left: leftDist}, slideSpeed);
                $(this).attr("cb-status", "1");
                $(this).addClass('defaultOption checked');
            }
        });

        $(".overlay_trigger_ml").click(function (e) {

            initCenterOverlay_ml();

            //if my pay id the load my pay popup
            if ($('#mypay-gateway').length > 0) {


                var otherSlider = $(e.target).parent().parent().siblings().find(".checked").length;



                if (otherSlider == 0) {
                    initLoadOverlay_mypay(e);
                } else {

                    $('#mipay-option-warning').css({
                        display: 'block'
                    });


                    $("#mipay-option-warning #closeThis").click(function (e) {
                        $(this).parent().parent().css({
                            display: 'none'
                        });
                    });

                }


            } else {
                // else default to adyen
                initLoadOverlay_ml(e);
            }
        });

        //General close popup
        $(".overlayClose_ml").click(function (e) {
            initDisableOverlay_ml(e);
        });

        $(document).keypress(function (e) {
            if (e.keyCode == 27) {
                initDisableOverlay_ml();
            }
        });

        $(window).resize(function () {
            initCenterOverlay_ml();
        });

        if ($('.card-added-confirm').length > 0) {
            var showAlert = $('#card-added-success');

            showAlert.css({
                display: 'block'
            });

            // MyPay Popup if yes turn off other options
            $("#closeThis").click(function (e) {
                $(this).parent().parent().remove();
            });

        }

    };

    var slideSpeed = 50;
    var leftDist = 30.75;

    /*
     * Initialise Slider/Toggers
     */
    var initCheckBoxes = function () {

        var sliders = $(".cb-slider_small");

        sliders.attr('is_active', false);   //to track if the slider was dragged completely and released outside
        sliders.draggable({
            containment: "parent",
            stop: function (event, ui) {
                //trigger a mouse up only if is_active is left at true
                if ($(ui.helper).attr('is_active')) $(ui.helper).mouseup();
            }
        });

        sliders.mousedown(function () {
            //set is active to true so that we can check on drag complete if its still true and take necessary action
            $(this).attr("is_active", true);
        });

        sliders.mouseup(function () {

            var status = $(this).attr("cb-status");

            switch (status) {
                case "0":
                    //its off, slide it by 41px;
                    $(this).animate({left: leftDist}, slideSpeed);
                    //change status to 1
                    $(this).attr("cb-status", "1");
                    $(this).addClass('checked');
                    break;

                case "1":
                    //its 'on', slide it to 0px;
                    $(this).animate({left: "0"}, slideSpeed);
                    //change status to 0
                    $(this).attr("cb-status", "0");
                    $(this).removeClass('checked');

                    break;
            }
            $(this).attr("is_active", false);  //reset
        });
    };

    /*
     * Initialise General Popup
     */
    var initLoadOverlay_ml = function (e) {
        //loads popup only if it is disabled

        var bgOverlay = $("#bgOverlay_ml");

        if (bgOverlay.data("state") == 0) {
            bgOverlay.css({
                "opacity": "0.7"
            });
            bgOverlay.fadeIn("medium");
            $("#overlay_ml").fadeIn("medium");
            bgOverlay.data("state", 1);
        }

        var cbSlider = $(e.target).parent().find(".cb-slider_small");
        var cbSliderStatus = cbSlider.attr("cb-status");

        /* Reset this option */
        $(".overlayClose_ml_no").click(function (e) {
            initDisableOverlay_ml(e);
            cbSlider.one('click', function (e) {
                if (cbSliderStatus == 1) {
                    $(this).animate({left: "0"}, slideSpeed);
                    $(this).attr("cb-status", "0");
                    $(this).removeClass('checked');
                }
            });
            cbSlider.trigger('click');
        });
    };

    /*
     * Initialise MyPay Popup
     */
    var initLoadOverlay_mypay = function (e) {

        //loads popup only if it is disabled
        var bgOverlay = $("#bgOverlay_ml");

        if (bgOverlay.data("state") == 0) {
            bgOverlay.css({
                "opacity": "0.7"
            });
            bgOverlay.fadeIn("medium");
            $("#overlay_ml2").fadeIn("medium");
            bgOverlay.data("state", 1);
        }

        /* Reset this option */
        var cbSlider = $(e.target).parent().find(".cb-slider_small");

        cbSlider.addClass('active');

        $(".overlayClose_ml_no").click(function (e) {

            var notDefault = $(".cb-slider_small:not('.defaultOption')");

            if ($('.defaultOption').length > 0) {
                notDefault.animate({left: "0"}, slideSpeed);
                notDefault.attr("cb-status", "0");
                notDefault.removeClass('checked');
            } else {
                cbSlider.animate({left: "0"}, slideSpeed);
                cbSlider.attr("cb-status", "0");
                cbSlider.removeClass('checked');
            }
            initDisableOverlay_ml(e);
        });

    };

    var initDisableOverlay_ml = function () {

        var bgOverlay = $("#bgOverlay_ml");

        $(".cb-slider_small").removeClass('active');

        if (bgOverlay.data("state") == 1) {
            bgOverlay.fadeOut("medium");
            $("#overlay_ml").fadeOut("medium");
            $("#overlay_ml2").fadeOut("medium");
            bgOverlay.data("state", 0);
        }
    };

    var initCenterOverlay_ml = function () {

        var overlay1 = $("#overlay_ml");
        var overlay2 = $("#overlay_ml2");

        var owinw = $(window).width();
        var owinh = $(window).height();
        var opopw = overlay1.width();
        var opoph = overlay1.height();

        overlay1.css({ "position": "absolute" });

        overlay2.css({ "position": "absolute" });

        //IE6
        $("#bgOverlay_ml").css({ "height": owinh });
    };


    return {
        init: init
    }

})(jQuery);

/**
 * INIT
 */
jQuery(document).ready(function () {
    mylebaraDashboard.init();
});