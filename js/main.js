

// Smooth Scroll
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $($.attr(this, 'href')).offset().top
    }, 1000);
});
// Global Variable
var baseDomain = "https://git a";
var host = window.location.protocol + "//" + window.location.host + "/2018/";





$(window).on('load', function() { // makes sure the whole site is loaded
    $.html5Loader({
        filesToLoad:        'load.json', // this could be a JSON or simply a javascript object
        onBeforeLoad:       function () {},
        onComplete:         function () {
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(350).css({'overflow':'visible'});
        },
        onElementLoaded:    function ( obj, elm) { },
        onUpdate:           function ( percentage ) {}
    });
})