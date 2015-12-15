$(document).ready(function () {
    $element = $('#usefullcontent');
    h = $element.height();
    $("#onoffswitch").change(function () {
        if (this.checked) {
            $("#usefullcontent").animate({
                height: h
            }, 400);
        } else {
            $("#usefullcontent").animate({
                height: "0"
            }, 400);
        }
    });
});