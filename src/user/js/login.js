$("#submitForm").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading").show();
    $('#span').hide();
    $("#submit").attr("disabled",true);
    $.ajax({
        url  : "process/login-user.php",
        type : "POST",
        cache:false,
        data :formData,
        contentType : false, // you can also use multipart/form-data replace of false
        processData: false,
        success:function(d){
            if($.trim(d)==='invalidtoken'){
                swal("Error!", "Invalid Token", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }else if($.trim(d)==='EMPT'){
                swal("Error!", "Select Fields", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }else if($.trim(d)==='USERINVALID'){
                swal("Error!", "Invalid Account", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
            else if($.trim(d)==='INVALIDACC'){
                swal("Error!", "Credentials Not Valid", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
            else if($.trim(d)==='administrator'){
                window.location.href="../administrator/dashboard";
            }
            else if($.trim(d)==='traveller'){
                window.location.href="../traveller/dashboard";
            }
            else if($.trim(d)==='manager'){
                window.location.href="../manager/dashboard";
            }
            else{
                swal("Error!", d, "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
        }
    });
});