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
                    var usersearch = $("#usersearch").val();

                    $("#search").attr('disabled', true);
                    if(usersearch==''){
                        if(search==''){
                            window.location.href="subscription";
                        }else{
                            window.location.href="subscription?search="+search;
                        }
                    }else if(usersearch=='searchads'){
                        if(search==''){
                            window.location.href="subscription?tab=ads_sub";
                        }else{
                            window.location.href="subscription?tab=ads_sub&search="+search;
                        }
                    }
                    else{
                        if(search==''){
                            window.location.href="subscription";
                        }else{
                            window.location.href="subscription?search="+search;
                        }
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
            var usersearch = $("#usersearch").val();
            if(usersearch==''){
                window.location.href="subscription";
            }else if(usersearch=='searchads'){
                window.location.href="subscription?tab=ads_sub";
            }
            else{
                window.location.href="subscription";
            }
           
        });
        $(document).on('click','.clearable__clear',function(){
            $(".clearable__clear").hide();
            $("#search").val("");
        });
        $(document).on('click','#showinfo',function(){
            var id = $(this).attr("data-id");
            window.location.href="view/advertisement-data?ads_id="+id;
        });

        
$(document).on('click','#accept',function(){
    var ads = $(this).attr("data-id");
    var name = $('#'+ads).children('td[data-target=name]').text();
    $(".name_here").text(name);
    $(".acceptadssubs").fadeIn();
    $("#adssub_id").val(ads);
});
$(document).on('click','#done',function(){
    var ads = $(this).attr("data-id");
    var name = $('#'+ads).children('td[data-target=name]').text();
    $(".name_here").text(name);
    $(".doneadssubs").fadeIn();
    $("#adssub_iddone").val(ads);
});
$(document).on('click','#delete',function(){
    var ads = $(this).attr("data-id");
    var name = $('#'+ads).children('td[data-target=name]').text();
    $(".name_here").text(name);
    $(".deleteadssubs").fadeIn();
    $("#adssub_iddelete").val(ads);
});
$(document).on('click','.close_modal',function(){
    $(".name_here").text("");
    $(".acceptadssubs").fadeOut();
    $("#adssub_id").val("");
    $(".doneadssubs").fadeOut();
    $("#adssub_iddone").val("");
    $(".deleteadssubs").fadeOut();
    $("#adssub_iddelete").val("");
});

$("#submitmodal_ads").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading-3").show();
    $('.span_modal').hide();
    $("#acceptadssubsbtn").attr("disabled",true);
    $(".close_modal").css({'pointer-events': 'none'});
        $.ajax({
            url  : "process/_subscription.php",
            type : "POST",
            cache:false,
            data :formData,
            contentType : false, // you can also use multipart/form-data replace of false
            processData: false,
            success:function(d){
                if($.trim(d)=='success'){
                    $(".center-loading-3").hide();
                    $('.span_modal').show();
                    $("#acceptadssubsbtn").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".name_here").text("");
                    $(".acceptadssubs").fadeOut();
                    $("#adssub_id").val("");
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
                    $("#acceptadssubsbtn").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".name_here").text("");
                    $(".acceptadssubs").fadeOut();
                    $("#adssub_id").val("");
                }
            }
        });
    });

    $("#submitmodal_ads_done").on("submit", function(e){
        e.preventDefault(e);
        var formData = new FormData(this);
        $(".center-loading-3").show();
        $('.span_modal').hide();
        $("#doneadssubsbtn").attr("disabled",true);
        $(".close_modal").css({'pointer-events': 'none'});
            $.ajax({
                url  : "process/_subscription.php",
                type : "POST",
                cache:false,
                data :formData,
                contentType : false, // you can also use multipart/form-data replace of false
                processData: false,
                success:function(d){
                    if($.trim(d)=='success'){
                        $(".center-loading-3").hide();
                        $('.span_modal').show();
                        $("#doneadssubsbtn").attr("disabled",false);
                        $(".close_modal").css({'pointer-events': 'auto'});
                        $(".name_here").text("");
                        $(".doneadssubs").fadeOut();
                        $("#adssub_iddone").val("");
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
                        $("#doneadssubsbtn").attr("disabled",false);
                        $(".close_modal").css({'pointer-events': 'auto'});
                        $(".name_here").text("");
                        $(".doneadssubs").fadeOut();
                        $("#adssub_iddone").val("");
                    }
                }
            });
        });
        
        
            $("#submitmodal_ads_delete").on("submit", function(e){
                e.preventDefault(e);
                var formData = new FormData(this);
                $(".center-loading-3").show();
                $('.span_modal').hide();
                $("#deleteadssubsbtn").attr("disabled",true);
                $(".close_modal").css({'pointer-events': 'none'});
                    $.ajax({
                        url  : "process/_subscription.php",
                        type : "POST",
                        cache:false,
                        data :formData,
                        contentType : false, // you can also use multipart/form-data replace of false
                        processData: false,
                        success:function(d){
                            if($.trim(d)=='success'){
                                $(".center-loading-3").hide();
                                $('.span_modal').show();
                                $("#deleteadssubsbtn").attr("disabled",false);
                                $(".close_modal").css({'pointer-events': 'auto'});
                                $(".name_here").text("");
                                $(".deleteadssubs").fadeOut();
                                $("#adssub_iddone").val("");
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
                                $("#deleteadssubsbtn").attr("disabled",false);
                                $(".close_modal").css({'pointer-events': 'auto'});
                                $(".name_here").text("");
                                $(".deleteadssubs").fadeOut();
                                $("#adssub_iddone").val("");
                            }
                        }
                    });
                });
            
        
