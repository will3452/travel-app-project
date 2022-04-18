window.addEventListener("load", function(){
    $(".loadingss").fadeOut(1000);
    setTimeout(function(){
    $("#emptyss").show();
    $(".hideafter").show();
    $(".tablenew").show();
    $(".bottomtable").show();
    }, 1000);
}); 

var timertable;
var timeouttable = 1500;
$('#search').keyup(function(){
    clearTimeout(timertable);
    if ($('#search').val) {
        timertable = setTimeout(function(){
            //do stuff here e.g ajax call etc....
            var search = $("#search").val();
            $("#search").attr('disabled', true);
            if(search==''){
                window.location.href="traveler";
            }else{
                window.location.href="traveler?search="+search;
            }
        }, timeouttable);
    }
});
$("#search").keyup(function(e){
    var search = $("#search").val();
    if(search==''){
        $(".clearable__clear").hide();
    }else{
        $(".clearable__clear").show();
    }
});
$(document).on('click','.clearable__clear_search',function(){
    window.location.href="traveler";
});
$(document).on('click','.clearable__clear',function(){
    $(".clearable__clear").hide();
    $("#search").val("");
});
$(document).on('click','#showinfo',function(){
    var id = $(this).attr("data-id");
    window.location.href="view/traveler-data?traveler_id="+id;
});
$(document).on('click','#message',function(){
    var id = $(this).attr("data-id");
    window.location.href="inquire/message?traveler_id="+id;
});