$(document).on('click','#notif_btn_open',function(){

    $(".loading-content-notification").show();
    $(".dropdown-content").hide();
    $("#fetchglobalsearch").hide();
    $("#searchglobal").val("");
    $(".noresult-content").hide();
    $(".loading-content").hide();

    $(".text-field-search").hide();
    $(".loading-content-moba").hide();
    $(".dropdown-content-moba").hide();
    $("#fetchglobalsearch-moba").hide();
    $("#searchglobal-moba").val("");
    $(".noresult-content-moba").hide();

    $(".loading-content-message").hide();
    $(".dropdown-content-message").hide();
     $("#mess_btn_open").css({
            'pointer-events':'auto',
    });
    $(".noresult-content-mess").hide();
    $("#fetchmessage").val("");

    var notification_load_token = $("#notification_load_token").val();
    setTimeout(function(){
        if(notification_load_token=='' || notification_load_token.trim()==''){
            $(".loading-content-notification").hide();
        }
        else{
            $.ajax({
                url:'process/_notification.php',
                method:'post',
                datatype:'text',
                data:{
                    notification_load_token:notification_load_token
                },success:function(d){
                    if($.trim(d) ===''){
                        $(".loading-content-notification").hide();
                        $(".noresult-content-notif").show();
                    }else{
                        $(".loading-content-notification").hide();
                        $(".dropdown-content-notification").show();
                        $("#notif_btn_open").css({
                            'pointer-events':'none',
                        });
                        $("#fetchnotification").html(d);
                        $(".noresult-content-notif").hide();
                    }
                   
                }
            }); 
        }
    }, 1500);
});


$(".container-fluid").click(function(){
    $(".loading-content-notification").hide();
    $(".dropdown-content-notification").hide();
    $("#notif_btn_open").css({
        'pointer-events':'auto',
    });
    $(".noresult-content-notif").hide();
    $("#fetchnotification").val("");
});
$(".navbar-nav").click(function(){
    $(".loading-content-notification").hide();
    $(".dropdown-content-notification").hide();
    $("#notif_btn_open").css({
        'pointer-events':'auto',
    });
    $(".noresult-content-notif").hide();
    $("#fetchnotification").val("");
});
$("#layoutSidenav").click(function(){
    $(".loading-content-notification").hide();
    $(".dropdown-content-notification").hide();
    $("#notif_btn_open").css({
        'pointer-events':'auto',
    });
    $(".noresult-content-notif").hide();
    $("#fetchnotification").val("");
});
$(".navbar-brand").click(function(){
    $(".loading-content-notification").hide();
    $(".dropdown-content-notification").hide();
    $("#notif_btn_open").css({
        'pointer-events':'auto',
    });
    $(".noresult-content-notif").hide();
    $("#fetchnotification").val("");
});
$("#searchglobal").click(function(){
    $(".loading-content-notification").hide();
    $(".dropdown-content-notification").hide();
    $("#notif_btn_open").css({
        'pointer-events':'auto',
    });
    $(".noresult-content-notif").hide();
    $("#fetchnotification").val("");
});
$("#iconsearch").click(function(){
    $(".loading-content-notification").hide();
    $(".dropdown-content-notification").hide();
    $("#notif_btn_open").css({
        'pointer-events':'auto',
    });
    $(".noresult-content-notif").hide();
    $("#fetchnotification").val("");
});
$("#searchglobal-moba").click(function(){
    $(".loading-content-notification").hide();
    $(".dropdown-content-notification").hide();
    $("#notif_btn_open").css({
        'pointer-events':'auto',
    });
    $(".noresult-content-notif").hide();
    $("#fetchnotification").val("");
});

$(".navbar-burger-size").click(function(){
    $(".loading-content-notification").hide();
    $(".dropdown-content-notification").hide();
    $("#notif_btn_open").css({
        'pointer-events':'auto',
    });
    $(".noresult-content-notif").hide();
    $("#fetchnotification").val("");
});



$(document).on('click','#deleteallnotif',function(){
    $(".loading-content-notification").hide();
    $(".dropdown-content-notification").hide();
    $("#notif_btn_open").css({
        'pointer-events':'auto',
    });
    $(".noresult-content-notif").hide();
    $("#fetchnotification").val("");
    $(".deleteallnotif").fadeIn();
});
$(document).on('click','.close_modal',function(){
    $(".deleteallnotif").fadeOut();
});
$("#submitdeleteallnotif").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading-3").show();
    $('.span_modal').hide();
    $("#delete_btn_n").attr("disabled",true);
    $(".close_modal").css({'pointer-events': 'none'});
        $.ajax({
            url  : "process/_notification.php",
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
                    $(".deleteallnotif").fadeOut();
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
                    $("#delete_btn_n").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".deleteallnotif").fadeOut();
                }
            }
        });
});