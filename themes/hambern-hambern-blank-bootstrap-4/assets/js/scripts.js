$(document).ready(function () {

    $(".loader").hide();

    new WOW().init();
    plyr.setup();


    $('#workdone').carousel({
        interval: 5000,
        pause: false,

    });

    $(".images-grid-work").imagesGrid({
        margin: 10
    });

    $('.carousel .carousel-item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));

        for (var i=0;i<2;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
        }
    });

    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });

    $("#scroll-quote-btn").click(function() {
        $('html, body').animate({
            scrollTop: $("#home-footer").offset().top
        }, 1500);
    });

    $('.quotation-button').on('click', function() {

    });

});