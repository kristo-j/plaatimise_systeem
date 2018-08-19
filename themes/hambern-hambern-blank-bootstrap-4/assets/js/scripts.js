$(document).ready(function () {
    new WOW().init();
    plyr.setup();

    $(document).ready(function(){
        $('#workdone').carousel({
            interval: 4000
        })
    });

    $(function () {
        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });
});