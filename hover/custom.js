// =============================================================
/* Animation */
// =============================================================
$(window).scroll(function() {
    $(".animated-area").each(function() {
        if ($(window).height() + $(window).scrollTop() - $(this).offset().top > 0) {
            $(this).trigger("animate-it");
        }
    });
});
$(".animated-area").on("animate-it", function() {
    var cf = $(this);
    cf.find(".animated").each(function() {
        $(this).css("-webkit-animation-duration", "0.9s");
        $(this).css("-moz-animation-duration", "0.9s");
        $(this).css("-ms-animation-duration", "0.9s");
        $(this).css("animation-duration", "0.9s");
        $(this).css("-webkit-animation-delay", $(this).attr("data-animation-delay"));
        $(this).css("-moz-animation-delay", $(this).attr("data-animation-delay"));
        $(this).css("-ms-animation-delay", $(this).attr("data-animation-delay"));
        $(this).css("animation-delay", $(this).attr("data-animation-delay"));
        $(this).addClass($(this).attr("data-animation"));
    });
});
// =============================================================
/* Header Title */
// =============================================================
var windowWidth = $(window).width();
var windowHeight = $(window).height();
$('.header').css({
    'width': windowWidth,
    'height': windowHeight
});
$('.header h1').css({
    'paddingTop': windowHeight / 2.2 + "px"
});