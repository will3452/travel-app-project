$("#submitForm").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading").show();
    $('#span').hide();
    $("#submit").attr("disabled",true);
    $.ajax({
        url  : "process/pay-renewacc.php",
        type : "POST",
        cache:false,
        data :formData,
        contentType : false, // you can also use multipart/form-data replace of false
        processData: false,
        success:function(d){

            if($.trim(d)==='emailexistnot'){
                swal("Error!", "Emai Not Registered As Manager!", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
            else if($.trim(d)==='EMPPROFILE' || $.trim(d)==='FNAPROFILE' || $.trim(d)==='FEPROFILE' || $.trim(d)==='FOSPROFILE'){
                swal("Error!", "Invalid Proof of Payment", "error");
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
            }
            else if($.trim(d)==='success'){
                window.location.href="success-renewal";
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