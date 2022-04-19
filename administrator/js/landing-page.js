$("#submitdsystemabout").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading-2").show();
    $('#spansubmit').hide();
        $.ajax({
            url  : "process/_landinge_page.php",
            type : "POST",
            cache:false,
            data :formData,
            contentType : false, // you can also use multipart/form-data replace of false
            processData: false,
            success:function(d){
                if($.trim(d)=='success'){
                    $(".center-loading-2").hide();
                    $('#spansubmit').show();
                    swal("Success!", "", "success", {
                        button: "Close",
                    });
                    setTimeout(function(){
                        location.reload();
                    }, 1500);
                }else{
                    swal("Error!", d, "error");
                    $(".center-loading-2").hide();
                    $('#spansubmit').show();
                }
            }
        });
    });

    $("#submitfooter").on("submit", function(e){
        e.preventDefault(e);
        var formData = new FormData(this);
        $(".center-loading-3").show();
        $('#spansubmit2').hide();
            $.ajax({
                url  : "process/_landinge_page.php",
                type : "POST",
                cache:false,
                data :formData,
                contentType : false, // you can also use multipart/form-data replace of false
                processData: false,
                success:function(d){
                    if($.trim(d)=='success'){
                        $(".center-loading-3").hide();
                        $('#spansubmit2').show();
                        swal("Success!", "", "success", {
                            button: "Close",
                        });
                        setTimeout(function(){
                            location.reload();
                        }, 1500);
                    }else{
                        swal("Error!", d, "error");
                        $(".center-loading-3").hide();
                        $('#spansubmit2').show();
                    }
                }
            });
        });