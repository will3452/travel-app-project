$("#submitForm").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading").show();
    $('#span').hide();
    $("#submit").attr("disabled",true);
    $.ajax({
        url  : "process/create-users.php",
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
            }
            else if($.trim(d)==='EMPPROFILE' || $.trim(d)==='FNAPROFILE' || $.trim(d)==='FEPROFILE' || $.trim(d)==='FOSPROFILE'){
                swal("Error!", "Invalid Profile", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
            else if($.trim(d)==='EMPPOP' || $.trim(d)==='FNAPOP' || $.trim(d)==='FEPOP' || $.trim(d)==='FOSPOP'){
                swal("Error!", "Invalid Proof of Payment", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
            else if($.trim(d)==='emptyfields'){
                swal("Error!", "Please Select Fields", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
            else if($.trim(d)==='invalidphone'){
                swal("Error!", "Invalid Phone Number", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
            else if($.trim(d)==='invalidemail'){
                swal("Error!", "Invalid Email", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
            else if($.trim(d)==='typemanagernotexit'){
                swal("Error!", "Invalid Type of Manager", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
            else if($.trim(d)==='invalidpassword'){
                swal("Error!", "Password Must Uppercase, Special Character and Number", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
            else if($.trim(d)==='emailexist'){
                swal("Error!", "Email Already In Used", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
            else if($.trim(d)==='phoneexist'){
                swal("Error!", "Phone Number Already In Used", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
            else if($.trim(d)==='error1' || $.trim(d)==='error2'){
                swal("Error!", "Process Failed", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
            else if($.trim(d)=='success'){
                window.location.href="success.php";
            }else{
                swal("Error!", "Process Failed", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
        }
    });
});