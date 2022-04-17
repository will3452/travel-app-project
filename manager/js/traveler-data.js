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
    var traveler_id = $("#traveler_id").val();
    $('#search').keyup(function(){
        clearTimeout(timertable);
        if ($('#search').val) {
            timertable = setTimeout(function(){
                //do stuff here e.g ajax call etc....
                var search = $("#search").val();
                $("#search").attr('disabled', true);
                if(search==''){
                    window.location.href="traveler-data?traveler_id="+traveler_id+"#tabs";
                }else{
                    window.location.href="traveler-data?traveler_id="+traveler_id+"&search="+search+"#tabs";
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
        window.location.href="traveler-data?traveler_id="+traveler_id+"#tabs";
    });
    $(document).on('click','.clearable__clear',function(){
        $(".clearable__clear").hide();
        $("#search").val("");
    });
    $(document).on('click','#showinfo',function(){
        var id = $(this).attr("data-id");
        window.location.href="reservation-data?rs_id="+id;
    });