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
                window.location.href="category";
            }else{
                window.location.href="category?search="+search;
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
    window.location.href="category";
});
$(document).on('click','.clearable__clear',function(){
    $(".clearable__clear").hide();
    $("#search").val("");
});
$(document).on('click','#showinfo',function(){
    var id = $(this).attr("data-id");
    window.location.href="view/category-data?category_id="+id;
});

$(document).on('click','#delete',function(){
    var id = $(this).attr("data-id");
    var name = $('#'+id).children('td[data-target=name]').text();
    $(".name_here").text(name);
    $(".deletecategory").fadeIn();
    $("#categ_id").val(id);
});
$(document).on('click','.close_modal',function(){
    $(".name_here").text("");
    $(".deletecategory").fadeOut();
    $("#categ_id").val("");
});
$("#submit_delete_categ_manager").on("submit", function(e){
    e.preventDefault(e);
    var formData = new FormData(this);
    $(".center-loading-3").show();
    $('.span_modal').hide();
    $("#delete_btn_n").attr("disabled",true);
    $(".close_modal").css({'pointer-events': 'none'});
        $.ajax({
            url  : "process/_category.php",
            type : "POST",
            cache:false,
            data :formData,
            contentType : false, // you can also use multipart/form-data replace of false
            processData: false,
            success:function(d){
                if($.trim(d)=='success'){
                    $(".center-loading-3").hide();
                    $('.span_modal').show();
                    $("#delete_btn_n").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".name_here").text("");
                    $(".deletecategory").fadeOut();
                    $("#categ_id").val("");
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
                    $("#delete_btn_n").attr("disabled",false);
                    $(".close_modal").css({'pointer-events': 'auto'});
                    $(".name_here").text("");
                    $(".deletecategory").fadeOut();
                    $("#categ_id").val("");
                }
            }
        });
});