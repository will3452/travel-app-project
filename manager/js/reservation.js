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
                    var booksearch = $("#booksearch").val();

                    $("#search").attr('disabled', true);
                    if(booksearch==''){
                        if(search==''){
                            window.location.href="reservation";
                        }else{
                            window.location.href="reservation?search="+search;
                        }
                    }else if(booksearch=='book2'){
                        if(search==''){
                            window.location.href="reservation?tab=approved";
                        }else{
                            window.location.href="reservation?tab=approved&search="+search;
                        }
                    }else if(booksearch=='book3'){
                        if(search==''){
                            window.location.href="reservation?tab=history";
                        }else{
                            window.location.href="reservation?tab=history&search="+search;
                        }
                    }
                    else{
                        if(search==''){
                            window.location.href="reservation";
                        }else{
                            window.location.href="reservation?search="+search;
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
            var booksearch = $("#booksearch").val();
            if(booksearch==''){
                window.location.href="reservation";
            }else if(booksearch=='book2'){
                window.location.href="reservation?tab=approved";
            }else if(booksearch=='book3'){
                window.location.href="reservation?tab=history";
            }
            else{
                window.location.href="reservation";
            }
           
        });
        $(document).on('click','.clearable__clear',function(){
            $(".clearable__clear").hide();
            $("#search").val("");
        });

        $(document).on('click', "#showinfo", function(){
            var showinfo = $(this).attr("data-id");
            window.location.href="view/reservation-data?rs_id="+showinfo;
        });
         $(document).on('click', "#update", function(){
            var update = $(this).attr("data-id");
            window.location.href="update/update-reservation?rs_id="+update;
        });
        $(document).on('click','#accept',function(){
            var id = $(this).attr("data-id");
            var name = $('#'+id).children('td[data-target=name]').text();
            $(".name_here").text(name);
            $(".acceptreservation").fadeIn();
            $("#res_id").val(id);
        });
        $(document).on('click','#done',function(){
            var id = $(this).attr("data-id");
            var name = $('#'+id).children('td[data-target=name]').text();
            $(".name_here").text(name);
            $(".donereservation").fadeIn();
            $("#res_id_done").val(id);
        });
        $(document).on('click','#delete',function(){
            var id = $(this).attr("data-id");
            var name = $('#'+id).children('td[data-target=name]').text();
            $(".name_here").text(name);
            $(".deletereservation").fadeIn();
            $("#res_id_d").val(id);
        });
        $(document).on('click','.close_modal',function(){
            $(".name_here").text("");
            $(".deletereservation").fadeOut();
            $("#res_id_d").val("");
            $(".acceptreservation").fadeOut();
            $("#res_id").val("");
            $(".donereservation").fadeOut();
            $("#res_id_done").val("");
        });
        $("#submitmodal_acc_res").on("submit", function(e){
            e.preventDefault(e);
            var formData = new FormData(this);
            $(".center-loading-3").show();
            $('.span_modal').hide();
            $("#resacc_btn").attr("disabled",true);
            $(".close_modal").css({'pointer-events': 'none'});
                $.ajax({
                    url  : "process/_reservation.php",
                    type : "POST",
                    cache:false,
                    data :formData,
                    contentType : false, // you can also use multipart/form-data replace of false
                    processData: false,
                    success:function(d){
                        if($.trim(d)=='success'){
                            $(".center-loading-3").hide();
                            $('.span_modal').show();
                            $("#resacc_btn").attr("disabled",false);
                            $(".close_modal").css({'pointer-events': 'auto'});
                            $(".name_here").text("");
                            $(".acceptreservation").fadeOut();
                            $("#res_id").val("");
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
                            $("#resacc_btn").attr("disabled",false);
                            $(".close_modal").css({'pointer-events': 'auto'});
                            $(".name_here").text("");
                            $(".acceptreservation").fadeOut();
                            $("#res_id").val("");
                        }
                    }
                });
        });
        $("#submitmodal_acc_res_de").on("submit", function(e){
            e.preventDefault(e);
            var formData = new FormData(this);
            $(".center-loading-3").show();
            $('.span_modal').hide();
            $("#resacc_btn_d").attr("disabled",true);
            $(".close_modal").css({'pointer-events': 'none'});
                $.ajax({
                    url  : "process/_reservation.php",
                    type : "POST",
                    cache:false,
                    data :formData,
                    contentType : false, // you can also use multipart/form-data replace of false
                    processData: false,
                    success:function(d){
                        if($.trim(d)=='success'){
                            $(".center-loading-3").hide();
                            $('.span_modal').show();
                            $("#resacc_btn_d").attr("disabled",false);
                            $(".close_modal").css({'pointer-events': 'auto'});
                            $(".name_here").text("");
                            $(".deletereservation").fadeOut();
                            $("#res_id_d").val("");
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
                            $("#resacc_btn_d").attr("disabled",false);
                            $(".close_modal").css({'pointer-events': 'auto'});
                            $(".name_here").text("");
                            $(".deletereservation").fadeOut();
                            $("#res_id_d").val("");
                        }
                    }
                });
        });
        $("#submitmodal_acc_res_done").on("submit", function(e){
            e.preventDefault(e);
            var formData = new FormData(this);
            $(".center-loading-3").show();
            $('.span_modal').hide();
            $("#resacc_btn").attr("disabled",true);
            $(".close_modal").css({'pointer-events': 'none'});
                $.ajax({
                    url  : "process/_reservation.php",
                    type : "POST",
                    cache:false,
                    data :formData,
                    contentType : false, // you can also use multipart/form-data replace of false
                    processData: false,
                    success:function(d){
                        if($.trim(d)=='success'){
                            $(".center-loading-3").hide();
                            $('.span_modal').show();
                            $("#resacc_btn_done").attr("disabled",false);
                            $(".close_modal").css({'pointer-events': 'auto'});
                            $(".name_here").text("");
                            $(".donereservation").fadeOut();
                            $("#res_id_done").val("");
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
                            $("#resacc_btn_done").attr("disabled",false);
                            $(".close_modal").css({'pointer-events': 'auto'});
                            $(".name_here").text("");
                            $(".donereservation").fadeOut();
                            $("#res_id_done").val("");
                        }
                    }
                });
        });