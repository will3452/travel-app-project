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
                window.location.href="subscription";
            }else{
                window.location.href="subscription?search="+search;
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
    window.location.href="subscription";
});
$(document).on('click','.clearable__clear',function(){
    $(".clearable__clear").hide();
    $("#search").val("");
});

$(document).on('click','#cance_subs',function(){
    var cance_subs = $(this).attr("data-id");
    var name = $('#'+cance_subs).children('td[data-target=name]').text();
    $(".deletesubs").fadeIn();
    $("#id_get_subs_d").val(cance_subs);
});
$(document).on('click','.close_modal',function(){
    $(".deletesubs").fadeOut();
    $("#id_get_subs_d").val("");
});
$("#submitmodal_delete_sub").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading-3").show();
    $('.span_modal').hide();
    $("#deletemanager_subs").attr("disabled",true);
    $(".close_modal").css({'pointer-events': 'none'});
        $.ajax({
            url  : "process/_payment-account.php",
            type : "POST",
            cache:false,
            data :formData,
            contentType : false, // you can also use multipart/form-data replace of false
            processData: false,
            success:function(d){
                if($.trim(d)=='success'){
                    $(".center-loading-3").hide();
                    $('.span_modal').show();
                    $("#deletemanager_subs").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".deletesubs").fadeOut();
                    $("#id_get_subs_d").val("");
                    swal("Success!", "", "success", {
                        button: "Close",
                    });
                    setTimeout(function(){
                        location.reload();
                    }, 1500);
                }else{
                    swal("Error!", d, "error");
                    $(".center-loading-3").hide();
                    $('.span_modal').show();
                    $("#deletemanager_subs").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".deletesubs").fadeOut();
                    $("#id_get_subs_d").val("");
                }
            }
        });
    });