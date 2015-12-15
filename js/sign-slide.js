$(document).ready(function () {
    $element = $('#usefullcontent');
    signINh = 275;
    signUPh = 295;
    $("#sign-up-btn").click(function () {
        $("#sign-in").animate({
            height: 0
        }, 400);
        $("#sign-up").animate({
            height: signUPh
        }, 400);
    });
    $("#sign-in-btn").click(function () {
        $("#sign-up").animate({
            height: 0
        }, 400);
        $("#sign-in").animate({
            height: signINh
        }, 400);
    });
});