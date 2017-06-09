



$(".checkboxs").change(function() {
        var data_post = $(this).attr('id').replace("active-","");
    if(this.checked) {
       // console.log($(this).attr('id').replace("active-",""));
        request = $.ajax({
        url: "../content/active-guide.php",
        type: "post",
        data: {'guide-id':''+data_post+'','checked':'true'},
        success: function (result) {
      //      console.log(result);
           
      },
  error: function (request, status, error) {
        //alert(request.responseText);
        //console.log(error);
    }   
});
    }
    else if(!this.checked) {
     //   console.log($(this).attr('id').replace("active-",""));
        request = $.ajax({
        url: "../content/active-guide.php",
        type: "post",
        data: {'guide-id':''+data_post+'','checked':'false'},
        success: function (result) {
      //      console.log(result);
           
      }
      ,
    error: function (request, status, error) {
        //alert(request.responseText);
        //console.log(error);
    }


    });
    }



});