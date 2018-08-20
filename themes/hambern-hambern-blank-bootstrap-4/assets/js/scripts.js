$(document).ready(function () {
    new WOW().init();
    plyr.setup();

    $('#workdone').carousel({
        interval: 3000,
        pause: false,

    });

    $(".images-grid-work").imagesGrid({
        margin: 10
    });

});