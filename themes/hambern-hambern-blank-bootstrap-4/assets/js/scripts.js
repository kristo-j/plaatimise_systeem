$(document).ready(function () {
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

});