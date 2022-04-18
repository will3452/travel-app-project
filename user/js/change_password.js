$("#submitForm").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading").show();
    $('#span').hide();
    $("#submit").attr("disabled",true);
    $.ajax({
        url  : "process/forogot-password.php",
        type : "POST",
        cache:false,
        data :formData,
        contentType : false, // you can also use multipart/form-data replace of false
        processData: false,
        success:function(d){
            if($.trim(d)==='success'){
                $(".center-loading").hide();
                $('#span').show();
                $("#submit").attr("disabled",false);
                window.location.href="success-change";
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