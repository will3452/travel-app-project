var timertable;
var timeouttable = 1500;
$('#search_2').keyup(function(){
    clearTimeout(timertable);
    if ($('#search_2').val) {
        timertable = setTimeout(function(){
            //do stuff here e.g ajax call etc....
            var search_2 = $("#search_2").val();
            var categoryval = $("#categoryval").val();
            $("#search_2").attr('disabled', true);

            if(categoryval==''){
                if(search_2==''){
                    window.location.href="host-list";
                }else{
                    window.location.href="?search="+search_2;
                }
            }else{
                if(search_2==''){
                    window.location.href="?category="+categoryval;
                }
                else{
                    window.location.href="?category="+categoryval+"&search="+search_2;
                }
                
            }
           
        }, timeouttable);
    }
});
$("#search_2").keyup(function(e){
    var search_2 = $("#search_2").val();
    if(search_2==''){
        $(".clearable__clear").hide();
    }else{
        $(".clearable__clear").show();
    }
});
$(document).on('click','.clearable__clear_search',function(){
    var categoryval = $("#categoryval").val();
    if(categoryval==''){
        window.location.href="host-list";
    }else{
        window.location.href="host-list?category="+categoryval;
    }
});
$(document).on('click','.clearable__clear',function(){
    $(".clearable__clear").hide();
    $("#search").val("");
});
$(document).on('click', "#showinfo", function(){
    var showinfo = $(this).attr("data-id");
    window.location.href="view/host-list-data?host_id="+showinfo;
});