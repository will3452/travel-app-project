$( function() {
    $( "#date" ).datepicker({
        dateFormat: "yy-mm-dd",
        autoclose: true,
        changeMonth: true,
        changeYear: true,
        });
    } );
$("#date").keypress(function (e) {
    return false;
});
$("#date").keydown(function (e) {
    return false;
});
$("#submitForm").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading-2").show();
    $('#spansubmit').hide();
    $("#buttonss").attr("disabled",true);
        $.ajax({
            url  : "../process/_payment-account.php",
            type : "POST",
            cache:false,
            data :formData,
            contentType : false, // you can also use multipart/form-data replace of false
            processData: false,
            success:function(d){
                if($.trim(d)=='success'){
                    $(".center-loading-2").hide();
                    $('#spansubmit').show();
                    $("#buttonss").attr("disabled",false);
                    swal("Success!", "", "success", {
                        button: "Close",
                    });
                    setTimeout(function(){
                        location.reload();
                    }, 1500);
                }
                else if($.trim(d)=='emp'){
                    $(".center-loading-2").hide();
                    $('#spansubmit').show();
                    $("#buttonss").attr("disabled",false);
                    swal("Error!", "Select Fields", "error");
                }else if($.trim(d)=='invdate'){
                    $(".center-loading-2").hide();
                    $('#spansubmit').show();
                    $("#buttonss").attr("disabled",false);
                    swal("Error!", "Invalid Date", "error");
                }
                else{
                    swal("Error!", d, "error");
                    $(".center-loading-2").hide();
                    $('#spansubmit').show();
                    $("#buttonss").attr("disabled",false);
                }
            }
        });
});