$("#submitForm").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading-2").show();
    $('#spansubmit').hide();
    $("#buttonss").attr("disabled",true);
    $("#cancel").attr("disabled",true);
    $.ajax({
        url  : "../process/_services.php",
        type : "POST",
        cache:false,
        data :formData,
        contentType : false, // you can also use multipart/form-data replace of false
        processData: false,
        success:function(d){
            if($.trim(d)==='EMPIMG'){
                swal("Error!", "Select Image First", "error");
                $(".center-loading-2").hide();
                $('#spansubmit').show();
                $("#buttonss").attr("disabled",false);
                $("#cancel").attr("disabled",false);
            }else if($.trim(d)==='tokenerror'){
                swal("Error!", "Process Failed!", "error");
                $(".center-loading-2").hide();
                $('#spansubmit').show();
                $("#buttonss").attr("disabled",false);
                $("#cancel").attr("disabled",false);
            }
            else if($.trim(d)==='FNA'){
                swal("Error!", "File Extention Error", "error");
                $(".center-loading-2").hide();
                $('#spansubmit').show();
                $("#buttonss").attr("disabled",false);
                $("#cancel").attr("disabled",false);
            }else if($.trim(d)==='FE'){
                swal("Error!", "File Error", "error");
                $(".center-loading-2").hide();
                $('#spansubmit').show();
                $("#buttonss").attr("disabled",false);
                $("#cancel").attr("disabled",false);
            }else if($.trim(d)==='FOS'){
                swal("Error!", "File Over Size", "error");
                $(".center-loading-2").hide();
                $('#spansubmit').show();
                $("#buttonss").attr("disabled",false);
                $("#cancel").attr("disabled",false);
            }else if($.trim(d)==='EMPF'){
                swal("Error!", "Empty Fields", "error");
                $(".center-loading-2").hide();
                $('#spansubmit').show();
                $("#buttonss").attr("disabled",false);
                $("#cancel").attr("disabled",false);
            }else if($.trim(d)==='notvalidcategory'){
                swal("Error!", "Invalid Category", "error");
                $(".center-loading-2").hide();
                $('#spansubmit').show();
                $("#buttonss").attr("disabled",false);
                $("#cancel").attr("disabled",false);
            }else if($.trim(d)==='nobusiness'){
                swal("Error!", "Create Your Business First", "error");
                $(".center-loading-2").hide();
                $('#spansubmit').show();
                $("#buttonss").attr("disabled",false);
                $("#cancel").attr("disabled",false);
            }
            else if($.trim(d)==='success'){
                swal("Success!", "", "success", {
                        button: "Close",
                });
                $(".center-loading-2").hide();
                $('#spansubmit').show();
                $("#buttonss").attr("disabled",false);
                $("#cancel").attr("disabled",false);
                $("#image").val("");
            }
            else{
                swal("Error!", d, "error");
                $(".center-loading-2").hide();
                $('#spansubmit').show();
                $("#buttonss").attr("disabled",false);
                $("#cancel").attr("disabled",false);
            }
        }
    });
});