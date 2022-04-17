$(document).on('click','#addbtnuser',function(){
    var notif_id = $(this).attr("data-id");
    $(".deletenotif").fadeIn();
    $("#notif_ids").val(notif_id);
});
$(document).on('click','.close_modal',function(){
    $(".deletenotif").fadeOut();
    $("#notif_ids").val('');
});
$("#submit_delete_notif_admin").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading-3").show();
    $('.span_modal').hide();
    $("#delete_btn_n").attr("disabled",true);
    $(".close_modal").css({'pointer-events': 'none'});
        $.ajax({
            url  : "../process/_notification.php",
            type : "POST",
            cache:false,
            data :formData,
            contentType : false, // you can also use multipart/form-data replace of false
            processData: false,
            success:function(d){
                if($.trim(d)=='success'){
                    $(".center-loading-3").hide();
                    $('.span_modal').show();
                    $("#delete_btn_n").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".deletenotif").fadeOut();
                    $("#notif_ids").val('');
                    swal("Success!", "", "success", {
                        button: "Close",
                    });
                    setTimeout(function(){
                        location.reload();
                    }, 1500);
                }else{
                    swal("Error!", d, "error");
                    $("#notif_ids").val('');
                    $(".center-loading-3").hide();
                    $('.span_modal').show();
                    $("#delete_btn_n").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".deletenotif").fadeOut();
                }
            }
        });
});