AOS.init();
$(window).scroll(function () {
    $("nav").toggleClass(["scrolled", "shadow"], $(this).scrollTop() > 50);
});
// Preloader Loading
$(window).on("load", function () {
    $("#preloader").delay(1000).fadeOut("slow");
});

// Counting Up Number Animation
$(".num").counterUp({
    delay: 20,
    time: 1000,
});
// Scroll to top
{
    // Scroll to top button appear
    $(document).on("scroll", function () {
        var scrollDistance = $(this).scrollTop();
        if (scrollDistance > 100) {
            $(".scroll-to-top").fadeIn();
        } else {
            $(".scroll-to-top").fadeOut();
        }
    });

    // Smooth scrolling using jQuery easing
    $(document).on("click", "a.scroll-to-top", function (e) {
        var $anchor = $(this);
        $("html, body")
            .stop()
            .animate(
                {
                    scrollTop: $($anchor.attr("href")).offset().top,
                },
                1000,
                "easeInOutExpo"
            );
        e.preventDefault();
    });
}
// Set Current Years
var d = new Date();
var n = d.getFullYear();
document.getElementById("current_year").innerHTML = n;
