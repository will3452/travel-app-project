var timertable;
var timeouttable = 1500;
$('#search_2').keyup(function(){
    clearTimeout(timertable);
    if ($('#search_2').val) {
        timertable = setTimeout(function(){
            //do stuff here e.g ajax call etc....
            var search_2 = $("#search_2").val();
            var host_id = $("#host_id").val();
            $("#search_2").attr('disabled', true);

           
                if(search_2==''){
                    window.location.href="?host_id="+host_id+"#tabs";
                }
                else{
                    window.location.href="?host_id="+host_id+"&search="+search_2+"#tabs";
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
    var host_id = $("#host_id").val();
    window.location.href="?host_id="+host_id+"#tabs";
});
$(document).on('click','.clearable__clear',function(){
    $(".clearable__clear").hide();
    $("#search").val("");
});
$(document).on('click', "#showinfo", function(){
    var showinfo = $(this).attr("data-id");
    var host_id = $("#host_id").val();
    window.location.href="service-data?host_view="+host_id+"&service_id="+showinfo;;
   
});
