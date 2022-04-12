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
            $("#search").attr('disabled', true);
            if(search==''){
                window.location.href="bucketlist";
            }else{
                window.location.href="bucketlist?search="+search;
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
    window.location.href="bucketlist";
});
$(document).on('click','.clearable__clear',function(){
    $(".clearable__clear").hide();
    $("#search").val("");
});
$(document).on('click', "#showinfo", function(){
    var showinfo = $(this).attr("data-id");
    window.location.href="view/bucketlist-data?bucketlist_id="+showinfo;
});
$(document).on('click', "#update", function(){
    var update = $(this).attr("data-id");
    window.location.href="update/update-bucketlist?bucketlist_id="+update;
});
$(document).on('click','#delete',function(){
    var id = $(this).attr("data-id");
    var name = $('#'+id).children('td[data-target=name]').text();
    $(".name_here").text(name);
    $(".deletebucketlist").fadeIn();
    $("#bucketid").val(id);
});
$(document).on('click','.close_modal',function(){
    $(".name_here").text("");
    $(".deletebucketlist").fadeOut();
    $("#bucketid").val("");
});
$("#submitmodal_bucketdelete").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading-3").show();
    $('.span_modal').hide();
    $("#bucketbtn").attr("disabled",true);
    $(".close_modal").css({'pointer-events': 'none'});
        $.ajax({
            url  : "process/_bucketlist.php",
            type : "POST",
            cache:false,
            data :formData,
            contentType : false, // you can also use multipart/form-data replace of false
            processData: false,
            success:function(d){
                if($.trim(d)=='success'){
                    $(".center-loading-3").hide();
                    $('.span_modal').show();
                    $("#bucketbtn").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".name_here").text("");
                    $(".deletebucketlist").fadeOut();
                    $("#bucketid").val("");
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
                    $("#bucketbtn").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".name_here").text("");
                    $(".deletebucketlist").fadeOut();
                    $("#bucketid").val("");
                }
            }
        });
});