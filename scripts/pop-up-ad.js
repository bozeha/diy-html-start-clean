$("document").ready(function () {

    var second_pop_up = (typeof global_settings !== 'undefined')?global_settings.second_pop_up:false;
    var first_pop_up = (typeof global_settings !== 'undefined')?global_settings.first_pop_up:false;
    if (typeof global_settings !== 'undefined' && global_settings.device_type == "mobile") {
        global_settings.block_all_popups = true;
    }
    var block_all_popups = (typeof global_settings !== 'undefined')?global_settings.block_all_popups:false;

    if (first_pop_up && !block_all_popups) {
        setTimeout(function () {
            runMyPopup();
        }, 5000);
    }
    if(second_pop_up && !block_all_popups) {
        setTimeout(function () {
            $('#pop_up_ad').css('display') == "none" ? runMyPopup() : '';
        }, 90000)
    }
})


function runMyPopup(){
    $('#close_pop').css('display', 'none');
        var php_file = "<?php include 'ads/pop-up.php'; ?>";
        $('body').append("<div id='pop_up_ad'><div id='close_pop'></div><div id='pop_cont'></div></div>")
        $('#pop_cont').load('ads/pop-up.php');


        $("#close_pop").click(function () {
            switchPopUp(false);
        });

        switchPopUp(true);
        setTimeout(function () {

            $('#close_pop').css('display', 'block');
            $("#pop_cont").css('background-color', 'rgba(0,0,0,0.5)');
        }, 4000);



}


function switchPopUp(bool) {
    (bool == true) ? $('#pop_up_ad').css('display', 'block') : $('#pop_up_ad').css('display', 'none');


}

