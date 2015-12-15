$(document).ready(function () {
    $(".menu").hide();
    $(".accesspoint").click(function () {
        $(".menu").toggle("fast", function () {

        });

        $("#slider").slider({
            range: "min",
            animate: true,
            value: 1,
            min: 0,
            max: 255,
            step: 1,
            slide: function (event, ui) {
                update(1, ui.value); //changed
            }
        });
    });
    $("#slider").slider({

        stop: function (event, ui) {
            $.ajax({
                type: "GET", //Метод отправки
                url: "setdata.php", //путь до php фаила отправителя
                data: $("#sendData").serialize(),
                success: function () {
                    //код в этом блоке выполняется при успешной отправке сообщения
                }
            });
        }
    });
    //Added, set initial value.
    $("#amount").val(0);

    $("#amount-label").text(0);


    update();
});
$(document).ready(function () {
    $("input[name='data']").change(function () {
        $.ajax({
            type: "GET", //Метод отправки
            url: "setdata.php", //путь до php фаила отправителя
            data: $("#OnOffMode").serialize(),
            success: function () {
                //код в этом блоке выполняется при успешной отправке сообщения

            }
        });

    });
});
//changed. now with parameter
function update(slider, val) {
    //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
    var $amount = slider == 1 ? val : $("#amount").val();
    /* commented
    $amount = $( "#slider" ).slider( "value" );
    $duration = $( "#slider2" ).slider( "value" );
     */

    $("#amount").val($amount);
    $("#amount-label").text($amount);
    $('#slider a').html('<label><span class="counter">' + $amount + '</span>');
}