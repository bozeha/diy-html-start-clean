


$("document").ready(function(){


setTimeout(function(){
var php_file = "<?php include 'ads/pop-up.php'; ?>";
$('body').append("<div id='pop_up_ad'><div id='close_pop'></div><div id='pop_cont'></div></div>")
$("#close_pop").click(function() {
switchPopUp(false);
});


$('#pop_cont').load('ads/pop-up.php');
  switchPopUp(true);
}, 5000);

})


function switchPopUp(bool)
{
    (bool == true)?$('#pop_up_ad').css('display','block'):$('#pop_up_ad').css('display','none');

}