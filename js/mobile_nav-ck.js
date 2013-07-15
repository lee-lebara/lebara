var ww = document.body.clientWidth;
$(document).ready(function () {
    $(".nav li a").each(function () {
        $(this).next().length > 0 && $(this).addClass("parent")
    });
    $(".toggleMenu").click(function (e) {
        e.preventDefault();
        $(this).toggleClass("active");
        $(".nav").slideToggle()
    });
    adjustMenu()
});
$(window).bind("resize orientationchange", function () {
    ww = document.body.clientWidth;
    adjustMenu()
});
var adjustMenu = function () {
    if (ww < 580) {
        $(".toggleMenu").css("display", "inline-block");
        $(".toggleMenu").hasClass("active") ? $(".nav").show() : $(".nav").hide();
        $(".nav li").unbind("mouseenter mouseleave");
        $(".nav li a.parent").unbind("click").bind("click", function (e) {
            e.preventDefault();
            $(this).parent("li").toggleClass("hover")
        })
    } else if (ww >= 580) {
        $(".toggleMenu").css("display", "none");
        $(".nav").show();
        $(".nav li").removeClass("hover");
        $(".nav li a").unbind("click");
        $(".nav li").unbind("mouseenter mouseleave").bind("mouseenter mouseleave", function () {
            $(this).toggleClass("hover")
        })
    }
};
$(document).ready(function () {
    $(".toggleMenu").click(function () {
        $("main_navigation").slideToggle("slow")
    })
});