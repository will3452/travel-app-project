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

$(document).on('click','#blockuser',function(){
    var manager = $(this).attr("data-id");
    var name = $('#'+manager).children('td[data-target=name]').text();
    $(".name_here").text(name);
    $(".bantemp").fadeIn();
    $("#id_get").val(manager);
});
$(document).on('click','#deleteuser',function(){
    var manager = $(this).attr("data-id");
    var name = $('#'+manager).children('td[data-target=name]').text();
    $(".name_here").text(name);
    $(".banperm").fadeIn();
    $("#id_get_2").val(manager);
});
$(document).on('click','#unblockuser',function(){
    var manager = $(this).attr("data-id");
    var name = $('#'+manager).children('td[data-target=name]').text();
    $(".name_here").text(name);
    $(".unbantemp").fadeIn();
    $("#id_get_un").val(manager);
});

$(document).on('click','.close_modal',function(){
    $(".name_here").text("");
    $(".bantemp").fadeOut();
    $(".banperm").fadeOut();
    $("#id_get_cancel").val("");
    $("#id_get").val("");
    $("#id_get_2").val("");
    $(".unbantemp").fadeOut();
    $("#id_get_un").val("");
});
$(document).on('click','#showinfo',function(){
    var id = $(this).attr("data-id");
    window.location.href="view/traveler-data?traveler_id="+id;
});
$(document).on('click','#updateuser',function(){
    var id = $(this).attr("data-id");
    window.location.href="update/update-traveler?traveler_id="+id;
});
 //ban temp
 $("#submitmodal_temp").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading-3").show();
    $('.span_modal').hide();
    $("#bantempbtn").attr("disabled",true);
    $(".close_modal").css({'pointer-events': 'none'});
        $.ajax({
            url  : "process/_traveler.php",
            type : "POST",
            cache:false,
            data :formData,
            contentType : false, // you can also use multipart/form-data replace of false
            processData: false,
            success:function(d){
                if($.trim(d)=='success'){
                    $(".center-loading-3").hide();
                    $('.span_modal').show();
                    $("#bantempbtn").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".name_here").text("");
                    $(".bantemp").fadeOut();
                    $("#id_get").val("");
                    swal("Success!", "", "success", {
                        button: "Close",
                    });
                    setTimeout(function(){
                        location.reload();
                    }, 1500);
                }else{
                    swal("Error!", "Process Failed", "error");
                    $(".center-loading-3").hide();
                    $('.span_modal').show();
                    $("#bantempbtn").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".name_here").text("");
                    $(".bantemp").fadeOut();
                    $("#id_get").val("");
                }
            }
        });
});
   //ban temp
   $("#submitmodal_perm").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading-3").show();
    $('.span_modal').hide();
    $("#banpermbtn").attr("disabled",true);
    $(".close_modal").css({'pointer-events': 'none'});
        $.ajax({
            url  : "process/_manager.php",
            type : "POST",
            cache:false,
            data :formData,
            contentType : false, // you can also use multipart/form-data replace of false
            processData: false,
            success:function(d){
                if($.trim(d)=='success'){
                    $(".center-loading-3").hide();
                    $('.span_modal').show();
                    $("#banpermbtn").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".name_here").text("");
                    $(".banperm").fadeOut();
                    $("#id_get").val("");
                    swal("Success!", "", "success", {
                        button: "Close",
                    });
                    setTimeout(function(){
                        location.reload();
                    }, 1500);
                }else{
                    swal("Error!", "Process Failed", "error");
                    $(".center-loading-3").hide();
                    $('.span_modal').show();
                    $("#banpermbtn").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".name_here").text("");
                    $(".banperm").fadeOut();
                    $("#id_get").val("");
                }
            }
        });
    });

      //ban temp
$("#submitmodal_unban").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading-3").show();
    $('.span_modal').hide();
    $("#unbantempbtn").attr("disabled",true);
    $(".close_modal").css({'pointer-events': 'none'});
        $.ajax({
            url  : "process/_manager.php",
            type : "POST",
            cache:false,
            data :formData,
            contentType : false, // you can also use multipart/form-data replace of false
            processData: false,
            success:function(d){
                if($.trim(d)=='success'){
                    $(".center-loading-3").hide();
                    $('.span_modal').show();
                    $("#unbantempbtn").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".name_here").text("");
                    $(".unbantemp").fadeOut();
                    $("#id_get").val("");
                    swal("Success!", "", "success", {
                        button: "Close",
                    });
                    setTimeout(function(){
                        location.reload();
                    }, 1500);
                }else{
                    swal("Error!", "Process Failed", "error");
                    $(".center-loading-3").hide();
                    $('.span_modal').show();
                    $("#unbantempbtn").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".name_here").text("");
                    $(".unbantemp").fadeOut();
                    $("#id_get").val("");
                }
            }
        });
    });