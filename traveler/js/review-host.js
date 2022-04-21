
$("#submitForm").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading-2").show();
    $('#spansubmit').hide();
    $("#buttonss").attr("disabled",true);
    $("#cancel").attr("disabled",true);
    $.ajax({
        url  : "../process/_reviews.php",
        type : "POST",
        cache:false,
        data :formData,
        contentType : false, // you can also use multipart/form-data replace of false
        processData: false,
        success:function(d){
            if($.trim(d)==='tokenerror'){
                swal("Error!", "Process Failed!", "error");
                $(".center-loading-2").hide();
                $('#spansubmit').show();
                $("#buttonss").attr("disabled",false);
                $("#cancel").attr("disabled",false);
            }
            else if($.trim(d)==='success'){
                swal("Success!", "Thanks For The Reviews!", "success", {
                        button: "Close",
                });
                $(".center-loading-2").hide();
                $('#spansubmit').show();
                $("#buttonss").attr("disabled",false);
                $("#cancel").attr("disabled",false);
                swal("Success!", "", "success", {
                    button: "Close",
                });
                setTimeout(function(){
                    window.location.href="../host-list";
                }, 2000);
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