$("#submitForm_profile").on("submit", function(e){

    e.preventDefault(e);

    var formData = new FormData(this);

    $(".center-loading-3").show();

    $('#spansubmit2').hide();

    $("#buttonss").attr("disabled",true);

        $.ajax({

            url  : "process/_profile.php",

            type : "POST",

            cache:false,

            data :formData,

            contentType : false, // you can also use multipart/form-data replace of false

            processData: false,

            success:function(d){

                if($.trim(d)=='success'){

                    $(".center-loading-3").hide();

                    $('#spansubmit2').show();

                    $("#buttonss").attr("disabled",false);

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

                    $("#buttonss").attr("disabled",false);
                    
                }
            }
        });
});